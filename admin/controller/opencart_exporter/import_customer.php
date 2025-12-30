<?php
set_time_limit(0);

ini_set('memory_limit', '999M');
ini_set('set_time_limit', '0');
require_once(DIR_SYSTEM.'library/PHPExcel.php');

class ControllerOpencartExporterImportCustomer extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('opencart_exporter/import_customer');
		
		$this->document->addStyle('view/stylesheet/opencartexporter/advance_customer.css');
		
		$this->document->setTitle($this->language->get('heading_title'));
			
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_form'] = $this->language->get('text_form');

		$data['user_token'] = $this->session->data['user_token'];

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('opencart_exporter/import_customer', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}
	
		$data['sample_file'] = HTTP_CATALOG . 'demo_file/opencart_exporter/CustomerDemo.xls';
		
		$data['cell_operations'] = array();
		$data['cell_operations']['customer_group'] = $this->language->get('cell_customer_group');
		$data['cell_operations']['store'] = $this->language->get('cell_store');
		$data['cell_operations']['firstname'] = $this->language->get('cell_firstname');
		$data['cell_operations']['lastname'] = $this->language->get('cell_lastname');
		$data['cell_operations']['email'] = $this->language->get('cell_email');
		$data['cell_operations']['telephone'] = $this->language->get('cell_telephone');
		$data['cell_operations']['fax'] = $this->language->get('cell_fax');
		$data['cell_operations']['password'] = $this->language->get('cell_password');
		$data['cell_operations']['newsletter'] = $this->language->get('cell_newsletter');
		$data['cell_operations']['ip'] = $this->language->get('cell_ip');
		$data['cell_operations']['status'] = $this->language->get('cell_status');
		$data['cell_operations']['safe'] = $this->language->get('cell_safe');
		$data['cell_operations']['code'] = $this->language->get('cell_code');
		$data['cell_operations']['date_added'] = $this->language->get('cell_date_added');
		$data['cell_operations']['custom_fields'] = $this->language->get('cell_custom_fields');
		$data['cell_operations']['addresses'] = $this->language->get('cell_addresses');
		$data['cell_operations']['histories'] = $this->language->get('cell_histories');
		$data['cell_operations']['rewards'] = $this->language->get('cell_rewards');
		$data['cell_operations']['transactions'] = $this->language->get('cell_transactions');
		$data['cell_operations']['extra_fields'] = $this->language->get('cell_extra_fields');
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('opencart_exporter/import_customer', $data));
	}

	private function validate_json($str) {
	    if (is_string($str) && $str) {
	        @json_decode($str);
	        return (json_last_error() === JSON_ERROR_NONE);
	    }
	    return false;
	}
}