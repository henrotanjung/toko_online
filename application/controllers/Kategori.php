<?php 

class Kategori extends CI_Controller{
    
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_anak_anak()
    {
        $data['elektronik'] = $this->model_kategori->data_pakaian_anak_anak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }
    public function peralatan_olah_raga()
    {
        $data['peralatan_olah_raga'] = $this->model_kategori->data_peralatan_olah_raga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olah_raga', $data);
        $this->load->view('templates/footer');
    }
}