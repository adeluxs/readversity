<?php 
class MYProduct {
	
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getIDByIDBBM($idBBM) {
        $result = $this->db->query("SELECT `product_id` FROM `" . DB_PREFIX . "product` WHERE `bbm_id_product` = '{$idBBM}' AND `is_bbm` IS NOT NULL");
        return !empty($result->row['product_id']) ? $result->row['product_id'] : false;
    }

    public function getIsoCodeByIDBBM($idBBM) {
        $result = $this->db->query("SELECT `iso_code` FROM `" . DB_PREFIX . "product` WHERE `bbm_id_product` = '{$idBBM}' AND `is_bbm` IS NOT NULL");
        return !empty($result->row['iso_code']) ? $result->row['iso_code'] : false;
    }

    public function getIDBBMByID($idProduct) {
        $result = $this->db->query("SELECT `bbm_id_product` FROM `" . DB_PREFIX . "product` WHERE `product_id` = {$idProduct} AND `is_bbm` IS NOT NULL");
        return !empty($result->row['bbm_id_product']) ? $result->row['bbm_id_product'] : false;
    }

    public function updateBBMField($idProduct, $data) {
        $this->db->query("UPDATE `". DB_PREFIX ."product` SET `bbm_id_product` = '" . $data['bbm_id_product'] . "', `iso_code` = '" . $data['iso_code'] . "', `is_bbm` = " . $data['is_bbm'] . " WHERE `product_id` = '{$idProduct}'");
    }
}