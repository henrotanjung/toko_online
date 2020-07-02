<?php

class Model_user extends CI_Model {
    
    var $table = 'tb_user';
    public function tampilkan_data()
    {
        return $this->db->get($this->table)->result();
    }
}