<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Elektronik_model extends CI_Model
{
    function getEl()
    {
        return $this->db->get('tb_elektronik')->result_array();
    }

	function insertEl($data)
    {
        $this->db->insert('tb_elektronik', $data);
    }

    function updateEl($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_elektronik', $data);
    }
    function deleteEl($id)
    {
        $this->db->where(['id' => $id]);
        $this->db->delete('tb_elektronik');
    }
    
}