<?php

class ControllerApiLoginAkaunting extends Controller
{
    public function index()
    {
        $this->load->language('api/login');

        $json = array();

        $this->load->model('account/api');

        // Login with API Key
        $api_info = false;
        if (isset($this->request->post['username'])) {
            $api_info = $this->model_account_api->login($this->request->post['username'], $this->request->post['key']);
        }

        if ($api_info) {
            if (!$json) {
                $json['success'] = $this->language->get('text_success');

                $session = new Session($this->config->get('session_engine'), $this->registry);

                $session->start();

                $this->model_account_api->addApiSession(
                    $api_info['api_id'],
                    $session->getId(),
                    $this->request->server['REMOTE_ADDR']
                );

                $session->data['api_id'] = $api_info['api_id'];

                // Create Token
                $json['api_token'] = $session->getId();
            } else {
                $json['error']['key'] = $this->language->get('error_key');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
