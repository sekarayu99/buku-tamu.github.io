<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = [
			'title' => 'Buku Tamu'
		];
		$this->load->view('homepage', $data);
	}

	public function simpan()
    {
        $data = [
            'nama'  	=> $this->input->post('nama'),
            'no_hp'   	=> $this->input->post('no_hp'),
            'alamat'    => $this->input->post('alamat'),
            'tanggal'  	=> $this->input->post('tanggal'),
            'keperluan' => $this->input->post('keperluan'),
        ];
        $query = $this->db->insert('tamu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
		redirect('welcome');
	}
}