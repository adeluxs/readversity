<?php

class ControllerApiCategory extends Controller
{
    public function index()
    {
        $this->load->language('api/akaunting');

        $response = array(
            'meta' => array('total' => 0),
            'data' => array()
        );

        if (!isset($this->session->data['api_id'])) {
            $response['error'] = $this->language->get('error_permission');

            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($response));

            return;
        }

        $this->load->model('extension/module/akaunting');

        if (isset($this->request->post['sort'])) {
            $sort = $this->request->post['sort'];
        } else {
            $sort = 'name';
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

        $filter_data = array(
            'filter_date_added'    => $filter_date_added,
            'filter_date_modified' => $filter_date_modified,
            'sort'                 => $sort,
            'order'                => $order,
            'start'                => ($page - 1) * $limit,
            'limit'                => $limit,
        );

        $response['meta']['total'] = $this->model_extension_module_akaunting->getTotalCategories($filter_data);

        $categories = $this->model_extension_module_akaunting->getCategories($filter_data);

        foreach ($categories as $category) {
            $response['data'][] = array(
                'id'     => $category['category_id'],
                'name'   => $category['name'],
                'status' => $category['status'],
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
                    $this->language->get('text_category')
                );

                $json['category_id'] = $this->model_extension_module_akaunting->addCategory($this->request->post);
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
            $this->load->model('catalog/category');

            if (isset($this->request->post['category_id'])) {
                $category_id = $this->request->post['category_id'];
            } else {
                $category_id = 0;
            }

            $category = $this->model_catalog_category->getCategory($category_id);

            if ($category) {
                $this->validateRequest($json);

                if (!$json) {
                    $json['success'] = sprintf(
                        $this->language->get('text_success_modified'),
                        $this->language->get('text_category')
                    );

                    $this->model_extension_module_akaunting->editCategory($this->request->post);
                }
            } else {
                $json['error'] =
                    sprintf($this->language->get('error_not_found'), $this->language->get('text_category'));
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
            $this->load->model('catalog/category');

            if (isset($this->request->post['category_id'])) {
                $category_id = $this->request->post['category_id'];
            } else {
                $category_id = 0;
            }

            $category = $this->model_catalog_category->getCategory($category_id);

            if ($category) {
                $json['success'] = sprintf(
                    $this->language->get('text_success_deleted'),
                    $this->language->get('text_category')
                );

                $this->model_extension_module_akaunting->deleteCategory($category_id);

            } else {
                $json['error'] =
                    sprintf($this->language->get('error_not_found'), $this->language->get('text_category'));
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    protected function validateRequest(&$json)
    {
        if ((utf8_strlen($this->request->post['name']) < 1) || (utf8_strlen($this->request->post['name']) > 255)) {
            $json['error'] = sprintf($this->language->get('error_name'), $this->language->get('text_category'));
        }
    }
}
