<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chartac_model extends CI_Model
{

    function getData()
    {
        return $this->db->get('tb_charts')->result_array();
    }

    function storeInDb($data)
    {
        $this->db->insert('tb_charts', $data);
    }

    function updateInDb($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_charts', $data);
    }

    function deleteDataGrafik($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_charts');
    }

     function get_year()
    {
        $this->db->select('tahun');
        $this->db->from('tb_charts');
        $this->db->group_by('tahun');
        $this->db->order_by('tahun', 'DESC');
        return $this->db->get();
    }

    function get_chart_data($tahun)
    {
        $this->db->where('tahun', $tahun);
        $this->db->order_by('tahun', 'ASC');
        return $this->db->get('tb_charts');
    }
   
}