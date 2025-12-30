<?php

class ControllerApiTaxRate extends Controller
{
    public function index()
    {
        $this->load->language('api/akaunting');

        $response = array(
            'meta' => array('total' => 0),
            'data' => array(),
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

        $response['meta']['total'] = $this->model_extension_module_akaunting->getTotalTaxRates($filter_data);

        $tax_rates = $this->model_extension_module_akaunting->getTaxRates($filter_data);

        foreach ($tax_rates as $tax_rate) {
            $response['data'][] = array(
                'id'   => $tax_rate['tax_rate_id'],
                'name' => $tax_rate['name'],
                'rate' => $tax_rate['rate'],
                'type' => $tax_rate['type'],
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
                    $this->language->get('text_tax_rate')
                );

                $json['tax_rate_id'] = $this->model_extension_module_akaunting->addTaxRate($this->request->post);
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

            if (isset($this->request->post['tax_rate_id'])) {
                $tax_rate_id = $this->request->post['tax_rate_id'];
            } else {
                $tax_rate_id = 0;
            }

            $tax_rate = $this->model_extension_module_akaunting->getTaxRate($tax_rate_id);

            if ($tax_rate) {
                $this->validateRequest($json);

                if (!$json) {
                    $json['success'] = sprintf(
                        $this->language->get('text_success_modified'),
                        $this->language->get('text_tax_rate')
                    );

                    $this->model_extension_module_akaunting->editTaxRate($this->request->post);
                }
            } else {
                $json['error'] =
                    sprintf($this->language->get('error_not_found'), $this->language->get('text_tax_rate'));
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

            if (isset($this->request->post['tax_rate_id'])) {
                $tax_rate_id = $this->request->post['tax_rate_id'];
            } else {
                $tax_rate_id = 0;
            }

            $tax_rate = $this->model_extension_module_akaunting->getTaxRate($tax_rate_id);

            if ($tax_rate) {
                $json['success'] = sprintf(
                    $this->language->get('text_success_deleted'),
                    $this->language->get('text_tax_rate')
                );

                $this->model_extension_module_akaunting->deleteTaxRate($tax_rate_id);

            } else {
                $json['error'] =
                    sprintf($this->language->get('error_not_found'), $this->language->get('text_tax_rate'));
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    protected function validateRequest(&$json)
    {
        if ((utf8_strlen($this->request->post['name']) < 1) || (utf8_strlen($this->request->post['name']) > 255)) {
            $json['error'] = sprintf($this->language->get('error_name'), $this->language->get('text_tax_rate'));
        }

        if (!$this->request->post['rate']) {
            $json['error'] = $this->language->get('error_rate');
        }
    }
}
