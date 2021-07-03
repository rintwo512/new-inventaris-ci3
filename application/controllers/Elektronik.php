<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elektronik extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Elektronik_model");
		check_session();
		myTime();
		
	}

	public function index()
	{	
		

		$data['title'] = 'Perangkat Elektronik';		
		$data['elektronik'] = $this->Elektronik_model->getEl();
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('elektronik/index', $data);
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');	
											
		
	}

	public function store()
	{
		$data['title'] = 'Perangkat Elektronik';		
				
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['elektronik'] = $this->Elektronik_model->getEl();

		$this->form_validation->set_rules('nama_el', 'Nama', 'required');
		$this->form_validation->set_rules('merk_el', 'Merk', 'required');
		$this->form_validation->set_rules('wing_el', 'Wing', 'required');
		$this->form_validation->set_rules('lantai_el', 'Lantai', 'required');
		$this->form_validation->set_rules('lokasi_el', 'Lokasi', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('elektronik/index', $data);
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Tambah data gagal');
			redirect('elektronik');
		}else{

			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$created_by = 'Di tambahkan tanggal,' .' '. $tanggal . ' ' . 'oleh';

			$data = 
			[
				'aset' => $this->input->post('aset_el'),
				'nama' => $this->input->post('nama_el'),
				'merk' => $this->input->post('merk_el'),
				'wing' => $this->input->post('wing_el'),
				'lantai' => $this->input->post('lantai_el'),
				'lokasi' => $this->input->post('lokasi_el'),
				'tegangan' => $this->input->post('tegangan_el'),
				'watt' => $this->input->post('amper_el'),				
				'created_by' => $created_by .' ' . $this->session->userdata('role') . ' ' . 'pukul' .' ' .$pukul,
				'catatan' => $this->input->post('catatan_el'),
				'created_at' => time()
			];

		$this->Elektronik_model->insertEl($data);
		$this->session->set_flashdata('message', 'Tambah data berhasil');
        redirect('elektronik');
		}
	}

	public function update()
	{
		$data['title'] = 'Perangkat Elektronik';		
				
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['elektronik'] = $this->Elektronik_model->getEl();

		$this->form_validation->set_rules('nama_el3', 'Nama', 'required');
		$this->form_validation->set_rules('merk_el3', 'Merk', 'required');
		$this->form_validation->set_rules('wing_el3', 'Wing', 'required');
		$this->form_validation->set_rules('lantai_el3', 'Lantai', 'required');
		$this->form_validation->set_rules('lokasi_el3', 'Lokasi', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('elektronik/index', $data);
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Ubah data gagal');
			redirect('elektronik');
		}else{

			$id = $this->input->post('id_el3');
			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$updated_by = 'Di ubah tanggal' .', ' . $tanggal . ' ' . ' ' . 'oleh';

			$data = 
			[
				'aset' => $this->input->post('aset_el3'),
				'nama' => $this->input->post('nama_el3'),
				'merk' => $this->input->post('merk_el3'),
				'wing' => $this->input->post('wing_el3'),
				'lantai' => $this->input->post('lantai_el3'),
				'lokasi' => $this->input->post('lokasi_el3'),
				'tegangan' => $this->input->post('tegangan_el3'),
				'watt' => $this->input->post('amper_el3'),				
				'updated_by' => $updated_by .' ' . $this->session->userdata('name') . ' ' . 'pukul' .' ' .$pukul,
				'catatan' => $this->input->post('catatan_el3')
			];

		$this->Elektronik_model->UpdateEl($id, $data);
		$this->session->set_flashdata('message', 'Ubah data berhasil');
        redirect('elektronik');
		}
	}

	public function destroy($id)
	{
		$this->Elektronik_model->deleteEl($id);        
        redirect('elektronik');
	}

}