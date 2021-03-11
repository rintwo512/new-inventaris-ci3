<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Airco_model extends CI_Model
{

    // function joinTab()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_ac');
    //     $this->db->join('tb_ac_details','tb_ac_details.id = tb_ac.id');      
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

	function getAc()
	{
		$get = $this->db->get('tb_ac')->result_array();

		return $get;
	}

    function insertAc($data)
    {        
        $this->db->insert('tb_ac', $data);
    }

    function deleteData($id)
    {
    	$this->db->delete('tb_ac', ['id' => $id]);
    }

    function updateData($id, $data)
    {
    	$this->db->where('id',$id);
    $this->db->update('tb_ac', $data);
    return TRUE;
    }
}