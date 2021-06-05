<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apart_model extends CI_Model
{

    function getApart()
    {
        return $this->db->get('tb_apart')->result_array();
    }

    function insertApart($data)
    {
        $this->db->insert('tb_apart', $data);
    }

     function updateApart($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_apart', $data);
    }

    function delete($id)
    {
        $this->db->delete('tb_apart',['id' => $id]);
    }
        
}