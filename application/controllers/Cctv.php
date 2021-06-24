<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cctv extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Cctv_model');       
        check_session();   
        myTime();       
    }

    public function index()
    {
    	$data['title'] = 'Data CCTV';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['camera'] = $this->Cctv_model->getDataCctv();
		

    	$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('cctv/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
    }

    public function store()
    {
    	$data['title'] = 'Data CCTV';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['camera'] = $this->Cctv_model->getDataCctv();
		
		$this->form_validation->set_rules('wing', 'Wing', 'required');
		$this->form_validation->set_rules('lantai', 'Lantai', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		$this->form_validation->set_rules('merk', 'Merk', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('sensor', 'Sensor', 'required');
		$this->form_validation->set_rules('power', 'Power', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if($this->form_validation->run() == false)
		{

    	$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('cctv/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
		$this->session->set_flashdata('message_err', 'Tambah data gagal');
			redirect('cctv');
		}
		else
		{
			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$inserts = 'Di tambahkan tanggal,' .' '. $tanggal . ' ' . 'oleh';

			$data =
			[
				"no_camera" => $this->input->post('no_camera'),
				"wing" => $this->input->post('wing'),
				"lantai" => $this->input->post('lantai'),
				"lokasi" => $this->input->post('lokasi'),
				"merk" => $this->input->post('merk'),
				"jenis" => $this->input->post('jenis'),
				"pwr_supplay" => $this->input->post('power'),
				"sensor_gambar" => $this->input->post('sensor'),
				"status" => $this->input->post('status'),
				"catatan" => $this->input->post('catatan'),
				"tgl_pengadaan" => $this->input->post('tgl_pengadaan'),
				"created_by" => $inserts .' ' . $this->session->userdata('role') . ' ' . 'pukul' .' ' .$pukul,
				"created_at" => time()
			];

			$this->Cctv_model->insertDataCctv($data);
			$this->session->set_flashdata('message', 'Tambah data berhasil');
	        redirect('cctv');
		}

    }

    public function updated()
    {
    	$data['title'] = 'Data CCTV';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['camera'] = $this->Cctv_model->getDataCctv();
		
		$this->form_validation->set_rules('wing', 'Wing', 'required');
		$this->form_validation->set_rules('lantai', 'Lantai', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		$this->form_validation->set_rules('merk', 'Merk', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required');
		$this->form_validation->set_rules('sensor', 'Sensor', 'required');
		$this->form_validation->set_rules('power', 'Power', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if($this->form_validation->run() == false)
		{

    	$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('cctv/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
		$this->session->set_flashdata('message_err', 'Update data gagal');
			redirect('cctv');
		}
		else
		{

			$id = $this->input->post('id_update');
			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$updates = 'Di ubah tanggal' .', ' . $tanggal . ' ' . ' ' . 'oleh';

			$data =
			[
				"no_camera" => $this->input->post('no_camera'),
				"wing" => $this->input->post('wing'),
				"lantai" => $this->input->post('lantai'),
				"lokasi" => $this->input->post('lokasi'),
				"merk" => $this->input->post('merk'),
				"jenis" => $this->input->post('jenis'),
				"pwr_supplay" => $this->input->post('power'),
				"sensor_gambar" => $this->input->post('sensor'),
				"status" => $this->input->post('status'),
				"catatan" => $this->input->post('catatan'),
				"tgl_pengadaan" => $this->input->post('tgl_pengadaan'),
				"updated_by" => $updates .' ' . $this->session->userdata('name') . ' ' . 'pukul' .' ' .$pukul
			];

			$this->Cctv_model->updatedDataCctv($id, $data);
			$this->session->set_flashdata('message', 'Update data berhasil');
	        redirect('cctv');
		}
    }

    public function destroy($id)
    {
    	$this->Cctv_model->deleteDataCctv($id);		
		redirect('cctv');
    }
	
}
