<?php

class Model_pendapatan extends CI_Model{

    var $table = 'tb_pendapatan';

    public function tampilkan_pendapatan()
    {
        return $this->db->get($this->table)->result();
    }

}