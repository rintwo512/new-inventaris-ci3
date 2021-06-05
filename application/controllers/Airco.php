<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airco extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Airco_model');
		check_session();
		myTime();
		
	}

	public function index()
	{	
		

		$data['title'] = 'Air Conditioner';

		$data['airco'] = $this->Airco_model->getAc();
				
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('airco/index', $data);
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');	
											
		
	}

	public function store()
	{

		$data['title'] = 'Air Conditioner';
		$data['airco'] = $this->Airco_model->getAc();
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();


        $this->form_validation->set_rules('label', 'Label', 'required|numeric',
        	["numeric" => "only filled with numbers !"]
    	);
        $this->form_validation->set_rules('wing', 'Wing', 'required');
        $this->form_validation->set_rules('lantai', 'Lantai', 'required');
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('tgl_pemasangan', 'Tgl_pemasangan', 'required');
        $this->form_validation->set_rules('refrigerant', 'Refrigerant', 'required');
        $this->form_validation->set_rules('phasa', 'Phasa', 'required');        
        $this->form_validation->set_rules('arus', 'Arus', 'required|numeric',
        	["numeric" => "only filled with numbers !"]
    	);
        $this->form_validation->set_rules('tegangan_kerja', 'Tegangan_kerja', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required');
        $this->form_validation->set_rules('product', 'Product', 'required');
        $this->form_validation->set_rules('tgl_maintenance', 'Tgl_maintenance', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('status_kompresor', 'Status kompresor', 'required');


		if($this->form_validation->run() == false)
		{
			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('airco/index', $data);
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Add data failed');
			redirect('airco');
			

		}
		else
		{

			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$inserts = 'Di tambahkan tanggal,' .' '. $tanggal . ' ' . 'oleh';
									
			$data = [ 
                
	                "label" => $this->input->post('label'),
                    "wing" => $this->input->post('wing'),
                    "lantai" => $this->input->post('lantai'),
                    "ruangan" => $this->input->post('ruangan'),
                    "merk" => $this->input->post('merk'),
                    "model" => $this->input->post('model'),
                    "jenis" => $this->input->post('jenis'),
                    "tgl_pemasangan" => $this->input->post('tgl_pemasangan'),
                    "refrigerant" => $this->input->post('refrigerant'),
                    "kapasitas" => $this->input->post('kapasitas'),
                    "product" => $this->input->post('product'),
                    "tgl_maintenance" => $this->input->post('tgl_maintenance'),
                    "arus" => $this->input->post('arus'),
                    "phasa" => $this->input->post('phasa'),
                    "pipa" => $this->input->post('pipa'),
                    "btu" => $this->input->post('btu'),
	                "tegangan_kerja" => $this->input->post('tegangan_kerja'),
                    "status" => $this->input->post('status'),
                    "jenis_kerusakan" => $this->input->post('jenis_kerusakan'),
                    "status_kompresor" => $this->input->post('status_kompresor'),
                    "insert_by" => $inserts .' ' . $this->session->userdata('role') . ' ' . 'pukul' .' ' .$pukul,
                    "updated" => time()
             ];

             $this->Airco_model->insertAc($data);
                           			
		$this->session->set_flashdata('message', 'Add data success');
        redirect('airco');
		}
	}

	public function update()
	{
		$data['title'] = 'Air Conditioner';
		$data['airco'] = $this->Airco_model->getAc();
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();


        $this->form_validation->set_rules('label', 'Label', 'required');
        $this->form_validation->set_rules('wing', 'Wing', 'required');
        $this->form_validation->set_rules('lantai', 'Lantai', 'required');
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('tgl_pemasangan', 'Tgl_pemasangan', 'required');
        $this->form_validation->set_rules('refrigerant', 'Refrigerant', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required');
        $this->form_validation->set_rules('product', 'Product', 'required');
        $this->form_validation->set_rules('tgl_maintenance', 'Tgl_maintenance', 'required');
        $this->form_validation->set_rules('phasa', 'Phasa', 'required');        
        $this->form_validation->set_rules('arus', 'Arus', 'required');
        $this->form_validation->set_rules('tegangan_kerja', 'Tegangan_kerja', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('status_kompresor', 'Status kompresor', 'required');
          


		if($this->form_validation->run() == false)
		{
			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('airco/index', $data);
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Update data failed');
			redirect('airco');
			

		}else{
			 $id = $this->input->post('id');
			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$updates = 'Di ubah tanggal' .', ' . $tanggal . ' ' . ' ' . 'oleh';

       $data = 
		       [
		       	 "label" => $this->input->post('label'),
		       	 "wing" => $this->input->post('wing'),
		       	 "lantai" => $this->input->post('lantai'),
		       	 "ruangan" => $this->input->post('ruangan'),
		       	 "merk" => $this->input->post('merk'),
		       	 "model" => $this->input->post('model'),
		       	 "jenis" => $this->input->post('jenis'),
		       	 "Tgl_pemasangan" => $this->input->post('tgl_pemasangan'),
		       	 "refrigerant" => $this->input->post('refrigerant'),
		       	 "kapasitas" => $this->input->post('kapasitas'),
		       	 "product" => $this->input->post('product'),
		       	 "tgl_maintenance" => $this->input->post('tgl_maintenance'),
		       	 "phasa" => $this->input->post('phasa'),
                 "pipa" => $this->input->post('pipa'),
		       	 "arus" => $this->input->post('arus'),
		       	 "btu" => $this->input->post('btu'),
		       	 "tegangan_kerja" => $this->input->post('tegangan_kerja'),
		       	 "status" => $this->input->post('status'),
		       	 "jenis_kerusakan" => $this->input->post('jenis_kerusakan'),
		       	 "status_kompresor" => $this->input->post('status_kompresor'),
		       	 "update_by" => $updates .' ' . $this->session->userdata('name') . ' ' . 'pukul' .' ' .$pukul,
		       	 "updated" => time()
		       ];

        $this->Airco_model->updateData($id,$data);
        $this->session->set_flashdata('message', 'Update data success');        
        redirect('airco');
		
		}
	}

	public function destroy($id)
	{
		$this->Airco_model->deleteData($id);        
        redirect('airco');
	}
}
