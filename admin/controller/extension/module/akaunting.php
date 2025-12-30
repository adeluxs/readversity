<?php

class ControllerExtensionModuleAkaunting extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('extension/module/akaunting');

        $data['heading_title'] = $this->language->get('heading_title');

        $this->document->setTitle($data['heading_title']);

        $this->load->model('setting/setting');
        $this->load->model('extension/module/akaunting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('akaunting', $this->request->post);
            $this->model_extension_module_akaunting->editApi($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect(
                $this->url->link(
                    'marketplace/extension',
                    'user_token=' . $this->session->data['user_token'] . '&type=module',
                    'SSL'
                )
            );
        }

        $data['text_yes']         = $this->language->get('text_yes');
        $data['text_no']          = $this->language->get('text_no');
        $data['text_edit']        = $this->language->get('text_edit');
        $data['button_save']      = $this->language->get('button_save');
        $data['button_cancel']    = $this->language->get('button_cancel');
        $data['entry_enabled']    = $this->language->get('entry_enabled');
        $data['error_permission'] = $this->language->get('error_permission');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } elseif (isset($this->session->data['warning'])) {
            $data['error_warning'] = $this->session->data['warning'];

            unset($this->session->data['warning']);
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], 'SSL'),
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link(
                'marketplace/extension',
                'user_token=' . $this->session->data['user_token'] . '&type=module',
                'SSL'
            ),
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link(
                'extension/module/akaunting',
                'user_token=' . $this->session->data['user_token'],
                'SSL'
            ),
        );

        $data['action'] =
            $this->url->link('extension/module/akaunting', 'user_token=' . $this->session->data['user_token'], 'SSL');

        $data['cancel'] = $this->url->link(
            'marketplace/extension',
            'user_token=' . $this->session->data['user_token'] . '&type=module',
            'SSL'
        );

        if (isset($this->request->post['akaunting_api_key'])) {
            $data['akaunting_api_key'] = $this->request->post['akaunting_api_key'];
        } else {
            $data['akaunting_api_key'] = $this->config->get('akaunting_api_key');
        }

        if (isset($this->request->post['akaunting_enabled'])) {
            $data['akaunting_enabled'] = $this->request->post['akaunting_enabled'];
        } else {
            $data['akaunting_enabled'] = $this->config->get('akaunting_enabled');
        }

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/akaunting', $data));
    }

    protected function validate()
    {
        $this->load->language('extension/module/akaunting');

        if (!$this->user->hasPermission('modify', 'extension/module/akaunting')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function session()
    {
        $this->load->language('extension/module/akaunting');

        if (!$this->user->hasPermission('modify', 'extension/module/akaunting')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    ###########
    ## Events
    ###########

    public function install()
    {
        $this->load->model('user/api');
        $this->load->model('setting/setting');

        $data['username'] = 'akaunting';
        $data['status']   = 1;
        $data['key']      = token(256);

        $this->model_user_api->addApi($data);

        $akaunting_data['akaunting_enabled'] = $data['status'];
        $akaunting_data['akaunting_api_key'] = $data['key'];

        $this->model_setting_setting->editSetting('akaunting', $akaunting_data);

        $action = 'extension/module/akaunting/api_session';
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/category/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/category/add/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/category/edit/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/category/delete/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/order_akaunting/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/order_status/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/product/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/product/add/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/product/edit/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/product/delete/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/tax_rate/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/tax_rate/add/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/tax_rate/edit/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/tax_rate/delete/before', $action);
        $this->model_setting_event->addEvent('akaunting', 'catalog/controller/api/customer_akaunting/before', $action);
        $this->model_setting_event->addEvent(
            'akaunting',
            'catalog/controller/api/customer_akaunting/add/before',
            $action
        );
        $this->model_setting_event->addEvent(
            'akaunting',
            'catalog/controller/api/customer_akaunting/edit/before',
            $action
        );
        $this->model_setting_event->addEvent(
            'akaunting',
            'catalog/controller/api/customer_akaunting/delete/before',
            $action
        );

        foreach ((array)glob(DIR_CATALOG . 'controller/extension/module/akaunting/api/*') as $file) {
            if (is_file($file)) {
                rename($file, DIR_CATALOG . 'controller/api/' . basename($file));
            }
        }
    }

    public function uninstall()
    {
        $this->load->model('setting/event');
        $this->load->model('extension/module/akaunting');

        $this->model_extension_module_akaunting->deleteApi();
        $this->model_setting_event->deleteEventByCode('akaunting');
    }
}
