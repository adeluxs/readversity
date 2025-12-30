<?php
class ControllerExtensionShippingFunneloc extends Controller {
	
	public function on_checkout($route, $data) {
        $this->load->model('checkout/order');
        $url = 'http://shipping.nipost.gov.ng';

        $order = $this->model_checkout_order->getOrder($data[0]);

        $shipping_data = explode('_', explode('.', $order['shipping_code'])[1]); //From e.g. funnel.22_1
        $data['shippingClass'] = $shipping_data[1];
        $data['shippingPartner'] = $shipping_data[0];
        $data['customerEmail'] = $order['email'];
        $data['customerName'] = $order['firstname'].' '.$order['lastname'];
        $data['description'] = '';
        $data['customerAddress'] = $order['payment_address_1'] . ', '. $order['payment_city'] . ', '. $order['payment_zone'] ;
        $data['customerPhone'] = $order['telephone'];
        $data['itemsList'] = serialize($this->session->data['shipping_funnel_oc_cart_items']);
        $data['sessionId'] = $this->session->data['shipping_funnel_request_session_id'];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . "/api/v1/shipping/submit",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "sessionId=".$data['sessionId']."&shippingClass=".$data["shippingClass"]."&shippingParther=".$data['shippingPartner']."&customerEmail=".$data["customerEmail"]."&customerName=".$data["customerName"]."&description=".$data["description"]."&customerAddress=".$data["customerAddress"]."&customerPhone=".$data["customerPhone"]."&itemList=".$data['itemsList'],
            CURLOPT_HTTPHEADER => array(
                "Auth-Token: ".$this->config->get('shipping_funneloc_api_key')."",
                "Cache-Control: no-cache",
                "Content-Type: application/x-www-form-urlencoded",
                "Postman-Token: 168af565-cb4e-4351-958e-51e71a2b9919"
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
    
        if ($err) {
  //            echo "cURL Error #:" . $err;
        } else {        
//             print_r($response);            
        }

       // die();
	}

}