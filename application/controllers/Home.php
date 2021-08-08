<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
 

use Carbon\Carbon;

class Home extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();       
        check_session();
        user_access(); 
        myTime();
        
    }

	public function index()
	{

		
		$data['title'] = 'Dashboard';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
		
		

		$data['count'] = $this->db->count_all('tb_ac');
		$data['count_assets'] = $this->db->count_all('tb_daftar_barang');
		$data['count_users'] = $this->db->count_all('users');
		$data['count_apar'] = $this->db->count_all('tb_apart');
		$data['count_cctv'] = $this->db->count_all('tb_cctv');
		$data['count_elektronik'] = $this->db->count_all('tb_elektronik');
		
		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('home/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
	}

}
