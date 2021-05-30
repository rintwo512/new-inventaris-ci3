<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stockbarang_model extends CI_Model
{
    function getBarang()
    {
        $query = $this->db->get('tb_daftar_barang')->result_array();
        return $query;
    }
	
    function insertBarang($data)
    {
        $this->db->insert('tb_daftar_barang', $data);
    }


    function updateBarang($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_daftar_barang', $data);
    }

    function delBarang($id)
    {
        $this->db->delete('tb_daftar_barang',['id' => $id]);
    }
    
}