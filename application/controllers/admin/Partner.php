<?php

class Partner extends CI_Controller{

    public function customer()
    {
        $data['customer'] = $this->model_partner->tampilkan_data_customer();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/customer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function supplier()
    {
        $data['supplier'] = $this->model_partner->tampilkan_data_supplier();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/supplier', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_supplier()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_supplier');
        $this->load->view('templates_admin/footer');
    }

    public function simpan()
    {
        $nama = $this->input->post('nama');
        $hp = $this->input->post('hp');
        $alamat = $this->input->post('alamat');
        $gambar = $_FILES['gambar']['name'];
        $supplier = $this->input->post('supplier');
        $customer = $this->input->post('customer');

        if ($gambar == '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal di upload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = compact(
            'nama',
            'hp',
            'alamat',
            'gambar',
            'supplier',
            'customer'
        );
        $this->model_partner->simpan($data);
        redirect('admin/partner/supplier');
    }

    public function edit_supplier($id)
    {
        $data['supplier'] = $this->model_partner->detail($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_supplier', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {        
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $hp = $this->input->post('hp');
        $alamat = $this->input->post('alamat');
        $supplier = $this->input->post('supplier');
        $customer = $this->input->post('customer');

        $data = compact(
            'nama',
            'hp',
            'alamat',
            'supplier',
            'customer'
        );

        $this->model_partner->update($id, $data);
        redirect('admin/partner/supplier');
    }
}