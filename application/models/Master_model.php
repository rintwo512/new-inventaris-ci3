<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_model extends CI_Model
{
    function exportAssets()
    {        
        $this->db->select("*");
        $this->db->from("tb_daftar_barang");        
        $this->db->order_by('id', "ASC");
        return $this->db->get();
    }   

    function liveSearchAc($query)
    {
        $this->db->select("*");
        $this->db->from("tb_ac");
        if($query != '')
        {
            $this->db->like('label', $query);
            $this->db->or_like('wing', $query);
            $this->db->or_like('lantai', $query);
            $this->db->or_like('ruangan', $query);
            $this->db->or_like('merk', $query);
            $this->db->or_like('jenis', $query);
            $this->db->or_like('model', $query);
            $this->db->or_like('status', $query);
            $this->db->or_like('kapasitas', $query);
        }
        $this->db->order_by('id', "ASC");
        return $this->db->get();
    }   

    function exportDataApart()
    {
    	$this->db->select("*");
        $this->db->from("tb_apart");        
        $this->db->order_by('id', "ASC");
        return $this->db->get();
    }

    function deleteMultipleAc($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_ac');
    }

    function deleteMultipleListBarang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_daftar_barang');
    }

    function deleteMultipleApar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_apart');
    }

    function liveSearchMaintAc($query)
    {
        $this->db->select("*");
        $this->db->from("tb_charts");
        if($query != '')
        {
            $this->db->like('tahun', $query);
            $this->db->or_like('bulan', $query);
            $this->db->or_like('unit', $query);           
        }
        $this->db->order_by('id', "DESC");
        return $this->db->get();
    }

    function deleteMultipleMaintAc($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_charts');
    }

    function exportDataCctv()
    {
        $this->db->select("*");
        $this->db->from("tb_cctv");        
        $this->db->order_by('id', "ASC");
        return $this->db->get();
    }

    function deleteMultipleCctv($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_cctv');
    }
    function exportDataElektronik()
    {
        $this->db->select("*");
        $this->db->from("tb_elektronik");        
        $this->db->order_by('id', "ASC");
        return $this->db->get();
    }

    function deleteMultipleElektronik($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_elektronik');
    }
    
}