<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cctv_model extends CI_Model
{

	function getDataCctv()
	{
		$query = $this->db->get('tb_cctv')->result_array();

		return $query;
	}

    function insertDataCctv($data)
    {        
        $this->db->insert('tb_cctv', $data);
        
    }

    function updatedDataCctv($id, $data)
    {
        $this->db->where("id", $id);
        $this->db->update("tb_cctv", $data);
        
    }
   

    function deleteDataCctv($id)
    {
    	$this->db->delete('tb_cctv', ['id' => $id]);        
    }

    
   
}