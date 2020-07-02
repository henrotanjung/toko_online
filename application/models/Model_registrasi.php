<?php

class Model_registrasi extends CI_Model {

    var $table = 'tb_user';
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}