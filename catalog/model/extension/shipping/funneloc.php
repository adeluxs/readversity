<?php
class ModelExtensionShippingFunneloc extends Model {
	function getQuote($address) {
        $this->load->language('extension/shipping/funneloc');
        $this->load->model('setting/setting'); 


        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('shipping_funneloc_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
 
        if (!$this->config->get('shipping_funneloc_geo_zone_id')) {
          $status = true;
        } elseif ($query->num_rows) {
          $status = true;
        } else {
          $status = false;
        }
     
        $method_data = array();
     
        if ($status) {
            //Process
            $weight = $totalWeight= $this->cart->getWeight();

            $products = $this->cart->getProducts();
            $all_weights = [];
            $count = 0;
            $orderItems = [];
            foreach($products as $product) {
                    $price = $product['price'];
                    $orderItems[] = array(
                                    'title' => $product['name'],
                                    'quantity' => $product['quantity'],
                                    'price' => $product['price'],
                                    'weight' => $this->weight->convert($product['weight'] / $product['quantity'], $product['weight_class_id'], 1)
                                    );
                $all_weights[] = ['weight' => $this->weight->convert($product['weight'] / $product['quantity'], $product['weight_class_id'], 1), 
                                   'quantity' => $product['quantity']
                                    ];
                $count++;
            }
//print_r($all_weights);

            $cartInfo['items'] = $orderItems;
            $cartInfo['count'] = $count;
            $cartInfo['totalWeight'] = $totalWeight;
            //Session data to be used by checkout order data
            $this->session->data['shipping_funnel_oc_cart_items'] = $cartInfo;
            
			$address_from = array(
				'country'      => "NGN",
				'contact_name' => $this->config->get('config_owner'),
				'phone'        => $this->config->get('config_telephone'),
				'email'        => $this->config->get('config_email'),
				'company_name' => $this->config->get('config_name')
            );
            ?>
            <!-- <?php //print_r($this->session); ?> -->
            <?php
            if(!$address) {
                $address = $this->session->data['shipping_address'];
            }       
            if($address && ($this->session->data['currency'] == 'NGN')) {

            if(!$address['zone']) {
                $address = $address['address_format'];
            }
    
			$address_to = array(
				'country'	   => 'NGN',
				'contact_name' => $address['firstname'] . ' ' . $address['lastname'],
				'company_name' => $address['company'],
				'code'         => ''
			);

            if($address['zone'] == 'Abuja Federal Capital Territory') {
                $address['zone'] = 'Abuja';
            }
            //print_r($address);
            $url = 'http://shipping.nipost.gov.ng';
            $curl = curl_init();       
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url . "/api/v1/shipping/calculate?weight=".$weight."&shipTo=".urlencode($address['zone'])."&areaTo=".urlencode($address['city'])."&items=".serialize($all_weights),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Auth-Token: ".$this->config->get('shipping_funneloc_api_key').""
                ),
            ));
        
            $response = curl_exec($curl);
            $err = curl_error($curl);
          ///  print_r($response);
            curl_close($curl);
        
                if ($err) {
            
                    return "cURL Error #: " . $err;
            
                } else {    

                    $data = json_decode($response, true);
                        $this->session->data['shipping_funnel_request_session_id'] = $data['requestSessionId'];

                        if(!$data['data']) {
                            return 'We do not offer delivery services your destination yet';
                        } else {
                            $quote_data = array();    
                            $count;
                            foreach($data['data'] as $key => $shipper) {

                                foreach($shipper['ShippingClasses'] as $_key => $shippingClass) {
                                    $id = $shipper['Shipper']['id'];
                                    $s_id = $shippingClass['Id'];

                                    $quote_data[$id.'_'.$s_id] = array(
                                        'code'     => 'funneloc.'.$id.'_'.$s_id,
                                        'title'    => $shipper['Shipper']['name'].' ('.$shippingClass['Name'].')',
                                        'cost'     => $shippingClass['customerPrice'], //$this->config->get('custom_cost'),
                                        'tax_class_id' => 0,
                                        'text'     => $this->currency->format($shippingClass['customerPrice'], "NGN"),
                                        );        
                                        
                                        $count++;
                                }

                            }                
                            $method_data = array(
                                'code'     => 'funneloc',
                                'title'    => 'Nipost Shipping Methods',
                                'quote'    => $quote_data,
                                'sort_order' => $this->config->get('shipping_funneloc_sort_order'),
                                'error'    => false
                            );                
                        }
                }
            }
        }
     
        return $method_data;
      }

	// public function on_checkout($order_id) {
	// 	$this->load->model('checkout/order');
	// 	mail('yomiomotoso@gmail.com', "A store has been deleted", "The store was deleted.");
	// }
    
}
