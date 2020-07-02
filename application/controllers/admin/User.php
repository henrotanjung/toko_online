<?php

class User extends CI_Controller{
    public function index()
    {
        $data['users'] = $this->model_user->tampilkan_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/customer', $data);
        $this->load->view('templates_admin/footer');
    }
}