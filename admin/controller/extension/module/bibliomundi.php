<?php
class Controllerextensionmodulebibliomundi extends Controller {
    
    private $error = array();
    private $loadSettings;
    private $logfile;
    public $clientID;
    public $clientSecret;
    public $operation;
    public $environment;
    public $operationAlias = array(1 => 'complete', 2 => 'updates');
    public $environmentAlias = array(1 => 'sandbox', 2 => 'production');
    /*
     * The features will be the personalised fields of our modules. Do not attempt workarounds, please!
     */
    
    public $featureIDISBN;
    public $featureIDPublisherName;
    public $featureIDFormatType;
    public $featureIDEditionNumber;
    public $featureIDIdiom;
    public $featureIDPagesNumber;
    public $featureIDProtectionType;
    public $featureIDAgeRating;
    public $featureIDCollectionTitle;
    public $featureIDAutor;//Authors are also inserted as features
    public $featureIDIlustrador;//Authors are also inserted as features
    public $product_iso_code;

   /*
    *
    * The Author will be inserted as Feature by default, but we will still allow
    * The user to choose between inserting authors as Categories or Tags
    *
    */
    public $categoryIDAutor;//Category ID in which Author will be Parent of other inserted Authors

    private $attributes = array (
            'ISBN'             => 'ISBN',
            'PUBLISHER_NAME'   => 'Editora',
            'FORMAT_TYPE'      => 'Formato',
            'EDITION_NUMBER'   => 'Edição',
            'PROTECTION_TYPE'  => 'Proteção',
            'IDIOM'            => 'Idioma',
            'PAGES_NUMBER'     => 'Número de Páginas',
            'AGE_RATING'       => 'Faixa Etária',
            'COLLECTION_TITLE' => 'Coleção',
            'AUTOR'            => 'Autor',
            'ILUSTRADOR'       => 'Ilustrador'
        );

    private function setup() {
        $this->load->language('extension/module/bibliomundi');
        $this->load->model('setting/setting');
        $this->load->model('catalog/attribute_group');
        $this->load->model('catalog/attribute');
        $this->load->model('catalog/product');
        $this->load->model('catalog/category');
        $this->load->model('catalog/download');
    }

