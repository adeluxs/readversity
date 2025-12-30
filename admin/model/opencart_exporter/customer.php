<?php
class ModelOpencartExporterCustomer extends Model {
	public function getExtraFields() {
		$tables = array();
		
		// Product
		$default = array('customer_id', 'customer_group_id', 'store_id', 'language_id', 'firstname', 'lastname', 'email', 'telephone', 'fax', 'password', 'salt', 'cart', 'wishlist', 'newsletter', 'address_id', 'custom_field', 'ip', 'status', 'approved', 'safe', 'token', 'date_added');
		$query = $this->db->query("SHOW COLUMNS FROM `". DB_PREFIX ."customer`");

		if(VERSION >= '2.2.0.0') {
			$default[] = 'code';
		}

		$all_fields = array();

		foreach($query->rows as $customer) {
			$all_fields[] = $customer['Field'];
		}
		
		$extra_fields = array_diff($all_fields, $default);
		if($extra_fields) {
			$tables[] = array(
				'title'			=> $this->language->get('table_customer'),
				'tablename'		=> 'customer',
				'fields'		=> $extra_fields,
			);
		}
		
		return $tables;
	}
	
	public function getCustomers($data = array()) {
		// Find Customers
		$sql = "SELECT *, CONCAT(c.firstname, ' ', c.lastname) AS name, cgd.name AS customer_group FROM " . DB_PREFIX . "customer c LEFT JOIN " . DB_PREFIX . "customer_group_description cgd ON (c.customer_group_id = cgd.customer_group_id) WHERE cgd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (isset($data['find_status']) && $data['find_status'] != '') {
			$sql .= " AND c.status = '" . (int)$data['find_status'] . "'";
		}
		
		$sort_data = array(
			'name',
			'c.email',
			'c.customer_id',
			'customer_group',
			'c.ip',
			'c.status',
			'c.approved',
			'c.newsletter',
			'o.date_added',
		);

		$sql .= " ORDER BY name";

		$sql .= " ASC";
		
		// Find Limit Range
		$sql .= " LIMIT 0 ,50";
		
		$query = $this->db->query($sql);

		return $query->rows;
	}
}