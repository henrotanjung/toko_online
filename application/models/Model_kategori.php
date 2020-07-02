<?php

class Model_kategori extends CI_Model{
var $table = 'tb_barang';

    public function data_elektronik()
    {
        $this->db->where('kategori', 'elektronik');
        return $this->db->get($this->table);
    }
    public function data_pakaian_pria()
    {
        $this->db->where('kategori', 'pakaian pria');
        return $this->db->get($this->table);
    }
    public function data_pakaian_wanita()
    {
        $this->db->where('kategori', 'pakaian wanita');
        return $this->db->get($this->table);
    }
    public function data_pakaian_anak_anak()
    {
        $this->db->where('kategori', 'pakaian anak-anak');
        return $this->db->get($this->table);
    }
    public function data_peralatan_olah_raga()
    {
        $this->db->where('kategori', 'Peralatan Olahraga');
        return $this->db->get($this->table);
    }
    
}