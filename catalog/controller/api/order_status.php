<?php

class ControllerApiOrderStatus extends Controller
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

        $response['meta']['total'] = $this->model_extension_module_akaunting->getTotalOrderStatuses();

        $statuses = $this->model_extension_module_akaunting->getOrderStatuses();

        foreach ($statuses as $status) {
            $response['data'][] = array(
                'name'            => $status['name'],
                'order_status_id' => $status['order_status_id'],
            );
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response));
    }
}
