<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	 public function __construct()

    {
        parent::__construct();        
        $this->load->model('Auth_model');
        myTime();
     
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
            $user_login = 'online';
            
             $login_time = date('d/M/Y \| G:i',time());
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
                            
                            $this->db->set('user_login', $user_login);
                            $this->db->set('login_time', $login_time);
                            $this->db->where('nik', $this->session->userdata('nik'));
                            $this->db->update('users');                         
                            redirect('home');
                        } else {
                            $this->db->set('user_login', $user_login);
                            $this->db->set('login_time', $login_time);
                            $this->db->where('nik', $this->session->userdata('nik'));
                            $this->db->update('users');                            
                            redirect('airco');
                        }
                    } else {
                        $this->session->set_flashdata('error_message', 'Password anda salah!');
                        redirect('auth');
                    }
                } else {

                    $this->session->set_flashdata('error_message', 'Silahkan hubungi admin untuk mengaktifkan akun anda!');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error_message', 'NIK anda belum terdaftar!');
                redirect('auth');
            }
        }
    }		

	 public function logout()
    {
        
        $user_login = "offline";
       
        $this->db->set('user_login', $user_login);

        $this->db->where('nik', $this->session->userdata('nik'));
        $this->db->update('users');
        
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('role');
        redirect('/');
    }
}
