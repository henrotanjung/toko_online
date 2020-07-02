<?php

class Model_purchase extends CI_Model{
    
    var $table = 'tb_purchase';

    public function tampilkan_data()
    {
        $this->db->select("$this->table.*");
        $this->db->select('tb_partner.nama as nama_part');
        $this->db->from("$this->table");
        $this->db->join('tb_partner', "tb_partner.id = $this->table.partner_id");
        return $this->db->get()->result();
    }
}