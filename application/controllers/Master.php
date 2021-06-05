<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();      
        $this->load->model('Stockbarang_model'); 
        $this->load->model('Airco_model');
        $this->load->model('Export_model');  
        check_session();
        
    }

    public function index()
    {	
    	$data['title'] = 'Master data';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['listBarang'] = $this->Export_model->exportAssets()->result();
		$data['airco'] = $this->Export_model->exportDataAc()->result();
		$data['apart'] = $this->Export_model->exportDataApart()->result();
		

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('export/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
    }

	
}
