<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();       
        check_session();
        user_access();   
    }

	public function index()
	{
		$data['title'] = 'Dashboard';

		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('home/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
	}
}
