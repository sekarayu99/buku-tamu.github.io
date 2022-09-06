<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tamu_model');
        $this->load->helper('tgl_indo_helper');
    }

	public function index()
	{
        $this->security_model->getSecurity();
        $data = [
            'title' => 'Data Tamu',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'tamu' => $this->tamu_model->getAllData(),
            'isi' => 'tamu/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function filter()
	{
        $this->security_model->getSecurity();

        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $this->session->set_userdata('tanggal_awal', $tgl_awal);
        $this->session->set_userdata('tanggal_akhir', $tgl_akhir);

        if (empty($tgl_awal) || empty($tgl_akhir)) {
            $data = [
                'title' => 'Data Tamu',
                'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
                'tamu' => $this->tamu_model->getAllData(),
                'isi' => 'tamu/list'
            ];
        } else {
            $data = [
                'title' => 'Data Tamu',
                'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
                'tamu' => $this->tamu_model->filterData($tgl_awal, $tgl_akhir),
                'isi' => 'tamu/list'
            ];
        }
		$this->load->view('layout/wrapper', $data);
    }

    public function print()
    {
        if (empty($this->session->userdata('tanggal_awal')) || empty($this->session->userdata('tanggal_akhir'))) {
            $data = [
                'tamu' => $this->tamu_model->getAllData(),
                'isi' => 'tamu/list'
            ];
            $this->load->view('tamu/print', $data);
        } else {
            $data = [
                'tamu' => $this->tamu_model->filterData($this->session->userdata('tanggal_awal'), $this->session->userdata('tanggal_akhir')),
                'isi' => 'tamu/list'
            ];
            $this->load->view('tamu/print', $data);
        }
    }

    
}
