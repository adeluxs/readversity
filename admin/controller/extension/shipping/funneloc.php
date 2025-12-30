<?php
class ControllerExtensionShippingFunneloc extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/shipping/funneloc');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');


		// $data['shipping_funneloc_geo_zone_id'] = 'funneloc_geo_zone';
		// $data['shipping_funneloc_ship_from'] = 'Lagos';
		// $data['shipping_funneloc_ship_area_from'] = 'Ikeja';
		// $data['shipping_funneloc_api_url'] = 'http://test.funnel.ng';

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('shipping_funneloc', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
		}


		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['api_key'])) {
			$data['error_api_key'] = $this->error['api_key'];
		} else {
			$data['error_api_key'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/shipping/funneloc', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/shipping/funneloc', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);

		if (isset($this->request->post['shipping_funneloc_api_key'])) {
			$data['shipping_funneloc_api_key'] = $this->request->post['shipping_funneloc_api_key'];
		} else {
			$data['shipping_funneloc_api_key'] = $this->config->get('shipping_funneloc_api_key');
		}

		if (isset($this->request->post['shipping_funneloc_status'])) {
			$data['shipping_funneloc_status'] = $this->request->post['shipping_funneloc_status'];
		} else {
			$data['shipping_funneloc_status'] = $this->config->get('shipping_funneloc_status');
		}
		if (isset($this->request->post['shipping_funneloc_sort_order'])) {
			$data['shipping_funneloc_sort_order'] = $this->request->post['shipping_funneloc_sort_order'];
		} else {
			$data['shipping_funneloc_sort_order'] = $this->config->get('shipping_funneloc_sort_order');
		}


		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/shipping/funneloc', $data));
	}

	protected function validate() {

		if (!$this->user->hasPermission('modify', 'extension/shipping/funneloc')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['shipping_funneloc_api_key']) {
			$this->error['api_key'] = $this->language->get('error_api_key');
		}

		$validate_err = $this->checkAPIValidateErr($this->request->post['shipping_funneloc_api_key']);
		if ($validate_err) {
			$this->error['api_key'] = $validate_err;
		}

		if (!$this->request->post['shipping_funneloc_status']) {
			$this->error['status'] = $this->language->get('error_status');
		}

		///API Validation here



		return !$this->error;
	}

	/**
	 * Validate the Funnel.ng API Key
	 * @return string
	 * @args $api_key
	 */
	protected function checkAPIValidateErr($api_key) {

		$url = 'http://shipping.nipost.gov.ng';
        $curl = curl_init();        
                
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . "/api/v1/shipping/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Auth-Token: ".$api_key.""
            ),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);
    
        curl_close($curl);
		
        if ($err) {
			$error = "cURL Error #: " . $err; 
        } else {
            $response = json_decode($response);
//            update_option('fst_default_shop_state', $response->defaultShop->state);
//            update_option('fst_default_shop_area', $response->defaultShop->area);

            if($response->status !== 'success') {
                $error = $response->message;                
            } 
        }

		if(isset($error)) {
			return $error;		
		}
	}

	//Register events	
	public function install() {
		$this->load->model('setting/event');
		$test = $this->model_setting_event->addEvent('funneloc_process_checkout', 'catalog/model/checkout/order/addOrderHistory/after', 'extension/shipping/funneloc/on_checkout');
	}

	public function uninstall() {
		$this->load->model('setting/event');
		$this->model_setting_event->deleteEventByCode('funneloc_process_checkout');
	}
}
