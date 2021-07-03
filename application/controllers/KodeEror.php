<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KodeEror extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();		
		check_session();
		myTime();
		
	}

	public function index()
	{	
		
		$data['title'] = 'Kode Eror';		
				
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['daikin'] = $this->db->get('tb_daikin_kode')->result_array();
		$data['panasonic'] = $this->db->get('tb_panasonic_kode')->result_array();

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);		
		// $this->load->view('master/sidebar', $data);		
		$this->load->view('kodeEror/index', $data);
		// $this->load->view('master/footer' ,$data);
		$this->load->view('master/js');	
											
		
	}

	public function store()
	{
		$data = [
			"kode" => $this->input->post('kode'),
			"kerusakan" => $this->input->post('kerusakan')
		];

		$this->db->insert('tb_panasonic_kode', $data);
		redirect('kodeeror');
	}

	
}
