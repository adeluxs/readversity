<?php

class ModelExtensionModuleAkaunting extends Model
{
    public function getCategories($data = array())
    {
        $sql =
            "SELECT cp.category_id AS category_id, GROUP_CONCAT(cd1.name ORDER BY cp.level SEPARATOR ' &gt; ') AS name"
            . ", c1.parent_id, c1.sort_order, c1.status FROM "
            . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX
            . "category c1 ON (cp.category_id = c1.category_id) LEFT JOIN " . DB_PREFIX
            . "category c2 ON (cp.path_id = c2.category_id) LEFT JOIN " . DB_PREFIX
            . "category_description cd1 ON (cp.path_id = cd1.category_id) LEFT JOIN " . DB_PREFIX
            . "category_description cd2 ON (cp.category_id = cd2.category_id) WHERE cd1.language_id = '"
            . (int)$this->config->get('config_language_id') . "' AND cd2.language_id = '" . (int)$this->config->get(
                'config_language_id'
            ) . "'";

        if (!empty($data['filter_name'])) {
            $sql .= " AND cd2.name LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(c1.date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added'])
                    . "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND TIMESTAMP(c1.date_modified) > TIMESTAMP('" . $this->db->escape($data['filter_date_modified'])
                    . "')";
        }

        $sql .= " GROUP BY cp.category_id";

        $sort_data = array(
            'name',
            'sort_order',
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY sort_order";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalCategories($data = array())
    {
        $sql = "SELECT COUNT(*) AS total from " . DB_PREFIX . "category c " .
               "LEFT JOIN " . DB_PREFIX . "category_description cd ON cd.category_id = c.category_id";

        $implode = array();

        $implode[] = "cd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        if (!empty($data['filter_date_added'])) {
            $implode[] = 'TIMESTAMP(c.date_added) > ' .
                         "TIMESTAMP('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $implode[] = 'TIMESTAMP(c.date_modified) > ' .
                         "TIMESTAMP('" . $this->db->escape($data['filter_date_modified']) . "')";
        }

        if ($implode) {
            $sql .= " WHERE " . implode(" AND ", $implode);
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function addCategory($data)
    {
        $language_id = $this->config->get('config_language_id');

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "category SET " .
            "status = '" . (int)$data['status'] . "', " .
            "date_modified = '" . $this->db->escape($data['date_modified']) . "', " .
            "date_added = '" . $this->db->escape($data['date_added']) . "'"
        );

        $category_id = $this->db->getLastId();

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "category_description SET " .
            "category_id = '" . (int)$category_id . "'," .
            "language_id = '" . (int)$language_id . "'," .
            "meta_title = '" . $this->db->escape($data['name']) . "'," .
            "name = '" . $this->db->escape($data['name']) . "'"
        );

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = '"
            . (int)$this->config->get('config_store_id') . "'"
        );


        $this->cache->delete('category');

        return $category_id;
    }

    public function editCategory($data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "category SET " .
            "status = '" . (int)$this->db->escape($data['status']) . "', " .
            "date_modified = '" . $this->db->escape($data['date_modified']) . "' " .
            "WHERE category_id = '" . (int)$this->db->escape($data['category_id']) . "'"
        );

        $this->db->query(
            "UPDATE " . DB_PREFIX . "category_description SET " .
            "name = '" . $this->db->escape($data['name']) . "' " .
            "WHERE category_id = '" . (int)$this->db->escape($data['category_id']) . "'"
        );