    public function install() {
        $this->setup();
        $this->addAttributes();
        //Adds Fields to identify which Product is Bibliomundi´s
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "category` ADD `bbm_id_category` VARCHAR(10) NULL, ADD `is_bbm` TINYINT(1) NULL");
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD `bbm_id_product` VARCHAR(10) NULL, ADD `iso_code` VARCHAR(3), ADD `is_bbm` TINYINT(1) NULL");
    }

    public function uninstall() {
        $this->setup();
        //Delete records of Bibliomundi
        $result = $this->db->query("SELECT `category_id` FROM `" . DB_PREFIX . "category` WHERE`is_bbm` IS NOT NULL");
        if($result->num_rows) {
            foreach ($result->rows as $key => $value) {
                $this->model_catalog_category->deleteCategory($value['category_id']);
            }
        }

        $result = $this->db->query("SELECT `product_id` FROM `" . DB_PREFIX . "product` WHERE`is_bbm` IS NOT NULL");
        if($result->num_rows) {
            foreach ($result->rows as $key => $value) {
                $this->model_catalog_product->deleteProduct($value['product_id']);
            }
        }
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "category` DROP COLUMN `bbm_id_category`, DROP COLUMN `is_bbm`");
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "product` DROP COLUMN `bbm_id_product`, DROP COLUMN `iso_code`, DROP COLUMN `is_bbm`");
        //Delete settings of Bibliomundi
        $this->loadSettings = $this->model_setting_setting->getSetting('BBM');
        $attribute_group_id = '';
        foreach ($this->attributes as $key => $value) {
            if (!empty($this->loadSettings['BBM_FEATURE_ID_' . $key])) {
                $attribute_group_id = $this->model_catalog_attribute->getAttribute($this->loadSettings['BBM_FEATURE_ID_' . $key]);
                $attribute_group_id = $attribute_group_id['attribute_group_id'];
                $this->model_catalog_attribute->deleteAttribute($this->loadSettings['BBM_FEATURE_ID_' . $key]);
            }            
        }
        if ($attribute_group_id) {
            $this->model_catalog_attribute_group->deleteAttributeGroup($attribute_group_id);
        }
        $this->model_setting_setting->deleteSetting('BBM');
    }

    //Categories are created dynamically, as it would be unviable to insert them previously in the database (Differently
    //from the Features), since they are innumerous. After creating them, they will be added to the Configuration Table
    //In case na ebook belongs to it, the ID is simply associated to it
    private function insertAutorBy($insertType) {
        if($insertType == 1)//If Tag, process is Ignored
            return true;
        else if($insertType == 2) {//Category
            //Create Author Category, takes and ID and adds to Configuration Table
            $categoryID = $this->model_catalog_category->addCategory(
                array(
                    'parent_id' => 0,
                    'column' => 0,
                    'sort_order' => 1,
                    'status' => 1,
                    'category_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'name' => 'Autor',
                            'description' => '',
                            'meta_title' => 'Autor',
                            'meta_description' => '',
                            'meta_keyword' => ''
                        )
                    ),
                    'keyword' => 'Autor',
                    'category_store' => array($this->config->get('config_store_id'))
                )
            );

            $myCategory = new MYCategory($this->db);
            $myCategory->updateBBMField($categoryID, array('bbm_id_category' => NULL, 'is_bbm' => true));
            $this->createOrUpdateSettingValue('BBM', 'BBM_CATEGORY_ID_AUTOR', $categoryID);
            return true;
        } else {//3 = No Definition
            // Ignored. Since they will not be inserted as Category or Tag, Authors 
            // will remais as Feature.
            return true;
        }
    }

    private function addAttributes() {
        $attribute_group_id = $this->model_catalog_attribute_group->addAttributeGroup(
                                    array(
                                        'sort_order'                    => 100,
                                        'attribute_group_description'   => array((int)$this->config->get('config_language_id') => array('name' => 'Bibliomundi'))
                                    )
                                );
        $sort_order = 1000;
        foreach ($this->attributes as $key => $value) {
            $attribute_id = $this->model_catalog_attribute->addAttribute(
                                array(
                                    'attribute_group_id' => $attribute_group_id,
                                    'sort_order' => $sort_order++,
                                    'attribute_description' => array((int)$this->config->get('config_language_id') => array('name' => $value))
                                )
                            );
            $this->createOrUpdateSettingValue('BBM', 'BBM_FEATURE_ID_' . $key, $attribute_id);
        }
        //Sets Default Values for these options
        $this->createOrUpdateSettingValue('BBM', 'BBM_OPTION_CLIENT_ID', null);
        $this->createOrUpdateSettingValue('BBM', 'BBM_OPTION_CLIENT_SECRET', null);
        $this->createOrUpdateSettingValue('BBM', 'BBM_OPTION_OPERATION', 1);
        $this->createOrUpdateSettingValue('BBM', 'BBM_OPTION_ENVIRONMENT', 1);
    }

    public function index() {
        $this->setup();
        $this->document->setTitle($this->language->get('heading_title'));
        $data = $this->setupIndexTexts();
        $this->loadSettings = $this->model_setting_setting->getSetting('BBM');
        $this->logfile = DIR_SYSTEM . 'bibliomundi/log/import.lock';

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            // save settings
            $this->createOrUpdateSetting('BBM', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->loadFiles();
            $this->loadSettings = $this->model_setting_setting->getSetting('BBM');
            $this->getConfig();
            if (empty($this->request->post['bbm_view'])) {
                if(!$this->insertAutorBy($this->request->post['BBM_AUTOR_INSERT_TYPE'])) {
                    $this->response->setOutput($this->language->get('text_error_internal'));
                }
                $this->response->redirect($this->url->link('extension/module/bibliomundi', 'token=' . $this->session->data['token'] , true));
            } else {
                //Insert books                
                try {
                    $result = array('status' => 'free');
                    if (file_exists($this->logfile)) {
                        $result = json_decode(file_get_contents($this->logfile));
                        if(!empty($result)) {
                            if ($result->status == 'in progress') {
                                if (time() - filemtime($this->logfile) > 5) {
                                    unlink($this->logfile);
                                    // restart
                                } else {
                                    header('Content-Type: application/json; charset=utf-8');
                                    echo json_encode(array(
                                        'status' => 'in progress',
                                        'output' => 'Successfully'
                                    ));
                                    exit;
                                }
                            }
                        }
                    }                         
                    $this->proccess();
                    $this->response->setOutput($this->language->get('text_import_success'));
                } catch(Exception $e) {
                    $this->response->setOutput($e->getMessage());
                }                                
            }
        }
        $data['autor_insert_type']  = isset($this->loadSettings['BBM_AUTOR_INSERT_TYPE']) ? $this->loadSettings['BBM_AUTOR_INSERT_TYPE'] : '';
        $data['client_id']          = isset($this->loadSettings['BBM_OPTION_CLIENT_ID']) ? $this->loadSettings['BBM_OPTION_CLIENT_ID'] : '';
        $data['client_secret']      = isset($this->loadSettings['BBM_OPTION_CLIENT_SECRET']) ? $this->loadSettings['BBM_OPTION_CLIENT_SECRET'] : '';
        $data['operation']          = isset($this->loadSettings['BBM_OPTION_OPERATION']) ? $this->loadSettings['BBM_OPTION_OPERATION'] : 1;
        $data['environment']        = isset($this->loadSettings['BBM_OPTION_ENVIRONMENT']) ? $this->loadSettings['BBM_OPTION_ENVIRONMENT'] : 1;

        $data['error_warning']      = isset($this->error['error_warning']) ? $this->error['error_warning'] : '';
        $data['error_client_id']    = isset($this->error['client_id']) ? $this->error['client_id'] : '';
        $data['error_client_secret']= isset($this->error['client_secret']) ? $this->error['client_secret'] : '';

        $data['action'] = $this->url->link('extension/module/bibliomundi', 'token=' . $this->session->data['token'], true);
        $data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);
        if (empty($data['autor_insert_type'])) {
            $this->response->setOutput($this->load->view('extension/module/bibliomundi_autor.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('extension/module/bibliomundi.tpl', $data));    
        }
    }

    private function setupIndexTexts() {
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL'),
            'separator' => false
        );
        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_module'),
            'href'      => $this->url->link('extension/extension', 'token=' . $this->session->data['token'], 'SSL'),
            'separator' => ' :: '
        );
        $data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'),
            'href'      => $this->url->link('extension/module/bibliomundi', 'token=' . $this->session->data['token'], 'SSL'),
            'separator' => ' :: '
        );

        $data['heading_title']              = $this->language->get('heading_title');
        $data['button_save']                = $this->language->get('button_save');
        $data['button_cancel']              = $this->language->get('button_cancel');
        
        $data['text_global_setting']        = $this->language->get('text_global_setting');
        $data['text_setting_autor']         = $this->language->get('text_setting_autor');
        $data['text_autor_save']            = $this->language->get('text_autor_save');
        $data['text_autor_save_tag']        = $this->language->get('text_autor_save_tag');
        $data['text_autor_save_category']   = $this->language->get('text_autor_save_category');
        $data['text_autor_save_none']       = $this->language->get('text_autor_save_none');
        $data['text_autor_save_info']       = $this->language->get('text_autor_save_info'); 

        $data['text_import_notice']         = $this->language->get('text_import_notice'); 
        $data['text_client_id']             = $this->language->get('text_client_id'); 
        $data['text_client_secret']         = $this->language->get('text_client_secret'); 
        $data['text_operation']             = $this->language->get('text_operation'); 
        $data['text_operation_complete']    = $this->language->get('text_operation_complete'); 
        $data['text_operation_update']      = $this->language->get('text_operation_update');               
        $data['text_operation_info']        = $this->language->get('text_operation_info'); 
        $data['text_environment']           = $this->language->get('text_environment'); 
        $data['text_environment_sandbox']   = $this->language->get('text_environment_sandbox');
        $data['text_environment_production']= $this->language->get('text_environment_production');

        $data['header']      = $this->load->controller('common/header');
        $data['footer']      = $this->load->controller('common/footer');
        $data['column_left'] = $this->load->controller('common/column_left');

        return $data;
    }

    private function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/bibliomundi')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        // form error checking
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if (!empty($this->request->post['bbm_view'])) {
                if (empty($this->request->post['BBM_OPTION_CLIENT_ID']))
                    $this->error['client_id'] = $this->language->get('text_error_client_id');
                if (empty($this->request->post['BBM_OPTION_CLIENT_SECRET']))
                    $this->error['client_secret'] = $this->language->get('text_error_client_secret');
            }                            
        }
        return !$this->error;
    }

    private function createOrUpdateSettingValue($code = '', $key = '', $value = '', $store_id = 0) {
        if (substr($key, 0, strlen($code)) == $code) {
            $exist = $this->db->query("SELECT 1 FROM `" . DB_PREFIX . "setting` WHERE `code` = '".$this->db->escape($code)."' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'")->num_rows;
            if (!is_array($value)) {
                if($exist) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '" . $this->db->escape($value) . "', serialized = '0' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'");
                } else {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "', serialized = '0'");
                }
            } else {
                if($exist) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '" . $this->db->escape(json_encode($value, true)) . "', serialized = '1' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'");
                } else {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value, true)) . "', serialized = '1'");
                }
            }
        }
    }

    private function createOrUpdateSetting($code, $data, $store_id = 0) {
        foreach ($data as $key => $value) {            
            if (substr($key, 0, strlen($code)) == $code) {
                $exist = $this->db->query("SELECT 1 FROM `" . DB_PREFIX . "setting` WHERE `code` = '".$this->db->escape($code)."' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'")->num_rows;
                if (!is_array($value)) {
                    if($exist) {
                        $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '" . $this->db->escape($value) . "', serialized = '0' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'");
                    } else {
                        $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "', serialized = '0'");
                    }
                } else {
                    if($exist) {
                        $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = '" . $this->db->escape(json_encode($value, true)) . "', serialized = '1' WHERE `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "' AND store_id = '" . (int)$store_id . "'");
                    } else {
                        $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET store_id = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value, true)) . "', serialized = '1'");
                    }
                }
            }
        }
    }

    private function loadFiles() {
        require_once DIR_SYSTEM . 'bibliomundi/classes/MYProduct.php';
        require_once DIR_SYSTEM . 'bibliomundi/classes/MYCategory.php';
        require_once DIR_SYSTEM . 'bibliomundi/lib/api-client-side/autoload.php';
        require_once DIR_SYSTEM . 'bibliomundi/lib/bbm-onix-parser/autoload.php';
    }

    private function getConfig() {
        /* Complete verification even if, sometimes, the return might be NULL */
        $this->clientID                 = $this->loadSettings['BBM_OPTION_CLIENT_ID'];
        $this->clientSecret             = $this->loadSettings['BBM_OPTION_CLIENT_SECRET'];
        $this->operation                = $this->loadSettings['BBM_OPTION_OPERATION'];
        $this->environment              = $this->loadSettings['BBM_OPTION_ENVIRONMENT'];
        $this->featureIDISBN            = $this->loadSettings['BBM_FEATURE_ID_ISBN'];
        $this->featureIDPublisherName   = $this->loadSettings['BBM_FEATURE_ID_PUBLISHER_NAME'];
        $this->featureIDFormatType      = $this->loadSettings['BBM_FEATURE_ID_FORMAT_TYPE'];
        $this->featureIDEditionNumber   = $this->loadSettings['BBM_FEATURE_ID_EDITION_NUMBER'];
        $this->featureIDIdiom           = $this->loadSettings['BBM_FEATURE_ID_IDIOM'];
        $this->featureIDPagesNumber     = $this->loadSettings['BBM_FEATURE_ID_PAGES_NUMBER'];
        $this->featureIDProtectionType  = $this->loadSettings['BBM_FEATURE_ID_PROTECTION_TYPE'];
        $this->featureIDAgeRating       = $this->loadSettings['BBM_FEATURE_ID_AGE_RATING'];
        $this->featureIDCollectionTitle = $this->loadSettings['BBM_FEATURE_ID_COLLECTION_TITLE'];
        $this->featureIDAutor           = $this->loadSettings['BBM_FEATURE_ID_AUTOR'];
        $this->featureIDIlustrador      = $this->loadSettings['BBM_FEATURE_ID_ILUSTRADOR'];
        
        if($this->loadSettings['BBM_AUTOR_INSERT_TYPE'] == 2) {
            $aux = $this->loadSettings['BBM_CATEGORY_ID_AUTOR'];
            if(!$this->model_catalog_category->getCategory($aux)) {
                //In case the user has deleted the Author Category
                $categoryID = $this->model_catalog_category->addCategory(
                    array(
                        'parent_id' => 0,
                        'column' => 0,
                        'sort_order' => 1,
                        'status' => 1,
                        'category_description' => array(
                            (int)$this->config->get('config_language_id') => array(
                                'name' => 'Autor',
                                'description' => '',
                                'meta_title' => 'Autor',
                                'meta_description' => '',
                                'meta_keyword' => ''
                            )
                        ),
                        'keyword' => 'Autor',
                        'category_store' => array($this->config->get('config_store_id'))
                    )
                );
                $myCategory = new MYCategory($this->db);
                $myCategory->updateBBMField($categoryID, array('bbm_id_category' => NULL, 'is_bbm' => true));
                $this->createOrUpdateSetting('BBM', array('BBM_CATEGORY_ID_AUTOR' => $categoryID));
                $aux = $categoryID;
            }
            $this->categoryIDAutor = $aux;
        }
    }

    private function getCatalog() {
        $catalog = new BBM\Catalog($this->clientID, $this->clientSecret, $this->operationAlias[$this->operation]);
        $catalog->environment = $this->environmentAlias[$this->environment];
        try {
            $catalog->validate();
            return $catalog->get();
        } catch(Exception $e) {
            throw $e;
        }
    }

    private function writeLock($logfile, $data) {
        $lock = fopen($logfile, 'a');
        ftruncate($lock, 0);
        fwrite($lock, json_encode($data));
        fclose($lock);
    }

    //Core of Module!
    private function proccess() {
        $result = array(
            'status' => 'in progress'
        );

        $file = '';
        $this->writeLock($this->logfile, $result);
        try {
            set_time_limit(0);//Avoids timeout, considering there will be a number of operations
            $parser = new \BBMParser\OnixParser($this->getCatalog());
            if(!$productsAvailable = $parser->getOnix()->getProductsAvailable())
                throw new Exception($this->language->get('text_empty_book'));

            $result['total'] = count($productsAvailable);
            $result['current'] = 0;
            //Be it Complete or Update, it will all be here!    
            foreach($productsAvailable as $bbmProduct) {
                $result['current']++;
                $this->writeLock($this->logfile, $result);
                $this->product_iso_code = '';

                $myProduct = new MYProduct($this->db);
                //Verifies if it exists
                $idProductAlreadyInserted = $myProduct->getIDByIDBBM($bbmProduct->getId());
                //Avoids duplicated entries
                if($idProductAlreadyInserted && $bbmProduct->getOperationType() == '03')
                    continue;
                                     
                //In case the process of Updated includes the Deletion of a Product
                if($bbmProduct->getOperationType() == '05') {
                    if($idProductAlreadyInserted) {
                        $this->model_catalog_product->deleteProduct($idProductAlreadyInserted);
                        //Moves on to next ebook
                        continue;
                    }
                    else
                        continue;
                }    

                $data = array();
                $data['model']              = $bbmProduct->getTitle();
                $data['sku']                = '';
                $data['upc']                = '';
                $data['ean']                = '';
                $data['jan']                = '';
                $data['isbn']               = '';
                $data['mpn']                = '';
                $data['location']           = '';
                $data['quantity']           = 1;//can not increase quantity in cart
                $data['minimum']            = 1;
                $data['subtract']           = 0;//not decrease stock quantity when buy this product
                $data['stock_status_id']    = 7;//in stock
                $data['date_available']     = date('Y/m/d');
                $data['manufacturer_id']    = 0;
                $data['shipping']           = 0;//downloadable product
                $data['points']             = 0;
                $data['weight']             = 0;
                $data['weight_class_id']    = 1;
                $data['width']              = 0;
                $data['height']             = 0;
                $data['length']             = 0;
                $data['length_class_id']    = 1;
                $data['status']             = 1;//enable
                $data['tax_class_id']       = 0;
                $data['sort_order']         = 1;
                $data['keyword']            = $bbmProduct->getTitle();
                $data['product_store']      = array($this->config->get('config_store_id'));

                $bbmPrice = array();
                foreach ($bbmProduct->getPrices() as $price) {                  
                    $bbmPrice[$price->getCurrency()] = $price->getAmount();
                }
                if(in_array($this->session->data['currency'], array_keys($bbmPrice))){
                    $data['price'] = $bbmPrice[$this->session->data['currency']];
                    $this->product_iso_code = $this->session->data['currency'];
                }else{
                    $data['price'] = $bbmPrice['BRL'];
                    $this->product_iso_code = 'BRL';
                }

                $data['product_description']= array(
                    (int)$this->config->get('config_language_id') => array(
                        'name' => $bbmProduct->getTitle(),
                        'description' => $bbmProduct->getSubTitle() ? $bbmProduct->getSubTitle() . ". " . $bbmProduct->getSynopsis() : $bbmProduct->getSynopsis(),
                        'tag' => '',
                        'meta_title' => $bbmProduct->getTitle(),
                        'meta_description' => '',
                        'meta_keyword' => ''
                    )
                );
                $categoriesIds              = array();//Inserts firstly the categories and then associate them to the product
                $tags                       = $bbmProduct->getTags();//If there are no Tags, a empty array is returned

                //Assuntos(Categorias)
                if(count($bbmProduct->getCategories())) {
                    foreach ($bbmProduct->getCategories() as $bbmCategory) {
                        $myCategory = new MYCategory($this->db);
                        $bbm_id_category = $bbmCategory->getCode();
                        if($id = $myCategory->getIDByIDBBM($bbmCategory->getCode()))
                            $categoryID = $id;
                        else { 
                            //Insert a new Category
                            $categoryID = $this->model_catalog_category->addCategory(
                                array(
                                    'parent_id' => 0,//Associates a Default Category, which usually is Home
                                    'column' => 0,
                                    'sort_order' => 1,
                                    'status' => 1,
                                    'category_description' => array(
                                        (int)$this->config->get('config_language_id') => array(
                                            'name' => $bbmCategory->getCode(),
                                            'description' => '',
                                            'meta_title' => $bbmCategory->getCode(),
                                            'meta_description' => '',
                                            'meta_keyword' => ''
                                        )
                                    ),
                                    'keyword' => $bbmCategory->getCode(),
                                    'category_store' => array($this->config->get('config_store_id'))
                                )
                            );
                            $myCategory->updateBBMField($categoryID, array('bbm_id_category' => $bbmCategory->getCode(), 'is_bbm' => TRUE));
                        }
                        $categoriesIds[] = $categoryID;
                    }
                }

                //According to Premisses, the Author MAY NOT CHANGE, therefore we ignore them on Update routine
                if($bbmProduct->getOperationType() == '03') {
                    //create download
                    if($this->loadSettings['BBM_AUTOR_INSERT_TYPE'] != 3) {
                        //Contributors
                        if(count($bbmProduct->getContributors())) {
                            foreach ($bbmProduct->getContributors() as $contributor) {
                                if($contributor instanceof \BBMParser\Model\Author) {
                                    //Authors are inserted as Category, Tag, or simply leave them as a Feature
                                    if($this->loadSettings['BBM_AUTOR_INSERT_TYPE'] == 1)
                                        //Insert as Tag
                                        $tags[] = $contributor->getFullName();
                                    else if($this->loadSettings['BBM_AUTOR_INSERT_TYPE'] == 2) {
                                        //Insert as Category                                    
                                        $myCategory = new MYCategory($this->db);
                                        if($id = $myCategory->getIDByIDBBM($contributor->getId()))
                                            $categoryID = $id;
                                        else {
                                            //Inserts a new Category                                                                                
                                            $categoryID = $this->model_catalog_category->addCategory(
                                                array(
                                                    'parent_id' => $this->categoryIDAutor,//Associates the Default Category as Author
                                                    'column' => 0,
                                                    'sort_order' => 1,
                                                    'status' => 1,
                                                    'category_description' => array(
                                                        (int)$this->config->get('config_language_id') => array(
                                                            'name' => $contributor->getFullName(),
                                                            'description' => '',
                                                            'meta_title' => $bbmCategory->getCode(),
                                                            'meta_description' => '',
                                                            'meta_keyword' => ''
                                                        )
                                                    ),
                                                    'keyword' => $bbmCategory->getCode(),
                                                    'category_store' => array($this->config->get('config_store_id'))
                                                )
                                            );
                                            $myCategory->updateBBMField($categoryID, array('bbm_id_category' => $contributor->getId(), 'is_bbm' => TRUE));
                                        }
                                        $categoriesIds[] = $categoryID;
                                    }
                                }                                
                            }
                        }
                    }
                }                
                //Rules for addition and association of Custom Features
                //1- Creates a Feature and collects its ID
                //2- Creates a Value Feature by addFeaturesToDB function and collects ID
                //3- Associates Value Feature to Product and language through addFeaturesCustomToDB function
                $data['product_attribute'] = array();
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDISBN,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getISBN()
                        )
                    )
                );                
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDIdiom,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getIdiom()
                        )
                    )
                );
                if($bbmProduct->getCollectionTitle()){
                    $data['product_attribute'][] = array(
                        'attribute_id' => $this->featureIDCollectionTitle,
                        'product_attribute_description' => array(
                            (int)$this->config->get('config_language_id') => array(
                                'text' => $bbmProduct->getCollectionTitle()
                            )
                        )
                    );
                }                
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDAgeRating,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getAgeRatingValue()
                        )
                    )
                );
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDProtectionType,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getProtectionType()
                        )
                    )
                );
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDPagesNumber,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getPageNumbers()
                        )
                    )
                );
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDEditionNumber,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getEditionNumber()
                        )
                    )
                );
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDFormatType,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getFormatType()
                        )
                    )
                );
                $data['product_attribute'][] = array(
                    'attribute_id' => $this->featureIDPublisherName,
                    'product_attribute_description' => array(
                        (int)$this->config->get('config_language_id') => array(
                            'text' => $bbmProduct->getImprintName()
                        )
                    )
                );
                if($autorsName = implode(',', array_map(array('\BBMParser\Model\Contributor', 'getFullNameStatically'), $bbmProduct->getContributorsByType('Autor')))) {
                    $data['product_attribute'][] = array(
                        'attribute_id' => $this->featureIDAutor,
                        'product_attribute_description' => array(
                            (int)$this->config->get('config_language_id') => array(
                                'text' => $autorsName
                            )
                        )
                    );
                }
                if($ilustradorsName = implode(',', array_map(array('\BBMParser\Model\Contributor', 'getFullNameStatically'), $bbmProduct->getContributorsByType('Ilustrador')))) {
                    $data['product_attribute'][] = array(
                        'attribute_id' => $this->featureIDIlustrador,
                        'product_attribute_description' => array(
                            (int)$this->config->get('config_language_id') => array(
                                'text' => $ilustradorsName
                            )
                        )
                    );
                } 
                /*
                 * Download
                 */ 
                if($bbmProduct->getOperationType() == '03') {
                    $downloadID = $this->model_catalog_download->addDownload(
                        array(
                            'filename' => $bbmProduct->getISBN() . '.bbm',
                            'mask' => $bbmProduct->getISBN() . '.bbm',
                            'download_description' => array(
                                (int)$this->config->get('config_language_id') => array('name' => $bbmProduct->getISBN() . '.bbm')
                            )
                        )
                    );
                    $data['product_download'] = array($downloadID);
                }                
                /*
                 * Image
                 */
                //For Update routine as we may only have one Image as Product Cover
                $imgUrl = $bbmProduct->getUrlFile();
                // $fileName = basename($imgUrl);
                $fileName = $bbmProduct->getId().'.'.pathinfo($imgUrl, PATHINFO_EXTENSION);
                @copy('http://' . $imgUrl, DIR_IMAGE . 'catalog/' . $fileName);
                $data['image'] = 'catalog/' . $fileName;
            
                $data['product_category'] = $categoriesIds;
                if($idProductAlreadyInserted && $bbmProduct->getOperationType() == '04') {
                    $this->model_catalog_product->editProduct($idProductAlreadyInserted, $data);
                } else {
                    $idProductAlreadyInserted = $this->model_catalog_product->addProduct($data);
                    $myProduct->updateBBMField($idProductAlreadyInserted, array('bbm_id_product' => $bbmProduct->getId(), 'iso_code' => $this->product_iso_code, 'is_bbm' => TRUE));
                }                
                //Associate all Tags, including the Author, if it´s the case, to the Product.
                //OBS: If there is already a Tag with the same name, Prestashop ignores this addition. Which is excelent for Update routine.
                //Opencart not support Tags
                // if(count($tags))
                //     Tag::addTags((int)Configuration::get('PS_LANG_DEFAULT'), $product->id, $tags);            
            }
            $result['status'] = 'complete';
            $result['content'] = $this->language->get('text_import_success');
        } catch(Exception $e) {
            $result['status'] = 'error';
            $result['content'] = $e->getMessage();
            throw $e;
        }
        $this->writeLock($this->logfile, $result);
    }
}