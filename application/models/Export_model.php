<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Export_model extends CI_Model
{
    function exportAssets()
    {        
          return $this->db->get('tb_daftar_barang');
    }

    function exportDataAc()
    {
        return $this->db->get('tb_ac');
    }

    function exportDataApart()
    {
    	return $this->db->get('tb_apart');
    }
    
}