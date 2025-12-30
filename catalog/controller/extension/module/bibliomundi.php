<?php
class ControllerExtensionModuleBibliomundi extends Controller {

    private $loadSettings;
    private $clientID;
    private $clientSecret;
    private $environment;
    private $environmentAlias = array(1 => 'sandbox', 2 => 'production');

    private function loadFiles() {
        require_once DIR_SYSTEM . 'bibliomundi/classes/MYProduct.php';
        require_once DIR_SYSTEM . 'bibliomundi/lib/api-client-side/autoload.php';
        require_once DIR_SYSTEM . 'bibliomundi/lib/bbm-onix-parser/autoload.php';
    }

    private function loadModel() {
        $this->load->model('setting/setting');
        $this->load->model('account/order');
        $this->load->model('account/customer');
        $this->load->model('account/address');
    }

    //Checkout here
	public function paymentConfirmation() {

        $this->loadFiles();
        $this->loadModel();

		$order_id  = $this->request->get['order_id'];
        $order     = $this->model_account_order->getOrder($order_id);
        $products  = $this->model_account_order->getOrderProducts($order_id);
        $myProduct = new MYProduct($this->db);

        $this->loadSettings = $this->model_setting_setting->getSetting('BBM');
        $this->clientID     = $this->loadSettings['BBM_OPTION_CLIENT_ID'];
        $this->clientSecret = $this->loadSettings['BBM_OPTION_CLIENT_SECRET'];
        $this->environment  = $this->loadSettings['BBM_OPTION_ENVIRONMENT'];
        $bbmEbooks          = array();

        foreach ($products as $product) {
        	if($idBBM = $myProduct->getIDBBMByID($product['product_id'])) {
        		$bbmEbooks[$idBBM] = $product;
            }
        }
        $customer = $this->model_account_customer->getCustomer($order['customer_id']);
        if(count($bbmEbooks) && in_array($this->request->post['order_status_id'], $this->config->get('config_complete_status'))) {
        	try {
        		$purchase = new \BBM\Purchase($this->clientID, $this->clientSecret);
        		$purchase->environment = $this->environmentAlias[$this->environment];
                //$purchase->verbose(true);
        		$address = $this->model_account_address->getAddress($customer['address_id']);
                $gender = array(1 => 'm', 2 => 'f');
                preg_match_all('!\d+!', $address['postcode'], $zipCode);
        		$bbmCustomer = array(
				    'customerIdentificationNumber'  => (int) $customer['customer_id'], // INT, YOUR STORE CUSTOMER ID
				    'customerFullname' 				=> $customer['firstname'] . ' ' . $customer['lastname'], // STRING, CUSTOMER FULL NAME
				    'customerEmail' 				=> $customer['email'], // STRING, CUSTOMER EMAIL
                    'customerGender'                => $gender[1], // ENUM, CUSTOMER GENDER, USE m OR f (LOWERCASE!! male or female)
                    'customerBirthday'              => date('Y/m/d'), // STRING, CUSTOMER BIRTH DATE, USE Y/m/d (XXXX/XX/XX)
				    'customerCountry' 				=> $address['iso_code_2'], // STRING, 2 CHAR STRING THAT INDICATE THE CUSTOMER COUNTRY (BR, US, ES, etc)
				    'customerZipcode' 				=> implode('', $zipCode[0]), // STRING, POSTAL CODE, ONLY NUMBERS
				    'customerState'				 	=> $address['iso_code_2'] // STRING, 2 CHAR STRING THAT INDICATE THE CUSTOMER STATE (RJ, SP, NY, etc)
				);

                $purchase->setCustomer($bbmCustomer);
                foreach ($bbmEbooks as $key => $ebook) {
                    $purchase->addItem($key, round($ebook['price'], 2), $myProduct->getIsoCodeByIDBBM($key));//Bibliomundi ID and Price
                }
                $purchase->validate();
                $purchase->checkout($order_id, time());
        	} catch (Exception $e) {
        		//Error at this moment is really serious.
        	}
        }
	}

