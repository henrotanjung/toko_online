<?php

class Model_barang extends CI_Model{

    var $table = 'tb_barang';
    public function tampil_data(){
        return $this->db->get($this->table);
    }

    public function tambah_barang($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit_barang($id_brg)
    {
        $this->db->where('id_brg', $id_brg);
        return $this->db->get_where($this->table);
    }

    public function update_data($id_brg, $data)
    {
        $this->db->where('id_brg', $id_brg);
        $this->db->update($this->table, $data);
    }

    public function find($id_brg)
    {
        $this->db->where('id_brg', $id_brg);
        $result = $this->db->get($this->table);

        if ($result->num_rows() > 0){
            return $result;
        } else {
            return array();
        }
    }
    public function detail_brg($id_brg)
    {
        $this->db->where('id_brg', $id_brg);
        $result = $this->db->get($this->table);

        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return array();
        }
    }
}