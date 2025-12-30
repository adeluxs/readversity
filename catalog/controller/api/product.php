<?php

class ControllerApiProduct extends Controller
{
    public function index()
    {
        $this->load->language('api/akaunting');

        $json = array();

        if (!isset($this->session->data['api_id'])) {
            $json['error'] = $this->language->get('error_permission');

            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));

            return;
        }

        $this->load->model('extension/module/akaunting');

        if (isset($this->request->post['sort'])) {
            $sort = $this->request->post['sort'];
        } else {
            $sort = 'pd.name';
        }

        if (isset($this->request->post['order'])) {
            $order = $this->request->post['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->post['page'])) {
            $page = $this->request->post['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->post['limit'])) {
            $limit = $this->request->post['limit'];
        } else {
            $limit = 100;
        }

        if (isset($this->request->post['filter_date_added'])) {
            $filter_date_added = $this->request->post['filter_date_added'];
        } else {
            $filter_date_added = '';
        }

        if (isset($this->request->post['filter_date_modified'])) {
            $filter_date_modified = $this->request->post['filter_date_modified'];
        } else {
            $filter_date_modified = '';
        }

        $response = array(
            'meta' => array('total' => 0),
            'data' => array()
        );

        $filter_data = array(
            'filter_date_added'    => $filter_date_added,
            'filter_date_modified' => $filter_date_modified,
            'sort'                 => $sort,
            'order'                => $order,
            'start'                => ($page - 1) * $limit,
            'limit'                => $limit,
        );

        $response['meta']['total'] = $this->model_extension_module_akaunting->getTotalProducts($filter_data);

        $results = $this->model_extension_module_akaunting->getProducts($filter_data);

        foreach ($results as $result) {

            $response['data'][] = array(
                'id'          => $result['product_id'],
                'category_id' => $result['category_id'],
                'name'        => $result['name'],
                'description' => $result['description'],
                'price'       => $result['price'],
                'status'      => $result['status'],
                'quantity'    => $result['quantity'],
                'sku'         => $result['sku'],
            );
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response));
    }

    public function add()
    {
        $this->load->language('api/akaunting');

        $json = array();

        if (!isset($this->session->data['api_id'])) {
            $json['error'] = $this->language->get('error_permission');
        } else {
            $this->load->model('extension/module/akaunting');

            $this->validateRequest($json);

            if (!$json) {
                $json['success'] = sprintf(
                    $this->language->get('text_success_created'),
                    $this->language->get('text_product')
                );

                $json['product_id'] = $this->model_extension_module_akaunting->addProduct($this->request->post);
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function edit()
    {
        $this->load->language('api/akaunting');

        $json = array();

        if (!isset($this->session->data['api_id'])) {
            $json['error'] = $this->language->get('error_permission');
        } else {
            $this->load->model('extension/module/akaunting');

            if (isset($this->request->post['product_id'])) {
                $product_id = $this->request->post['product_id'];
            } else {
                $product_id = 0;
            }

            $product = $this->model_extension_module_akaunting->getProduct($product_id);

            if ($product) {
                $this->validateRequest($json);

                if (!$json) {
                    $json['success'] = sprintf(
                        $this->language->get('text_success_modified'),
                        $this->language->get('text_product')
                    );

                    $this->model_extension_module_akaunting->editProduct($this->request->post);
                }
            } else {
                $json['error'] = sprintf(
                    $this->language->get('error_not_found'),
                    $this->language->get('text_product')
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete()
    {
        $this->load->language('api/akaunting');

        $json = array();

        if (!isset($this->session->data['api_id'])) {
            $json['error'] = $this->language->get('error_permission');
        } else {
            $this->load->model('extension/module/akaunting');
            $this->load->model('catalog/product');

            if (isset($this->request->post['product_id'])) {
                $product_id = $this->request->post['product_id'];
            } else {
                $product_id = 0;
            }

            $product = $this->model_catalog_product->getProduct($product_id);

            if ($product) {
                $json['success'] = sprintf(
                    $this->language->get('text_success_deleted'),
                    $this->language->get('text_product')
                );

                $this->model_extension_module_akaunting->deleteProduct($product_id);

            } else {
                $json['error'] = sprintf(
                    $this->language->get('error_not_found'),
                    $this->language->get('text_product')
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    protected function validateRequest(&$json)
    {
        if ((utf8_strlen($this->request->post['name']) < 1) || (utf8_strlen($this->request->post['name']) > 255)) {
            $json['error'] = sprintf($this->language->get('error_name'), $this->language->get('text_product'));
        }
    }
}
