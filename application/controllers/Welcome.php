<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	  public function __construct()
    {
        parent::__construct();
        myTime();               
        // user_access();   
    }


	public function index()
	{
		 // if ($this->session->userdata('nik')) {
   //          redirect('home');
   //      }
		
		$this->load->view('welcome_message');
	}
}
