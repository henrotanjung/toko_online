<?php

class Purchase extends CI_Controller{
    
    public function index()
    {
        $data['purchases'] = $this->model_purchase->tampilkan_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/purchase', $data);
        $this->load->view('templates_admin/footer');
    }
}