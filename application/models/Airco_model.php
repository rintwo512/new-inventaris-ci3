<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Airco_model extends CI_Model
{

    function joinTab()
    {
        // $this->db->select('*');
        // $this->db->from('tb_ac');
        // $this->db->join('tb_details','tb_details.detail_id = tb_ac.ac_id');    
        // $query = $this->db->get();
        // return $query->result_array();
    }    

	function getAc()
	{
		$query = $this->db->get('tb_ac')->result();

		return $query;
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
        
    }
   
}