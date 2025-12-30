<?php
class ModelExtensionModuleWhitelist extends Model {
	
	public function addIP($ip_address = '', $comment = '') {
        
               $this->db->query("INSERT INTO `".DB_PREFIX."whitelist` SET `ip_address` = '".$this->db->escape($ip_address)."', `comment` = '".$this->db->escape($comment)."', date_added = NOW()");

        }

        public function delIP($ip_address = '') {
                
              $this->db->query("DELETE FROM `".DB_PREFIX."whitelist` WHERE `ip_address` = '".$this->db->escape($ip_address)."'");
        }
        
        public function ClearAllTable() {
	       $this->db->query("TRUNCATE `".DB_PREFIX."whitelist`");
	       $this->db->query("SET @@session.auto_increment_offset = 1;");
               $this->db->query("SET @@session.auto_increment_increment = 1;");
               $this->db->query("SET SQL_MODE='ALLOW_INVALID_DATES';");
	       return true;
	}
	
	public function getWhites($start = 0, $limit = 10) {
        
                if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

                $query = $this->db->query("SELECT * FROM `".DB_PREFIX."whitelist` ORDER BY `whitelist_id` ASC LIMIT ".(int)$start.",".(int)$limit);

		return $query->rows;
	}

	public function getTotalWhites() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `".DB_PREFIX."whitelist`");

		return $query->row['total'];
	}
	
	public function getAllWhites() {
		$query = $this->db->query("SELECT `ip_address` FROM `".DB_PREFIX."whitelist`");

		return $query->rows;
	}

	public function getTotalWhitesByIp($ip_address = '') {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `".DB_PREFIX."whitelist` WHERE ip_address = '".$this->db->escape($ip_address)."'");

		return $query->row['total'];
	}

	
	public function isRestricted($ip_address = '') {
		
		$query = $this->db->query("SELECT `ip_address` FROM `" . DB_PREFIX . "whitelist` WHERE `ip_address` = '".$this->db->escape($ip_address)."'");

                return $query->rows ? false : true;
        
        }
        
        public function install() {
	
	        $this->db->query("SET @@session.auto_increment_offset = 1;");
                $this->db->query("SET @@session.auto_increment_increment = 1;");
                $this->db->query("SET SQL_MODE='ALLOW_INVALID_DATES';");
	        $this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '0', serialized = '0'  WHERE `code` = 'config' AND `key` = 'config_error_display'");
	        $this->db->query("
		CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "whitelist` (
		  `whitelist_id` int(11) NOT NULL AUTO_INCREMENT,
		  `ip_address` varchar(40) NOT NULL,
		  `comment` varchar(255) NOT NULL,
		  `date_added` datetime NOT NULL,
		  INDEX (`whitelist_id`),
		  PRIMARY KEY (`whitelist_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");             
	}
	
	public function uninstall() {
                
                $this->db->query("UPDATE " . DB_PREFIX . "setting SET `value` = '0', serialized = '0'  WHERE `code` = 'config' AND `key` = 'config_error_display'");
                $this->db->query("TRUNCATE `".DB_PREFIX."whitelist`");
                $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "whitelist`");
                $this->db->query("SET @@session.auto_increment_offset = 1;");
                $this->db->query("SET @@session.auto_increment_increment = 1;");
                $this->db->query("SET SQL_MODE='ALLOW_INVALID_DATES';");
	}
}