        $this->cache->delete('category');
    }

    public function deleteCategory($category_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "category_path WHERE category_id = '" . (int)$category_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "category WHERE category_id = '" . (int)$category_id . "'");
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "category_to_store WHERE category_id = '" . (int)$category_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_to_category WHERE category_id = '" . (int)$category_id . "'"
        );
        $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=" . (int)$category_id . "'");
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "coupon_category WHERE category_id = '" . (int)$category_id . "'"
        );

        $this->cache->delete('category');
    }

    public function getProducts($data = array())
    {
        $sql = "SELECT *, "
               . "(SELECT category_id FROM " . DB_PREFIX . "product_to_category p2c " .
               "WHERE p2c.product_id = p.product_id LIMIT 1) as category_id "
               . "FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX
               . "product_description pd ON (p.product_id = pd.product_id) WHERE pd.language_id = '"
               . (int)$this->config->get('config_language_id') . "'";

        if (!empty($data['filter_name'])) {
            $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }

        if (!empty($data['filter_model'])) {
            $sql .= " AND p.model LIKE '" . $this->db->escape($data['filter_model']) . "%'";
        }

        if (!empty($data['filter_price'])) {
            $sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
        }

        if (isset($data['filter_quantity']) && $data['filter_quantity'] !== '') {
            $sql .= " AND p.quantity = '" . (int)$data['filter_quantity'] . "'";
        }

        if (isset($data['filter_status']) && $data['filter_status'] !== '') {
            $sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(p.date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND TIMESTAMP(p.date_modified) > TIMESTAMP('" . $this->db->escape($data['filter_date_modified'])
                    . "')";
        }

        $sql .= " GROUP BY p.product_id";

        $sort_data = array(
            'pd.name',
            'p.model',
            'p.price',
            'p.quantity',
            'p.status',
            'p.sort_order',
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY pd.name";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalProducts($data = array())
    {
        $sql = "SELECT COUNT(DISTINCT p.product_id) AS total FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX
               . "product_description pd ON (p.product_id = pd.product_id)";

        $sql .= " WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        if (!empty($data['filter_name'])) {
            $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
        }

        if (!empty($data['filter_model'])) {
            $sql .= " AND p.model LIKE '" . $this->db->escape($data['filter_model']) . "%'";
        }

        if (isset($data['filter_price']) && !is_null($data['filter_price'])) {
            $sql .= " AND p.price LIKE '" . $this->db->escape($data['filter_price']) . "%'";
        }

        if (isset($data['filter_quantity']) && $data['filter_quantity'] !== '') {
            $sql .= " AND p.quantity = '" . (int)$data['filter_quantity'] . "'";
        }

        if (isset($data['filter_status']) && $data['filter_status'] !== '') {
            $sql .= " AND p.status = '" . (int)$data['filter_status'] . "'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(p.date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND TIMESTAMP(p.date_modified) > TIMESTAMP('" . $this->db->escape($data['filter_date_modified'])
                    . "')";
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function addProduct($data)
    {
        $language_id = $this->config->get('config_language_id');

        $sku = $quantity = '';
        if (isset($data['sku'])) {
            $sku = "sku = '" . $this->db->escape($data['sku']) . "', ";
        }

        if (isset($data['quantity'])) {
            $quantity .= "quantity = '" . (int)$data['quantity'] . "', ";
        }

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "product SET " .
            "model = '" . $this->db->escape($data['name']) . "', " .
            $sku .
            $quantity .
            "price = '" . (float)$data['price'] . "', " .
            "status = '" . (int)$data['status'] . "', " .
            "date_added = '" . $this->db->escape($data['date_added']) . "', " .
            "date_modified = '" . $this->db->escape($data['date_modified']) . "'"
        );

        $product_id = $this->db->getLastId();

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "product_description SET " .
            "product_id = '" . (int)$product_id . "', " .
            "language_id = '" . (int)$language_id . "', " .
            "name = '" . $this->db->escape($data['name']) . "', " .
            "description = '" . $this->db->escape($data['description']) . "', " .
            "meta_title = '" . $this->db->escape($data['name']) . "'"
        );


        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "product_to_store SET " .
            "product_id = '" . (int)$product_id . "', " .
            "store_id = '" . (int)$this->config->get('config_store_id') . "'"
        );

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "product_to_category SET " .
            "product_id = '" . (int)$product_id . "', " .
            "category_id = '" . (int)$data['category_id'] . "'"
        );


        $this->cache->delete('product');

        return $product_id;
    }

    public function editProduct($data)
    {
        $language_id = $this->config->get('config_language_id');

        $sku = $quantity = '';
        if (isset($data['sku'])) {
            $sku .= "sku = '" . $this->db->escape($data['sku']) . "', ";
        }

        if (isset($data['quantity'])) {
            $quantity .= "quantity = '" . (int)$data['quantity'] . "', ";
        }

        $this->db->query(
            "UPDATE " . DB_PREFIX . "product SET " .
            $sku .
            $quantity .
            "price = '" . (float)$data['price'] . "', " .
            "status = '" . (int)$data['status'] . "', " .
            "date_modified = '" . $this->db->escape($data['date_modified']) . "' " .
            "WHERE product_id = '" . (int)$this->db->escape($data['product_id']) . "'"
        );

        $this->db->query(
            "UPDATE " . DB_PREFIX . "product_description SET " .
            "language_id = '" . (int)$language_id . "', " .
            "name = '" . $this->db->escape($data['name']) . "', " .
            "description = '" . $this->db->escape($data['description']) . "' " .
            "WHERE product_id = '" . (int)$this->db->escape($data['product_id']) . "'"
        );

        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_to_category WHERE " .
            "product_id = '" . (int)$data['product_id'] . "'"
        );

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "product_to_category SET " .
            "product_id = '" . (int)$data['product_id'] . "', " .
            "category_id = '" . (int)$data['category_id'] . "'"
        );


        $this->cache->delete('product');
    }

    public function deleteProduct($product_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int)$product_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_description WHERE product_id = '" . (int)$product_id . "'"
        );
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_filter WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_option WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_option_value WHERE product_id = '" . (int)$product_id . "'"
        );
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE related_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_reward WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_special WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_to_download WHERE product_id = '" . (int)$product_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "product_to_layout WHERE product_id = '" . (int)$product_id . "'"
        );
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_recurring WHERE product_id = " . (int)$product_id);
        $this->db->query("DELETE FROM " . DB_PREFIX . "review WHERE product_id = '" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=" . (int)$product_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "coupon_product WHERE product_id = '" . (int)$product_id . "'");

        $this->cache->delete('product');
    }

    public function getProduct($product_id)
    {
        $query = $this->db->query(
            "SELECT DISTINCT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX
            . "product_description pd ON (p.product_id = pd.product_id) WHERE p.product_id = '" . (int)$product_id
            . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'"
        );

        return $query->row;
    }

    public function getCustomers($data = array())
    {
        $sql = "SELECT *, CONCAT(c.firstname, ' ', c.lastname) AS name, cgd.name AS customer_group FROM " . DB_PREFIX
               . "customer c LEFT JOIN " . DB_PREFIX
               . "customer_group_description cgd ON (c.customer_group_id = cgd.customer_group_id)";

        if (!empty($data['filter_affiliate'])) {
            $sql .= " LEFT JOIN " . DB_PREFIX . "customer_affiliate ca ON (c.customer_id = ca.customer_id)";
        }

        $sql .= " WHERE cgd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

        $implode = array();

        if (!empty($data['filter_name'])) {
            $implode[] =
                "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }

        if (!empty($data['filter_email'])) {
            $implode[] = "c.email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
        }

        if (isset($data['filter_newsletter']) && !is_null($data['filter_newsletter'])) {
            $implode[] = "c.newsletter = '" . (int)$data['filter_newsletter'] . "'";
        }

        if (!empty($data['filter_customer_group_id'])) {
            $implode[] = "c.customer_group_id = '" . (int)$data['filter_customer_group_id'] . "'";
        }

        if (!empty($data['filter_affiliate'])) {
            $implode[] = "ca.status = '" . (int)$data['filter_affiliate'] . "'";
        }

        if (!empty($data['filter_ip'])) {
            $implode[] = "c.customer_id IN (SELECT customer_id FROM " . DB_PREFIX . "customer_ip WHERE ip = '"
                         . $this->db->escape($data['filter_ip']) . "')";
        }

        if (isset($data['filter_status']) && $data['filter_status'] !== '') {
            $implode[] = "c.status = '" . (int)$data['filter_status'] . "'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(c.date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if ($implode) {
            $sql .= " AND " . implode(" AND ", $implode);
        }

        $sort_data = array(
            'name',
            'c.email',
            'customer_group',
            'c.status',
            'c.ip',
            'c.date_added',
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY name";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalCustomers($data = array())
    {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer";

        $implode = array();

        if (!empty($data['filter_name'])) {
            $implode[] = "CONCAT(firstname, ' ', lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
        }

        if (!empty($data['filter_email'])) {
            $implode[] = "email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
        }

        if (isset($data['filter_newsletter']) && !is_null($data['filter_newsletter'])) {
            $implode[] = "newsletter = '" . (int)$data['filter_newsletter'] . "'";
        }

        if (!empty($data['filter_customer_group_id'])) {
            $implode[] = "customer_group_id = '" . (int)$data['filter_customer_group_id'] . "'";
        }

        if (!empty($data['filter_ip'])) {
            $implode[] =
                "customer_id IN (SELECT customer_id FROM " . DB_PREFIX . "customer_ip WHERE ip = '" . $this->db->escape(
                    $data['filter_ip']
                ) . "')";
        }

        if (isset($data['filter_status']) && $data['filter_status'] !== '') {
            $implode[] = "status = '" . (int)$data['filter_status'] . "'";
        }

        if (!empty($data['filter_date_added'])) {
            $implode[] = "TIMESTAMP(date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if ($implode) {
            $sql .= " WHERE " . implode(" AND ", $implode);
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function addCustomer($data)
    {
        $customer_group_id = $this->config->get('config_customer_group_id');

        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "customer SET " .
            "customer_group_id = '" . (int)$customer_group_id . "', " .
            "firstname = '" . $this->db->escape($data['firstname']) . "', " .
            "lastname = '" . $this->db->escape($data['lastname']) . "', " .
            "email = '" . $this->db->escape($data['email']) . "', " .
            "telephone = '" . $this->db->escape($data['telephone']) . "', " .
            "status = '" . (int)$data['status'] . "', " .
            "date_added = '" . $this->db->escape($data['date_added']) . "'"
        );

        return $this->db->getLastId();
    }

    public function editCustomer($data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "customer SET " .
            "firstname = '" . $this->db->escape($data['firstname']) . "', " .
            "lastname = '" . $this->db->escape($data['lastname']) . "', " .
            "email = '" . $this->db->escape($data['email']) . "', " .
            "telephone = '" . $this->db->escape($data['telephone']) . "', " .
            "status = '" . $this->db->escape($data['status']) . "' " .
            "WHERE customer_id = '" . (int)$data['customer_id'] . "'"
        );
    }

    public function deleteCustomer($customer_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "customer_activity WHERE customer_id = '" . (int)$customer_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "customer_affiliate WHERE customer_id = '" . (int)$customer_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "customer_approval WHERE customer_id = '" . (int)$customer_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int)$customer_id . "'"
        );
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int)$customer_id . "'"
        );
        $this->db->query("DELETE FROM " . DB_PREFIX . "customer_ip WHERE customer_id = '" . (int)$customer_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "address WHERE customer_id = '" . (int)$customer_id . "'");
    }

    public function getAddress($address_id, $customer_id)
    {
        $address_query = $this->db->query(
            "SELECT DISTINCT * FROM " . DB_PREFIX . "address WHERE address_id = '" . (int)$address_id
            . "' AND customer_id = '" . (int)$customer_id . "'"
        );

        if ($address_query->num_rows) {
            $country_query = $this->db->query(
                "SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$address_query->row['country_id']
                . "'"
            );

            if ($country_query->num_rows) {
                $country        = $country_query->row['name'];
                $iso_code_2     = $country_query->row['iso_code_2'];
                $iso_code_3     = $country_query->row['iso_code_3'];
                $address_format = $country_query->row['address_format'];
            } else {
                $country        = '';
                $iso_code_2     = '';
                $iso_code_3     = '';
                $address_format = '';
            }

            $zone_query = $this->db->query(
                "SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$address_query->row['zone_id'] . "'"
            );

            if ($zone_query->num_rows) {
                $zone      = $zone_query->row['name'];
                $zone_code = $zone_query->row['code'];
            } else {
                $zone      = '';
                $zone_code = '';
            }

            $address_data = array(
                'address_id'     => $address_query->row['address_id'],
                'firstname'      => $address_query->row['firstname'],
                'lastname'       => $address_query->row['lastname'],
                'company'        => $address_query->row['company'],
                'address_1'      => $address_query->row['address_1'],
                'address_2'      => $address_query->row['address_2'],
                'postcode'       => $address_query->row['postcode'],
                'city'           => $address_query->row['city'],
                'zone_id'        => $address_query->row['zone_id'],
                'zone'           => $zone,
                'zone_code'      => $zone_code,
                'country_id'     => $address_query->row['country_id'],
                'country'        => $country,
                'iso_code_2'     => $iso_code_2,
                'iso_code_3'     => $iso_code_3,
                'address_format' => $address_format,
                'custom_field'   => json_decode($address_query->row['custom_field'], true),
            );

            return $address_data;
        } else {
            return false;
        }
    }

    public function getOrders($data = array())
    {
        $sql = "SELECT *, z.code AS payment_zone_code FROM `" . DB_PREFIX . "order` o LEFT JOIN `" . DB_PREFIX
               . "zone` z ON (o.payment_zone_id = z.zone_id) ";

        if (!empty($data['filter_order_status'])) {
            $implode = array();

            $order_statuses = explode(',', $data['filter_order_status']);

            foreach ($order_statuses as $order_status_id) {
                $implode[] = "o.order_status_id = '" . (int)$order_status_id . "'";
            }

            if ($implode) {
                $sql .= " WHERE (" . implode(" OR ", $implode) . ")";
            }
        } elseif (isset($data['filter_order_status_id']) && $data['filter_order_status_id'] !== '') {
            $sql .= " WHERE o.order_status_id = '" . (int)$data['filter_order_status_id'] . "'";
        } else {
            $sql .= " WHERE o.order_status_id > '0'";
        }

        if (!empty($data['filter_order_id'])) {
            $sql .= " AND o.order_id = '" . (int)$data['filter_order_id'] . "'";
        }

        if (!empty($data['filter_customer'])) {
            $sql .= " AND CONCAT(o.firstname, ' ', o.lastname) LIKE '%" . $this->db->escape($data['filter_customer'])
                    . "%'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(o.date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND TIMESTAMP(o.date_modified) > TIMESTAMP('" . $this->db->escape($data['filter_date_modified'])
                    . "')";
        }

        if (!empty($data['filter_total'])) {
            $sql .= " AND o.total = '" . (float)$data['filter_total'] . "'";
        }

        $sort_data = array(
            'o.order_id',
            'customer',
            'order_status',
            'o.date_added',
            'o.date_modified',
            'o.total',
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY o.order_id";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalOrders($data = array())
    {
        $sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order`";

        if (!empty($data['filter_order_status'])) {
            $implode = array();

            $order_statuses = explode(',', $data['filter_order_status']);

            foreach ($order_statuses as $order_status_id) {
                $implode[] = "order_status_id = '" . (int)$order_status_id . "'";
            }

            if ($implode) {
                $sql .= " WHERE (" . implode(" OR ", $implode) . ")";
            }
        } elseif (isset($data['filter_order_status_id']) && $data['filter_order_status_id'] !== '') {
            $sql .= " WHERE order_status_id = '" . (int)$data['filter_order_status_id'] . "'";
        } else {
            $sql .= " WHERE order_status_id > '0'";
        }

        if (!empty($data['filter_order_id'])) {
            $sql .= " AND order_id = '" . (int)$data['filter_order_id'] . "'";
        }

        if (!empty($data['filter_customer'])) {
            $sql .= " AND CONCAT(firstname, ' ', lastname) LIKE '%" . $this->db->escape($data['filter_customer'])
                    . "%'";
        }

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) . "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND TIMESTAMP(date_modified) > TIMESTAMP('" . $this->db->escape($data['filter_date_modified'])
                    . "')";
        }

        if (!empty($data['filter_total'])) {
            $sql .= " AND total = '" . (float)$data['filter_total'] . "'";
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function createInvoiceNo($order_info)
    {
        $query = $this->db->query(
            "SELECT MAX(invoice_no) AS invoice_no FROM `" . DB_PREFIX . "order` WHERE invoice_prefix = '"
            . $this->db->escape($order_info['invoice_prefix']) . "'"
        );

        if ($query->row['invoice_no']) {
            $invoice_no = $query->row['invoice_no'] + 1;
        } else {
            $invoice_no = 1;
        }

        $this->db->query(
            "UPDATE `" . DB_PREFIX . "order` SET invoice_no = '" . (int)$invoice_no . "', invoice_prefix = '"
            . $this->db->escape($order_info['invoice_prefix']) . "' WHERE order_id = '" . (int)$order_info['order_id']
            . "'"
        );

        return $order_info['invoice_prefix'] . $invoice_no;
    }

    public function getOrderStatuses()
    {
        $query = $this->db->query(
            "SELECT name, order_status_id FROM " . DB_PREFIX . "order_status WHERE language_id = '"
            . (int)$this->config->get('config_language_id') . "' ORDER BY name"
        );

        return $query->rows;
    }

    public function getTotalOrderStatuses()
    {
        $query = $this->db->query(
            "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "order_status WHERE language_id = '"
            . (int)$this->config->get('config_language_id') . "'"
        );

        return $query->row['total'];
    }

    public function addTaxRate($data)
    {
        $this->db->query(
            "INSERT INTO " . DB_PREFIX . "tax_rate SET name = '" . $this->db->escape($data['name']) . "', rate = '"
            . (float)$data['rate'] . "', `type` = '" . $this->db->escape($data['type']) . "', " .
            "date_added = '" . $this->db->escape($data['date_added']) . "', " .
            "date_modified = '" . $this->db->escape($data['date_modified']) . "'"
        );

        $tax_rate_id = $this->db->getLastId();

        if (isset($data['tax_rate_customer_group'])) {
            foreach ($data['tax_rate_customer_group'] as $customer_group_id) {
                $this->db->query(
                    "INSERT INTO " . DB_PREFIX . "tax_rate_to_customer_group SET tax_rate_id = '" . (int)$tax_rate_id
                    . "', customer_group_id = '" . (int)$customer_group_id . "'"
                );
            }
        }

        return $tax_rate_id;
    }

    public function editTaxRate($data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "tax_rate " .
            "SET name = '" . $this->db->escape($data['name']) . "', rate = '" . (float)$data['rate'] . "', `type` = '"
            . $this->db->escape($data['type']) . "', " .
            "date_modified = '" . $this->db->escape($data['date_modified']) . "' " .
            "WHERE tax_rate_id = '" . (int)$data['tax_rate_id'] . "'"
        );
    }

    public function deleteTaxRate($tax_rate_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "tax_rate WHERE tax_rate_id = '" . (int)$tax_rate_id . "'");
        $this->db->query(
            "DELETE FROM " . DB_PREFIX . "tax_rate_to_customer_group WHERE tax_rate_id = '" . (int)$tax_rate_id . "'"
        );
    }

    public function getTaxRate($tax_rate_id)
    {
        $query = $this->db->query(
            "SELECT tr.tax_rate_id, tr.name AS name, tr.rate, tr.type, tr.geo_zone_id, tr.date_added, tr.date_modified FROM "
            . DB_PREFIX . "tax_rate tr WHERE tr.tax_rate_id = '" . (int)$tax_rate_id . "'"
        );

        return $query->row;
    }

    public function getTaxRates($data = array())
    {
        $sql =
            "SELECT tr.tax_rate_id, tr.name AS name, tr.rate, tr.type, tr.date_added, tr.date_modified FROM "
            . DB_PREFIX . "tax_rate tr WHERE 1 = 1";

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(tr.date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) .
                    "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND TIMESTAMP(tr.date_modified) > TIMESTAMP('" . $this->db->escape($data['filter_date_modified'])
                    . "')";
        }

        $sort_data = array(
            'tr.name',
            'tr.rate',
            'tr.type',
            'gz.name',
            'tr.date_added',
            'tr.date_modified',
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY tr.name";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalTaxRates($data)
    {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "tax_rate tr WHERE 1 = 1";

        if (!empty($data['filter_date_added'])) {
            $sql .= " AND TIMESTAMP(tr.date_added) > TIMESTAMP('" . $this->db->escape($data['filter_date_added']) .
                    "')";
        }

        if (!empty($data['filter_date_modified'])) {
            $sql .= " AND TIMESTAMP(tr.date_modified) > TIMESTAMP('" . $this->db->escape($data['filter_date_modified'])
                    . "')";
        }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }
}
