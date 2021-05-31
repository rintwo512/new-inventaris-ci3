<?php
defined('BASEPATH') or exit('No direct script access allowed');

class updatePassword_model extends CI_Model
{
    function setPassword($password_hash)
    {
    	$this->db->set('password', $password_hash);
        $this->db->where('nik', $this->session->userdata('nik'));
        $this->db->update('users');
    }

    function setProfile($name, $nik, $email)
    {
        $this->db->set('name', $name);
        $this->db->set('email', $email);
        $this->db->where('nik', $nik);
        $this->db->update('users');
    }
}