<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apart extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Apart_model');   
        check_session();   
        myTime();       
    }


    public function index()
    {

    	$data['title'] = 'Data apar';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['data_apart'] = $this->Apart_model->getApart();

    	$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('apart/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
    }

    public function store()
    {
    	$data['title'] = 'Data apar';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['data_apart'] = $this->Apart_model->getApart();

		$this->form_validation->set_rules('no_apart','No apart','required|is_unique[tb_apart.no_apart]',[
			'is_unique' => 'Nomor apar tidak boleh sama'
		]);
		$this->form_validation->set_rules('wing','Wing','required');
		$this->form_validation->set_rules('lantai','Lantai','required');
		$this->form_validation->set_rules('lokasi','Lokasi','required');
		$this->form_validation->set_rules('merk','Merk','required');
		$this->form_validation->set_rules('jenis','Jenis','required');
		$this->form_validation->set_rules('berat','Berat','required');
		$this->form_validation->set_rules('status','Status','required');

		if($this->form_validation->run() == false){

			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('apart/index');
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Add data failed');
			redirect('apart');
		}else{


			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$inserts = 'Di tambahkan tanggal,' .' '. $tanggal . ' ' . 'oleh';

			$data = 
			[
				"no_apart" => $this->input->post('no_apart'),
				"wing" => $this->input->post('wing'),
				"lantai" => $this->input->post('lantai'),
				"lokasi" => $this->input->post('lokasi'),
				"merk" => $this->input->post('merk'),
				"jenis" => $this->input->post('jenis'),
				"berat" => $this->input->post('berat'),
				"tgl_expired" => $this->input->post('tgl_expired'),
				"tgl_pengadaan" => $this->input->post('tgl_pengadaan'),
				"created_by" => $inserts . ' ' . $this->session->userdata('role') .' '. 'pukul' . ' ' . $pukul,
				"status" => $this->input->post('status'),
				"catatan" => $this->input->post('catatan'),
				"created_at" => time()
			];

			$this->Apart_model->insertApart($data);
			$this->session->set_flashdata('message', 'Add data success');
	        redirect('apart');

		}
    }


    public function update()
    {
    	$data['title'] = 'Data apar';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['data_apart'] = $this->Apart_model->getApart();

		$this->form_validation->set_rules('no_apart','No apart','required');
		$this->form_validation->set_rules('wing','Wing','required');
		$this->form_validation->set_rules('lantai','Lantai','required');
		$this->form_validation->set_rules('lokasi','Lokasi','required');
		$this->form_validation->set_rules('merk','Merk','required');
		$this->form_validation->set_rules('jenis','Jenis','required');
		$this->form_validation->set_rules('berat','Berat','required');
		$this->form_validation->set_rules('status','Status','required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('apart/index');
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Update data failed');
			redirect('apart');
		}else{

			$id = $this->input->post('id');
			$tanggal = date('d/M/Y', time());
			$pukul = date('G:i', time());
			$updates = 'Di ubah tanggal' .', ' . $tanggal . ' ' . ' ' . 'oleh';

			$data = 
			[
				"no_apart" => $this->input->post('no_apart'),
				"wing" => $this->input->post('wing'),
				"lantai" => $this->input->post('lantai'),
				"lokasi" => $this->input->post('lokasi'),
				"merk" => $this->input->post('merk'),
				"jenis" => $this->input->post('jenis'),
				"berat" => $this->input->post('berat'),
				"tgl_expired" => $this->input->post('tgl_expired'),
				"tgl_pengadaan" => $this->input->post('tgl_pengadaan'),
				"status" => $this->input->post('status'),
				"catatan" => $this->input->post('catatan_update'),
				"updated_by" => $updates .' ' . $this->session->userdata('name') . ' ' . 'pukul' .' ' .$pukul	
			];

			$this->Apart_model->updateApart($id,$data);
	        $this->session->set_flashdata('message', 'Update data success');        
	        redirect('apart');
		}
    }


    public function destroy($id)
    {
    	$this->Apart_model->delete($id);
    	redirect('apart');
    }

	
}
