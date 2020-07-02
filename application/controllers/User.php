<?php

class User extends CI_Controller{
    public function profile()
    {
        $username = $this->session->item('username');
        
        $this->model_user->detail($username);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user');
        $this->load->view('templates/footer');
    }
}