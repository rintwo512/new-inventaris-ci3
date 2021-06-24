<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();      
        $this->load->model('Stockbarang_model'); 
        $this->load->model('Airco_model');
        $this->load->model('Master_model');  
        check_session();
        
    }

    public function index()
    {	
    	$data['title'] = 'Master data';		

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();

		$data['listBarang'] = $this->Master_model->exportAssets();
		
		$data['apart'] = $this->Master_model->exportDataApart();

        $data['cctv'] = $this->Master_model->exportDataCctv();
		

		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);
		$this->load->view('master/sidebar');
		$this->load->view('export/index');
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
    }


    public function search_Ac()
    {
    	$output = '';
    	$query = '';
    	if($this->input->post('query'))
    	{
    		$query = $this->input->post('query');
    	}
    	$data = $this->Master_model->liveSearchAc($query);
    	$output .= '    		
                <table class="table">
                    <thead class="bgColor">
                        <tr>
                            <th>
                                <button type="button" id="delete_all" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </th>
                            <th>Label</th>
                            <th>Wing</th>
                            <th>Lantai</th>             
                            <th>Ruangan</th>             
                            <th>Merk</th>             
                            <th>Model</th>             
                            <th>Jenis</th>             
                            <th>Tgl Pemasangan</th>             
                            <th>Refrigerant</th>             
                            <th>Kapasitas</th>             
                            <th>Product</th>           
                            <th>Kompresor</th>           
                            <th>Status</th>             
                        </tr>
                    </thead>
    	';
    	if($data->num_rows() > 0)
    	{
    		foreach($data->result() as $ac)
    		{
    			$output .= '
    			<tbody>
    				<tr class="hover-items">
                        <td>
                            <input type="checkbox" class="delete_checkbox" value="'.$ac->id.'"/>
                        </td>
                        <td>'. $ac->label .'</td>
                        <td>'. $ac->wing .'</td>
                        <td>'. $ac->lantai .'</td>
                        <td>'. $ac->ruangan .'</td>
                        <td>'. $ac->merk .'</td>
                        <td>'. $ac->model .'</td>
                        <td>'. $ac->jenis .'</td>
                        <td>'. $ac->tgl_pemasangan .'</td>
                        <td>'. $ac->refrigerant .'</td>
                        <td>'. $ac->kapasitas .'</td>
                        <td>'. $ac->product .'</td>                     
                        <td>'. $ac->status_kompresor .'</td>
                        <td>'. $ac->status .'</td>
                    </tr>
                   </tbody>
    			';
    		}
    	}
    	else
    	{
    		$output .= '
    			<tbody>
    				<tr>
	                    <td colspan="20" style="color:red;font-size:15px;padding-left:500px">Data tidak ditemukan</td>
		            </tr>
	            </tbody>
    		';
    	}
    	$output .= '</table>';    	
    	echo $output;
    }


    public function deleteAllDataAc()
    {
    	if($this->input->post('checkbox_value'))
    	{
    		$id = $this->input->post('checkbox_value');
    		for($count = 0; $count < count($id); $count++)
    		{
    			$this->Master_model->deleteMultipleAc($id[$count]);
    		}
    	}
    }

    public function deleteAllDataListBarang()
    {
        if($this->input->post('checkbox_value'))
        {
            $id = $this->input->post('checkbox_value');
            for($count = 0; $count < count($id); $count++)
            {
                $this->Master_model->deleteMultipleListBarang($id[$count]);
            }
        }
    }


    public function deleteAllDataApar()
    {
        if($this->input->post('checkbox_value'))
        {
            $id = $this->input->post('checkbox_value');
            for($count = 0; $count < count($id); $count++)
            {
                $this->Master_model->deleteMultipleApar($id[$count]);
            }
        }
    }


    public function search_maint()
    {
        $output = '';
        $query = '';
        if($this->input->post('query'))
        {
            $query = $this->input->post('query');
        }
        $data = $this->Master_model->liveSearchMaintAc($query);
        $output .= '            
                <table class="table">
                    <thead class="bgColor">
                        <tr>
                            <th>
                                <button type="button" id="delete_all_maint" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Jumlah Unit</th>
                        </tr>
                    </thead>
        ';
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $maint)
            {
                $output .= '
                <tbody>
                    <tr class="hover-items">
                        <td>
                            <input type="checkbox" class="delete_checkbox_maint" value="'.$maint->id.'"/>
                        </td>
                        <td>'. $maint->tahun .'</td>
                        <td>'. $maint->bulan .'</td>
                        <td>'. $maint->unit .'</td>                        
                    </tr>
                   </tbody>
                ';
            }
        }
        else
        {
            $output .= '
                <tbody>
                    <tr>
                        <td colspan="20" style="color:red;font-size:15px;padding-left:500px">Data tidak ditemukan</td>
                    </tr>
                </tbody>
            ';
        }
        $output .= '</table>';      
        echo $output;
    }

    public function deleteAllDataMaintAc()
    {
        if($this->input->post('checkbox_value'))
        {
            $id = $this->input->post('checkbox_value');
            for($count = 0; $count < count($id); $count++)
            {
                $this->Master_model->deleteMultipleMaintAc($id[$count]);
            }
        }
    }


    public function deleteAllDataCctv()
    {
        if($this->input->post('checkbox_value'))
        {
            $id = $this->input->post('checkbox_value');
            for($count = 0; $count < count($id); $count++)
            {
                $this->Master_model->deleteMultipleCctv($id[$count]);
            }
        }
    }

	
}
