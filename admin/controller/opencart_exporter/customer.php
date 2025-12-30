<?php
require_once(DIR_SYSTEM.'library/PHPExcel.php');
class ControllerOpencartExporterCustomer extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('opencart_exporter/customer');

		$this->load->model('opencart_exporter/customer');
		
		$this->document->addStyle('view/stylesheet/opencartexporter/advance_customer.css');
		
		$this->document->setTitle($this->language->get('heading_title'));

		$url = '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('opencart_exporter/customer', 'user_token=' . $this->session->data['user_token'], true)
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
		
		$data['extrafields'] = $this->model_opencart_exporter_customer->getExtraFields();
		
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['opencart_exporter_action'] = $this->url->link('opencart_exporter/customer/export', 'user_token=' . $this->session->data['user_token'], true);
		
		$this->load->model('setting/store');

		$data['stores'] = $this->model_setting_store->getStores();
		
		$this->load->model('customer/customer_group');
		
		$data['customerpdf'] = $this->url->link('opencart_exporter/customerpdf', 'user_token=' . $this->session->data['user_token'], true);
		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();
		$data['customer_action'] = str_replace('&amp;', '&', $this->url->link('customer/customer/autocomplete', 'user_token=' . $this->session->data['user_token'], true));
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('opencart_exporter/customer', $data));
	}

	public function export() {
		
		$json = array();
		
		$this->load->language('opencart_exporter/customer');
		
		$this->load->model('opencart_exporter/customer');

		$this->load->model('customer/custom_field');
		
		$this_custom_field = $this->model_customer_custom_field;
		
		$this->load->model('setting/store');

		$objPHPExcel = new PHPExcel();
		
		$objPHPExcel->setActiveSheetIndex(0);  
		
		$valid = true;
		
		if(isset($this->request->post['find_format']) && $this->request->post['find_format'] != '') {
			$find_format = $this->request->post['find_format'];
		}else{
			$find_format = null;
		}
		
		if(isset($this->request->post['find_status']) && $this->request->post['find_status'] != '') {
			$find_status = $this->request->post['find_status'];
		}else{
			$find_status = null;
		}
						
		if($valid) {
			$filter_data = array(
				'find_status'				=> $find_status,
				'find_format'				=> $find_format,
			);
			
			$i = 1;
			$char = 'A';
			
			$objPHPExcel->getActiveSheet()->getStyle('1')->getFill()->applyFromArray(array(
				'type'				=> PHPExcel_Style_Fill::FILL_SOLID,
				'startcolor' 	=> array(
				'rgb' 				=> '008000',
				),
			));
					
			$objPHPExcel->getActiveSheet()->getStyle('1')->applyFromArray(array(
				'font'  => array(
				'color' => array('rgb' => 'FFFFFF'),
				'bold'  => true,
				)
			));	
			
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_customer_id'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);		
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_customer_group'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);			
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_store'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_firstname'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_lastname'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_email'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_telephone'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_fax'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_password'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_salt'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_newsletter'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_ip'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_status'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_approved'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_safe'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_code'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->setCellValue($char .$i, $this->language->get('export_date_added'))->getColumnDimension($char)->setAutoSize(true); $objPHPExcel->getActiveSheet()->getStyle($char++ .$i)->getAlignment()->setWrapText(true);
			
			// Fetch Customers
			$results = $this->model_opencart_exporter_customer->getCustomers($filter_data);
			
			if($results) {
				// Fetch Total Customers
				$objPHPExcel->getActiveSheet()->setTitle(sprintf($this->language->get('export_title'), count($results)));
				
				foreach($results as $result) {
					$char_value = 'A'; $i++; 

						$store_info = $this->model_setting_store->getStore($result['store_id']);

						// Store Name
						if($store_info) {
							$store_name = $store_info['name'];
						} else{
							$store_name = $this->language->get('text_default');
						}
							
								// Assign Cell Values
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['customer_id']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['customer_group']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $store_name);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['firstname']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['lastname']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['email']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['telephone']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['fax']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['password']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['salt']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['newsletter']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['ip']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['status']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, isset($result['approved']) ? $result['approved'] : '');
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['safe']);
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, (isset($result['code']) ? $result['code'] : ''));
								$objPHPExcel->getActiveSheet()->setCellValue($char_value++ .$i, $result['date_added']);
				}
				
				// Find Format
				$file_name = 'Customer.csv';
				$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
				
				$file_to_save = DIR_UPLOAD . $file_name;
				
				$objWriter->save(DIR_UPLOAD . $file_name); 
				
				$json['href'] = str_replace('&amp;', '&', $this->url->link('opencart_exporter/customer/fileDownload', 'user_token='. $this->session->data['user_token'] .'&file_name='. $file_name .'&find_format='. $find_format, true));
				
				$json['success'] = $this->language->get('text_success');
			} else{
				$json['error'] = $this->language->get('text_no_results');
			}
		} else{
			$json['error'] = $this->language->get('error_onerequired');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function fileDownload() {
		$file_to_save = DIR_UPLOAD . $this->request->get['file_name'];
		
		header('Content-Type: application/vnd.ms-excel'); 
		header('Content-Disposition: attachment;filename="'. $this->request->get['file_name'] .'"'); 
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: '. filesize($file_to_save));
		header('Cache-Control: max-age=0'); 
		header('Accept-Ranges: bytes');
		readfile($file_to_save);
		
		unlink($file_to_save);
	}
}