<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
    
	public function index()
	{
        $data = [
            'title' => 'Login Page'
        ];
		$this->load->view('login', $data);
    }
    
    public function proses_login()
	{
        $user = $this->input->post('username');        
        $pass = $this->input->post('password');  
        $this->auth_model->proses_login($user, $pass);      
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah keluar dari sistem, silahkan login!</div>');
        redirect('auth');
    }
}
