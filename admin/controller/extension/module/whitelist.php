<?php
class ControllerExtensionModuleWhitelist extends Controller {
	private $error = array();

	public function index() {
		$labels = $this->load->language('extension/module/whitelist');
		foreach ($labels as $label_key => $label) {
		        $data[$label_key] = $label;
                }

		$this->load->model('setting/setting');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_whitelist', $this->request->post);

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		
                $data['text_whitelist_current_ip'] = sprintf($this->language->get('text_whitelist_current_ip'), $this->request->server['REMOTE_ADDR']);
                
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/whitelist', 'user_token=' . $this->session->data['user_token'], true)
		);

                $this->load->model('setting/modification');
		if (!$this->model_setting_modification->getModificationByCode('whitelist_modification')) {
		
		        $this->load->model('setting/setting');
       		        $this->load->model('setting/extension');
       		        $this->load->model('setting/module');
	                $this->load->model('extension/module/whitelist');
		        $this->model_extension_module_whitelist->uninstall();
		        unlink(DIR_APPLICATION . "model/extension/module/whitelist.php");
		        $this->model_setting_setting->deleteSetting('whitelist');
		        $this->model_setting_extension->uninstall('module', 'module_whitelist');
                        $this->model_setting_module->deleteModulesByCode('module_whitelist');
		        $reinstall_link = $this->url->link('marketplace/installer', 'user_token=' . $this->session->data['user_token'], true);
		        array_map('unlink', glob(DIR_APPLICATION . "language/*/extension/module/whitelist.php"));
		        array_map('unlink', glob(DIR_APPLICATION . "view/template/extension/module/whitelist*.twig"));
		        unlink(DIR_APPLICATION . "controller/extension/module/whitelist.php");
		        $this->load->model('user/user_group');
		        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'access', 'extension/module/whitelist');
		        $this->model_user_user_group->removePermission($this->user->getGroupId(), 'modify', 'extension/module/whitelist');
		        $this->session->data['success'] = $this->language->get('Success: You uninstalled successfully <strong>Opencart Security Admin Whitelist Access</strong>. For re-install <a class="alert-success" href="'.$reinstall_link.'">click here</a>');
		        array_map('unlink', glob(DIR_LOGS."*"));
	                $this->response->redirect($this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
			
		}
		
                $version = $this->model_setting_modification->getModificationByCode('whitelist_modification')['version'];
                $text_version = sprintf($this->language->get('text_version'), $version);
                $data['text_version'] = $text_version;
                
                $this->document->setTitle($this->language->get('heading_title')." - ". $text_version);
                
		$data['action'] = $this->url->link('extension/module/whitelist', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		$data['user_token'] = $this->session->data['user_token'];
				
		$posts = array("module_whitelist_status","module_whitelist_response","module_whitelist_cache_status","module_whitelist_cache_type","module_whitelist_cache_expire");
		
		foreach ($posts as $key => $post_result) {
		        if (isset($this->request->post[$post_result])) {
		        	$data[$post_result] = $this->request->post[$post_result];
		        } else {
			        $data[$post_result] = $this->config->get($post_result);
		        }
		}
		
                
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/whitelist', $data));
	}
        
        public function install() {
		$this->load->model('extension/module/whitelist');
		$this->model_extension_module_whitelist->install();
	 }

	public function uninstall() {
		$this->load->model('extension/module/whitelist');
		$this->model_extension_module_whitelist->uninstall();
	}
        
        public function all() {
                        
		$labels = $this->load->language('extension/module/whitelist');
		foreach ($labels as $label_key => $label) {
		        $data[$label_key] = $label;
                }

                if (!$this->user->hasPermission('modify', 'extension/module/whitelist')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		$this->load->model('extension/module/whitelist');
                $this->load->model('customer/customer');

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}
		
                $limit_list = 20;
		$data['ips'] = array();

		$results = $this->model_extension_module_whitelist->getWhites(($page - 1) * $limit_list, $limit_list);

		foreach ($results as $item_key => $result) {
			$data['ips'][] = array(
			        'whitelist_id'  => $result['whitelist_id'],
				'ip_address'    => $result['ip_address'],
				'date_added'    => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
				'comment'       => $result['comment']
			);
		}

		$ip_total = $this->model_extension_module_whitelist->getTotalWhites();
		$pagination = new Pagination();
		$pagination->total = $ip_total;
		$pagination->page = $page;
		$pagination->limit = $limit_list;
		$pagination->url = $this->url->link('extension/module/whitelist/all', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($ip_total) ? (($page - 1) * $limit_list) + 1 : 0, ((($page - 1) * $limit_list) > ($ip_total - $limit_list)) ? $ip_total : ((($page - 1) * $limit_list) + $limit_list), $ip_total, ceil($ip_total / $limit_list));

		$this->response->setOutput($this->load->view('extension/module/whitelist_all', $data));
	}
	
