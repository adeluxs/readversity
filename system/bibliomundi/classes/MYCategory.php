<?php
class MYCategory {
	
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getIDByIDBBM($idBBM) {
        $result = $this->db->query("SELECT `category_id` FROM `" . DB_PREFIX . "category` WHERE `bbm_id_category` = '{$idBBM}' AND `is_bbm` IS NOT NULL");
        return !empty($result->row['category_id']) ? $result->row['category_id'] : false;
    }

    public function getIDBBMByID($idCategory) {
        $result = $this->db->query("SELECT `bbm_id_category` FROM `" . DB_PREFIX . "category` WHERE `category_id` = {$idCategory} AND `is_bbm` IS NOT NULL");
        return !empty($result->row['category_id']) ? $result->row['category_id'] : false;
    }

    public function updateBBMField($idCategory, $data) {
        $this->db->query("UPDATE `". DB_PREFIX ."category` SET `bbm_id_category` = '" . $data['bbm_id_category'] . "', `is_bbm` = " . $data['is_bbm'] . " WHERE `category_id` = {$idCategory}");
    }
}
