<?php

class ModelExtensionModuleAkaunting extends Model
{
    public function editApi($data)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "api` WHERE username = 'akaunting'");

        $this->db->query(
            "INSERT INTO `" . DB_PREFIX . "api` SET username = 'akaunting'," .
            " `key` = '" . $this->db->escape($data['akaunting_api_key']) . "'," .
            " status = '" . (int)$data['akaunting_enabled']. "'," .
            " date_added = NOW()," .
            " date_modified = NOW()"
        );
    }
    public function deleteApi()
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "api` WHERE username = 'akaunting'");
    }
}
