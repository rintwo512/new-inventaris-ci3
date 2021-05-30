<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	 public function __construct()

    {
        parent::__construct();        
        $this->load->model('Auth_model');
     
    }

	public function index()
	{
        if ($this->session->userdata('nik')) {
            redirect('home');
        }
       
		$this->load->view('auth/login');
	}

	public function postLogin()
	{
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');

		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]',[
			'required' => 'the field is required',
			'min_length' => 'Password must be 3 characters'
		]);

		if($this->form_validation->run() == false){

			$this->load->view('auth/login');

		}else {
            $nik = $this->input->post('nik');
            $password = $this->input->post('password');            
            $user = $this->db->get_where('users', ['nik' => $nik])->row_array();


            //jika akun ada
            if ($user) {
                //jika akun aktif
                if ($user['is_active'] == 1) {

                    //cek password
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'nik' => $user['nik'],
                            'email' => $user['email'],
                            'role' => $user['role'],
                            'name' => $user['name']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role'] == "admin") {                            
                            redirect('home');
                        } else {                            
                            redirect('airco');
                        }
                    } else {
                        $this->session->set_flashdata('error_message', 'Your password is wrong');
                        redirect('auth');
                    }
                } else {

                    $this->session->set_flashdata('error_message', 'Please contact the admin to activate your account');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error_message', 'Your nik has not been registered');
                redirect('auth');
            }
        }
    }		

	 public function logout()
    {

        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('role');
        redirect('/');
    }
}
