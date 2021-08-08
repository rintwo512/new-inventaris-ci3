<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();    
        $this->load->model('updatePassword_model');   
        check_session();
        $this->load->library('image_lib');
        myTime();
        
    }

	public function settings()
    {
        $data['title'] = 'Settings';

        $data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
        

        $this->load->view('master/header', $data);
        $this->load->view('master/topbar', $data);
        $this->load->view('master/sidebar');
        $this->load->view('users/settings');
        $this->load->view('master/footer' ,$data);
        $this->load->view('master/js');
    }

    public function updatePassword()
    {
        $data['title'] = 'Settings';

        $data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

        $this->form_validation->set_rules('password', 'Password', 'required|trim',[

                'required' => 'Tidak boleh kosong'

            ]);

        $this->form_validation->set_rules('new_password', 'New Password', 'required|trim|min_length[3]|matches[new_password_conf]',[

                'required' => 'Tidak boleh kosong',
                'min_length' => 'Minimal 3 karakter',
                'matches' => 'Password tidak sesuai'

            ]);

        $this->form_validation->set_rules('new_password_conf', 'New password conf', 'required|trim|min_length[3]|matches[new_password]',[

                'required' => 'Tidak boleh kosong',                
                'matches' => 'Password tidak sesuai',
                'min_length' => 'Minimal 3 karakter'

            ]);

        if($this->form_validation->run() == false ){


        $this->load->view('master/header', $data);
        $this->load->view('master/topbar', $data);
        $this->load->view('master/sidebar');
        $this->load->view('users/settings', $data);
        $this->load->view('master/footer' ,$data);
        $this->load->view('master/js');

        }else{

            $password = $this->input->post('password');
            $new_password = $this->input->post('new_password');

            if(!password_verify($password, $data['user']['password'])){

                $this->session->set_flashdata('alert', 'Password anda salah !');
                redirect('settings/settings', 'refresh');

            }else{

                 if ($new_password == $password) {

                    $this->session->set_flashdata('alert', 'Password baru tidak boleh sama dengan password lama !');
                   redirect('settings/settings', 'refresh');

                } else {

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->updatePassword_model->setPassword($password_hash);

                    $this->session->set_flashdata('message', 'Password berhasil diubah');

                    redirect('settings/settings', 'refresh');
                }

            }
        }
        
    }


    public function updateImg()
    {
        $data['title'] = 'Settings';

        $data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

       $this->form_validation->set_rules('name', 'Name', 'required');
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email',[

                'valid_email' => 'email tidak valid'
            ]);

       if($this->form_validation->run() == false){

            $this->load->view('master/header', $data);
            $this->load->view('master/topbar', $data);
            $this->load->view('master/sidebar', $data);
            $this->load->view('users/settings');
            $this->load->view('master/footer' ,$data);
            $this->load->view('master/js');

       }else {

            $name = $this->input->post('name');
            $nik = $this->input->post('nik');
            $email = $this->input->post('email');
            $upload_img = $_FILES['image']['name'];

        if($upload_img){

            $config['allowed_types'] = 'gif|jpeg|jpg|png';           
            $config['max_size'] = '5240';            
            $config['upload_path'] = './assets/img/';
            $this->load->library('upload', $config);          

            if($this->upload->do_upload('image')){

                $old_image = $data['user']['image'];
                

                if($old_image != 'default.png'){

                    unlink(FCPATH . 'assets/img/' . $old_image);

                }
                $img = $this->upload->data();

                $config['image_library']='gd2';
                $config['source_image']='./assets/img/'.$img['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 215;
                $config['height']= 215;
                $config['new_image']= './assets/img/'.$img['file_name'];
                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $new_img = $img['file_name'];       
                $this->db->set('image', $new_img);

            }else{

                echo $this->upload->display_errors();

            }
        }

            $this->updatePassword_model->setProfile($name, $nik, $email);
            $this->session->set_flashdata('message', 'Update profile berhasil');
            redirect('settings/settings');
    }

  }

  public function userProfile()
  {
        $data['title'] = 'My profile';

        $data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();


            $this->load->view('master/header', $data);
            $this->load->view('master/topbar', $data);
            $this->load->view('master/sidebar', $data);
            $this->load->view('users/profile');
            $this->load->view('master/footer' ,$data);
            $this->load->view('master/js');
  }
    
}
