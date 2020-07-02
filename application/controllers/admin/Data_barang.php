<?php

class Data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda belum login.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );

            redirect('auth/login');
        }
    }
    
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stock = $this->input->post('stock');
        $gambar = $_FILES['gambar']['name'];

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
            'nama_brg',
            'keterangan',
            'kategori',
            'harga',
            'stock',
            'gambar'
        );


        $this->model_barang->tambah_barang($data);
        redirect('admin/data_barang/index');
    }

    public function edit($id_brg)
    {
        $data['barang'] = $this->model_barang->edit_barang($id_brg)->row();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_data()
    {
        $id_brg = $this->input->post('id_brg');
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stock = $this->input->post('stock');

        $data = compact(
            'nama_brg',
            'keterangan',
            'kategori',
            'harga',
            'stock'
        );

        $this->model_barang->update_data($id_brg, $data);
        redirect('admin/data_barang/index');
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('templates_admin/footer');
    }
}