    //Validate
    public function displayBeforePayment() {

        $this->loadFiles();
        $this->loadModel();
        $myProduct = new MYProduct($this->db);

        $this->loadSettings = $this->model_setting_setting->getSetting('BBM');
        $this->clientID     = $this->loadSettings['BBM_OPTION_CLIENT_ID'];
        $this->clientSecret = $this->loadSettings['BBM_OPTION_CLIENT_SECRET'];
        $this->environment  = $this->loadSettings['BBM_OPTION_ENVIRONMENT'];

        $customer_id    = $this->customer->isLogged();
        $bbmEbooks      = array();

        foreach($this->cart->getProducts() as $product) {
            if($idBBM = $myProduct->getIDBBMByID($product['product_id'])) {
                $bbmEbooks[$idBBM] = $product;
            }
        }
        $customer = $this->model_account_customer->getCustomer($customer_id);

        if(count($bbmEbooks)) {
            try {
                $purchase = new \BBM\Purchase($this->clientID, $this->clientSecret);
                $purchase->environment = $this->environmentAlias[$this->environment];
                //$purchase->verbose(true);
                $address = $this->model_account_address->getAddress($customer['address_id']);
                $gender = array(1 => 'm', 2 => 'f');
                preg_match_all('!\d+!', $address['postcode'], $zipCode);
                $bbmCustomer = array(
                    'customerIdentificationNumber'  => (int) $customer['customer_id'], // INT, YOUR STORE CUSTOMER ID
                    'customerFullname'              => $customer['firstname'] . ' ' . $customer['lastname'], // STRING, CUSTOMER FULL NAME
                    'customerEmail'                 => $customer['email'], // STRING, CUSTOMER EMAIL
                    'customerGender'                => $gender[1], // ENUM, CUSTOMER GENDER, USE m OR f (LOWERCASE!! male or female)
                    'customerBirthday'              => date('Y/m/d'), // STRING, CUSTOMER BIRTH DATE, USE Y/m/d (XXXX/XX/XX)
                    'customerCountry'               => $address['iso_code_2'], // STRING, 2 CHAR STRING THAT INDICATE THE CUSTOMER COUNTRY (BR, US, ES, etc)
                    'customerZipcode'               => implode('', $zipCode[0]), // STRING, POSTAL CODE, ONLY NUMBERS
                    'customerState'                 => $address['iso_code_2'] // STRING, 2 CHAR STRING THAT INDICATE THE CUSTOMER STATE (RJ, SP, NY, etc)
                );

                $purchase->setCustomer($bbmCustomer);
                foreach ($bbmEbooks as $key => $ebook) {
                    $purchase->addItem($key, round($ebook['price'], 2), $myProduct->getIsoCodeByIDBBM($key));//Bibliomundi ID and Price
                }
                $purchase->validate();
            } catch (Exception $e) {
                //Regardless of the error, all ebooks are curretly removed from the basket as the API is not informing what error is the cause.
                foreach ($bbmEbooks as $ebook) {
                    $errors[] = $ebook['name'];
                    //Remove from Shopping Cart
                    $this->db->query("DELETE FROM `" . DB_PREFIX . "cart` WHERE cart_id = '" . (int)$ebook['cart_id'] . "'");
                }
                return 'Ocorreu um problema interno com o(s) seguinte(s) ebooks: ' . implode(',', $errors) . '. Removemos do carrinho pra você. Desculpe-nos pelo transtorno!';
            }
        }
    }

    public function downloadBBMFile() {

        $this->loadFiles();
        $this->loadModel();
        $this->loadSettings = $this->model_setting_setting->getSetting('BBM');
        $this->clientID     = $this->loadSettings['BBM_OPTION_CLIENT_ID'];
        $this->clientSecret = $this->loadSettings['BBM_OPTION_CLIENT_SECRET'];
        $this->environment  = $this->loadSettings['BBM_OPTION_ENVIRONMENT'];

        $myProduct = new MYProduct($this->db);
        $downloadID = $this->request->get['download_id'];
        $orderID = $this->request->get['order_id'];
        $products = $this->model_account_order->getOrderProducts($orderID);

        foreach ($products as $product) {
            $result = $this->db->query("SELECT `download_id` FROM `" . DB_PREFIX . "product_to_download` WHERE `product_id` = '" . (int)$product['product_id'] . "'");
            foreach ($result->rows as $row) {
                if(!empty($row['download_id']) && $row['download_id'] == $downloadID) {
                    $productID = $product['product_id'];
                    break;
                }
            }            
        }
        if(!empty($productID) && $orderID && $id_bbm_product = $myProduct->getIDBBMByID($productID)) {
            //actionDownloadBBMFile
            $download = new \BBM\Download($this->clientID, $this->clientSecret);
            $download->environment = $this->environmentAlias[$this->environment];
            //$download->verbose(true);
            $data = array(
                'ebook_id' => (int) $id_bbm_product,
                'transaction_time' => time(),
                'transaction_key' => $orderID 
            );
            try {
                $download->validate($data);              
                $download->download();
                $this->response->redirect($this->url->link('account/download', '', true));
            } catch(Exception $e) {
                $exception = new BBM\Server\Exception($e->getMessage(), $e->getCode());
                exit('Error : ' . $exception->getMessage());
            }            
        }
    }
}