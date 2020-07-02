<?php

class Model_partner extends CI_Model {
    
    var $table = 'tb_partner';

    public function tampilkan_data_customer()
    {
        $this->db->where('customer', true);
        return $this->db->get($this->table)->result();
    }

    public function tampilkan_data_supplier()
    {
        $this->db->where('supplier', true );
        return $this->db->get($this->table)->result();
    }

    public function simpan($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function detail($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
}