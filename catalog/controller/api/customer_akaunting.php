<?php

class ControllerApiCustomerAkaunting extends Controller
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
        $this->load->model('account/address');

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

        $response = array(
            'meta' => array('total' => 0),
            'data' => array()
        );

        $filter_data = array(
            'filter_date_added' => $filter_date_added,
            'sort'              => $sort,
            'order'             => $order,
            'start'             => ($page - 1) * $limit,
            'limit'             => $limit,
        );

        $response['meta']['total'] = $this->model_extension_module_akaunting->getTotalCustomers($filter_data);

        $results = $this->model_extension_module_akaunting->getCustomers($filter_data);

        foreach ($results as $result) {
            $address_info =
                $this->model_extension_module_akaunting->getAddress($result['address_id'], $result['customer_id']);

            $address = '';
            if (false !== $address_info) {
            $address = $this->getCustomerAddress($address_info);
            }


            $response['data'][] = array(
                'id'        => $result['customer_id'],
                'name'      => $result['name'],
                'email'     => $result['email'],
                'telephone' => $result['telephone'],
                'address'   => $address,
                'status'    => $result['status'],
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
            $this->load->model('account/customer');
            $this->load->model('localisation/country');

            $this->validateRequest($json);

            if (!$json) {
                $json['success'] = sprintf(
                    $this->language->get('text_success_created'),
                    $this->language->get('text_customer')
                );

                $json['customer_id'] = $this->model_extension_module_akaunting->addCustomer($this->request->post);
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
            $this->load->model('account/customer');

            if (isset($this->request->post['customer_id'])) {
                $customer_id = $this->request->post['customer_id'];
            } else {
                $customer_id = 0;
            }

            $customer = $this->model_account_customer->getCustomer($customer_id);

            if ($customer) {
                $this->validateRequest($json);

                if (!$json) {
                    $json['success'] = sprintf(
                        $this->language->get('text_success_modified'),
                        $this->language->get('text_customer')
                    );

                    $this->model_extension_module_akaunting->editCustomer($this->request->post);
                }
            } else {
                $json['error'] = sprintf(
                    $this->language->get('error_not_found'),
                    $this->language->get('text_customer')
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
            $this->load->model('account/customer');

            if (isset($this->request->post['customer_id'])) {
                $customer_id = $this->request->post['customer_id'];
            } else {
                $customer_id = 0;
            }

            $category = $this->model_account_customer->getCustomer($customer_id);

            if ($category) {
                $json['success'] = sprintf(
                    $this->language->get('text_success_deleted'),
                    $this->language->get('text_customer')
                );

                $this->model_extension_module_akaunting->deleteCustomer($customer_id);

            } else {
                $json['error'] =
                    sprintf($this->language->get('error_not_found'), $this->language->get('text_customer'));
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    protected function validateRequest(&$json)
    {
        $explodedName = explode(' ', $this->request->post['name']);

        if (isset($explodedName[1])) {
            $this->request->post['lastname'] = $explodedName[1];
        } else {
            $this->request->post['lastname'] = $explodedName[0];
        }

        $this->request->post['firstname'] = $explodedName[0];

        if (
            (utf8_strlen($this->request->post['firstname']) < 1)
            || (utf8_strlen(trim($this->request->post['firstname'])) > 32)
        ) {
            $json['error'] = $this->language->get('error_firstname');
        }

        if (
            (utf8_strlen($this->request->post['lastname']) < 1)
            || (utf8_strlen(trim($this->request->post['lastname'])) > 32)
        ) {
            $json['error'] = $this->language->get('error_lastname');
        }

        if (
            (utf8_strlen($this->request->post['email']) > 96)
            || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)
        ) {
            $json['error'] = $this->language->get('error_email');
        }

        $customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

        if (!isset($this->request->post['customer_id'])) {
            if ($customer_info) {
                $json['error'] = $this->language->get('error_exists');
            }
        } else {
            if ($customer_info && ($this->request->post['customer_id'] != $customer_info['customer_id'])) {
                $json['error'] = $this->language->get('error_exists');
            }
        }

        if (
            (utf8_strlen($this->request->post['telephone']) < 3)
            || (utf8_strlen($this->request->post['telephone']) > 32)
        ) {
            $json['error'] = $this->language->get('error_telephone');
        }
    }

    protected function getCustomerAddress($address_info, $format = null)
    {
        if (!$format) {
            $format = '{firstname} {lastname}' . "\n" .
                      '{company}' . "\n" .
                      '{address_1}' . "\n" .
                      '{address_2}' . "\n" .
                      '{city} {postcode}' . "\n" .
                      '{zone}' . "\n" .
                      '{country}';
        }

        $find = array(
            '{firstname}',
            '{lastname}',
            '{company}',
            '{address_1}',
            '{address_2}',
            '{city}',
            '{postcode}',
            '{zone}',
            '{zone_code}',
            '{country}',
        );

        $replace = array(
            'firstname' => $address_info['firstname'],
            'lastname'  => $address_info['lastname'],
            'company'   => $address_info['company'],
            'address_1' => $address_info['address_1'],
            'address_2' => $address_info['address_2'],
            'city'      => $address_info['city'],
            'postcode'  => $address_info['postcode'],
            'zone'      => $address_info['zone'],
            'zone_code' => $address_info['zone_code'],
            'country'   => $address_info['country'],
        );

        $address = str_replace(
            array("\r\n", "\r", "\n"),
            "\n",
            preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), "\n", trim(str_replace($find, $replace, $format)))
        );

        return $address;
    }
}