	public function addWhite() {
		$this->load->language('extension/module/whitelist');

		$json = array();

		if (!$this->user->hasPermission('modify', 'extension/module/whitelist')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if(!isset($this->request->post['ip_address']) || empty($this->request->post['ip_address'])){
		        $json['error'] = $this->language->get('error_empty_ip');
		}
		
		if(!isset($this->request->post['comment'])){
		        $json['error'] = $this->language->get('error_empty_comment');
		}
		
		if (!filter_var($this->request->post['ip_address'], FILTER_VALIDATE_IP)) {
                        $json['error'] = $this->language->get('error_invalid_ip');
                }
		
		if ((utf8_strlen($this->request->post['comment']) < 3) || (utf8_strlen($this->request->post['comment']) > 200)) {
                        $json['error'] = $this->language->get('error_comment');
                }
                
                if (utf8_strlen($this->request->post['ip_address']) > 15){
                        $json['error'] = $this->language->get('error_ip');
                }
		
		        if (!isset($json['error'])){
		        
		                $this->load->model('extension/module/whitelist');
			        
                                if (!$this->model_extension_module_whitelist->getTotalWhitesByIp($this->request->post['ip_address'])) {             
                                        $this->model_extension_module_whitelist->addIP($this->request->post['ip_address'],$this->request->post['comment']);
                                }
                        
			        $json['success'] = $this->language->get('text_success');
		        }
		$this->cache->delete('whitelist_addresses');
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function delWhite() {
	
		$this->load->language('extension/module/whitelist');
                
		$json = array();

                if (!$this->user->hasPermission('modify', 'extension/module/whitelist')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if(!isset($this->request->post['ip_address']) || empty($this->request->post['ip_address'])){
		        $json['error'] = $this->language->get('error_empty_ip');
		}
		
		if (!filter_var($this->request->post['ip_address'], FILTER_VALIDATE_IP)) {
                        $json['error'] = $this->language->get('error_invalid_ip');
                }
                
                if (utf8_strlen($this->request->post['ip_address']) > 15){
                        $json['error'] = $this->language->get('error_ip');
                }
                
                        if (!isset($json['error'])){
			        $this->load->model('extension/module/whitelist');
			        $this->model_extension_module_whitelist->delIP($this->request->post['ip_address']);
			        $json['success'] = $this->language->get('text_success');
                        }

                $this->cache->delete('whitelist_addresses');
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
        
        public function truncate_table(){
                $this->load->language('extension/module/whitelist');
                
                $json = array();
                
                if (!$this->user->hasPermission('modify', 'extension/module/whitelist')) {
			$json['error'] = $this->language->get('error_permission');
		}
				
		if (!isset($json['error'])){
                        $this->load->model('extension/module/whitelist');
                                
                                if($this->model_extension_module_whitelist->ClearAllTable()){
                                        $json['success'] = $this->language->get('text_delete_success');
                                } else {
                                        $json['error'] = $this->language->get('error_try_again');
                                }
                        $this->cache->delete('whitelist_addresses');
                }
                $this->response->addHeader('Content-Type: application/json');
	        $this->response->setOutput(json_encode($json));
   
        }

        
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/whitelist')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if(isset($this->request->post['module_whitelist_status']) && !in_array($this->request->post['module_whitelist_status'], array("0","1"), true)) {
                        $this->error['warning'] = $this->language->get('error_hacking_attempt');
                }

                if(isset($this->request->post['module_whitelist_cache_status']) && !in_array($this->request->post['module_whitelist_cache_status'], array("0","1"), true)) {
                        $this->error['warning'] = $this->language->get('error_hacking_attempt');
                }
		
		if(isset($this->request->post['module_whitelist_cache_type']) && !in_array($this->request->post['module_whitelist_cache_type'], array("file","mem","apc"), true)) {
                        $this->error['warning'] = $this->language->get('error_cache_types');
                }
                
                if(isset($this->request->post['module_whitelist_cache_expire']) && ($this->request->post['module_whitelist_cache_expire'] < 3600)){
		        $this->error['warning'] = $this->language->get('error_expire');
                }                
		
		if(isset($this->request->post['module_whitelist_response']) &&  !in_array($this->request->post['module_whitelist_response'], array("random","301","302","303","307"), true)) {
                        $this->error['warning'] = $this->language->get('error_hacking_attempt');
                }
                
		return !$this->error;
	}
	
}
