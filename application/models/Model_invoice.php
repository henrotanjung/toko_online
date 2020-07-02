<?php

class Model_invoice extends CI_Model{
    var $table = 'tb_invoice';

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $invoice = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'),date('m'), date('d') + 1, date('Y'))),
        );
        $this->db->insert($this->table, $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_invoice'    => $id_invoice,
                'id_brg'        => $item['id'],
                'nama_brg'      => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price']
            );
            $this->db->insert('tb_pesanan', $data);
        }
        return true;
    }

    public function tampil_data()
    {
        $result = $this->db->get('tb_invoice');
        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $this->db->where('id', $id_invoice);
        $result = $this->db->get('tb_invoice');

        if ($result->num_rows() > 0){
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $this->db->where('id_invoice', $id_invoice);
        $result = $this->db->get('tb_pesanan');

        if ($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }
    
    public function ambil_pesanan($tb_pesanan,$id_invoice)
    {
        $this->db->select('id_invoice, sum(jumlah * harga) as total');
        $this->db->where('id_invoice', $id_invoice);
        $result = $this->db->get($tb_pesanan,1);
        if ($result->num_rows() > 0){
            return $result->row();
        } else {
            return false;
        }
    }

    public function pembayaran($tb_pendapatan, $data)
    {
        $this->db->insert($tb_pendapatan, $data);
        $id_invoice = $data['id_invoice'];
        $this->db->update($this->table, array('status'=> '2'), "id = $id_invoice" );
        $this->db->update('tb_pesanan', array('status' => '2'), "id_invoice = $id_invoice" );
    }

    public function detail($id_invoice)
    {
        $this->db->select('id, status');
        $this->db->where('id', $id_invoice);
        return $this->db->get($this->table)->row();
    }

    public function cancel($data, $id_invoice)
    {
        $this->db->update($this->table, $data, "id = $id_invoice");
        $this->db->update('tb_pesanan', $data, "id_invoice = $id_invoice");
    }
}