<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Allusers_model');
		check_session();
        user_access();
	}

	public function index()
	{
		
				
		$data['title'] = 'Data users';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['allUsers'] = $this->Allusers_model->getUsers();
		

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('users/index', $data);
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
	}

	public function register()
	{
		$this->load->view('users/register');
	}

	public function postRegister()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim|min_length[8]|is_unique[users.nik]', [
            'is_unique' => 'Nik already exists',
            'min_length' => 'Must be 8 digits'
        ]);
         $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [            
            'min_length' => 'Password of at least 3 characters'
        ]);
         $this->form_validation->set_rules(
            'password_confirmation',
            'Password confirmation',
            'required|trim|matches[password]',
            [                
                'matches' => 'Password confirmation does not match'
            ]
        );

         if($this->form_validation->run() == false){
         	$this->load->view('users/register');
         }else{
         	$data = [
	            "name" => htmlspecialchars($this->input->post('name', true)),
	            "email" => "engineering@gmail.com",
                "nik" => htmlspecialchars($this->input->post('nik', true)),
	            "image" => "default.png",
	            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
	            "role" => "user",
	            "is_active" => 0,
	            "created_at" => time()
	        ];
	        $this->Allusers_model->insertUsers($data);
            $this->session->set_flashdata('message', 'Success');
            redirect('users');
         }
	}

	public function update()
	{
		$data['title'] = 'User list';
		$data['allUsers'] = $this->Allusers_model->getUsers();
		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
		 
        $this->form_validation->set_rules('is_active', 'Is_active', 'required');
        if($this->form_validation->run() == false){

        	$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);
			$this->load->view('master/sidebar');
			$this->load->view('users/index', $data);
			$this->load->view('master/footer' ,$data);
			$this->load->view('master/js');

        }else{

        	$id = $this->input->post('id');
        	$data = [

        		'is_active' => $this->input->post('is_active')
        	];
        $this->Allusers_model->updateDataUser($id,$data);
        $this->session->set_flashdata('message', 'Success');        
        redirect('users');

        }
	}

	public function destroy($id)
	{
		$this->Allusers_model->deleteUsers($id);        
        redirect('users');
	}
}
