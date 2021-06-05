<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {


	  public function __construct()
    {
        parent::__construct();               
        $this->load->model('Stockbarang_model');
        check_session();
		myTime();
    }


	public function index()
	{
		$data['title'] = 'Stock Barang';		
				
        $data['listBarang'] = $this->Stockbarang_model->getBarang();
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('stock/index',$data);
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');	
	}

	public function store()
	{
		$data['title'] = 'Stock Barang';		
		$data['listBarang'] = $this->Stockbarang_model->getBarang();
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->form_validation->set_rules('nama_barang', 'Nama_barang','required');
		$this->form_validation->set_rules('merk', 'Merk','required');				
		$this->form_validation->set_rules('status', 'Status','required');
		$this->form_validation->set_rules('daya', 'Daya','required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('stock/index', $data);
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');	
			$this->session->set_flashdata('message_err', 'Tambah data gagal');
			 redirect('stock');
		}else{

			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$inserts = 'Di tambahkan tanggal,' .' '. $tanggal . ' ' . 'oleh';
			$data = 
			[

				"nama_barang" => $this->input->post('nama_barang'),
				"catatan" => $this->input->post('catatan'),
				"merk" => $this->input->post('merk'),
				"tgl_pengadaan" => $this->input->post('tgl_pengadaan'),
				"status" => $this->input->post('status'),
				"daya" => $this->input->post('daya'),
				"berat" => $this->input->post('berat'),
				"insert_by" => $inserts . ' ' . $this->session->userdata('role') .' '. 'pukul' . ' ' . $pukul,
				"updated" => time()

			];

			$this->Stockbarang_model->insertBarang($data);
			$this->session->set_flashdata('message', 'Add data success');
	        redirect('stock');
		}
	}

	public function update()
	{
		$data['title'] = 'Stock Barang';		
		$data['listBarang'] = $this->Stockbarang_model->getBarang();
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->form_validation->set_rules('nama_barang', 'Nama_barang','required');
		$this->form_validation->set_rules('merk', 'Merk','required');				
		$this->form_validation->set_rules('status', 'Status','required');
		$this->form_validation->set_rules('daya', 'Daya','required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('stock/index', $data);
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');	
			$this->session->set_flashdata('message_err', 'Update data gagal');
			 redirect('stock');
		}else{

			$id = $this->input->post('id');
			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$updates = 'Di ubah tanggal' .', ' . $tanggal . ' ' . ' ' . 'oleh';
			$data = 
			[

				"nama_barang" => $this->input->post('nama_barang'),
				"catatan" => $this->input->post('catatan'),
				"merk" => $this->input->post('merk'),
				"tgl_pengadaan" => $this->input->post('tgl_pengadaan'),
				"status" => $this->input->post('status'),
				"daya" => $this->input->post('daya'),
				"berat" => $this->input->post('berat'),
				"update_by" => $updates .' ' . $this->session->userdata('name') . ' ' . 'pukul' .' ' .$pukul,				
				"updated" => time()				

			];
			$this->Stockbarang_model->updateBarang($id,$data);
	        $this->session->set_flashdata('message', 'Update data success');        
	        redirect('stock');
		}
	}

	public function destroy($id)
	{
		$this->Stockbarang_model->delBarang($id);
		redirect('stock');
	}
}
