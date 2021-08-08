<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Allusers_model extends CI_Model
{

	function getUsers()
	{
		$get = $this->db->get('users')->result();

		return $get;
	}

	function insertUsers($data)
    {        
        $this->db->insert('users', $data);
    }

    function deleteUsers($id)
    {
        $this->db->delete('users', ['id' => $id]);
    }

    function updateDataUser($id,$data)
    {
    	$this->db->where('id', $id);
    	$this->db->update('users', $data);
    }

    
}