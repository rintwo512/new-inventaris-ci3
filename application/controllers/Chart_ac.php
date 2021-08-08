<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_ac extends CI_Controller {


	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Chartac_model');
        check_session();
        myTime();
    }

    public function index()
    {
    	$data['title'] = 'Data maintenance';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
		
		$data['get_data'] = $this->Chartac_model->getData();
		
		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);		
		$this->load->view('master/sidebar');
		$this->load->view('chart_ac/index',$data);
		$this->load->view('master/footer' ,$data);
		$this->load->view('master/js');
    }

    public function storeDataGrafik()
    {
    	$data['title'] = 'Data maintenance';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
		
		$data['get_data'] = $this->Chartac_model->getData();

		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');
		
		if($this->form_validation->run() == false){

			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);		
			$this->load->view('master/sidebar');
			$this->load->view('chart_ac/index');
			$this->load->view('master/footer',$data );
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Tambah data gagal');
			redirect('chart_ac');
		}else{
			

			$data = 
			[
				"tahun" => $this->input->post('tahun'),
				"bulan" => $this->input->post('bulan'),
				"unit" => $this->input->post('unit')
			];


			$this->Chartac_model->storeInDb($data);
			$this->session->set_flashdata('message', 'Tambah data berhasil');
	        redirect('chart_ac');

		}

    }


    public function updateDataGrafik()
    {
    	$data['title'] = 'Data maintenance';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
		
		$data['get_data'] = $this->Chartac_model->getData();

		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');
		
		if($this->form_validation->run() == false){

			$this->load->view('master/header', $data);
			$this->load->view('master/topbar', $data);		
			$this->load->view('master/sidebar');
			$this->load->view('chart_ac/index');
			$this->load->view('master/footer',$data );
			$this->load->view('master/js');
			$this->session->set_flashdata('message_err', 'Update data gagal');
			redirect('chart_ac');
		}else{

			$id = $this->input->post('id');

			$data = 
			[
				"tahun" => $this->input->post('tahun'),
				"bulan" => $this->input->post('bulan'),
				"unit" => $this->input->post('unit')
			];


			$this->Chartac_model->updateInDb($data, $id);
			$this->session->set_flashdata('message', 'Update data berhasil');
	        redirect('chart_ac');

		}

		
    }

    public function destroy($id)
    {
    	$this->Chartac_model->deleteDataGrafik($id);        
        redirect('chart_ac');
    }


	public function grafik()
	{
		
		$data['title'] = 'Grafik';

		$data['user'] = $this->db->get_where('users', ['nik' => $this->session->userdata('nik')])->row_array();
		$data['year_list'] = $this->Chartac_model->get_year();
		// $data['get_data'] = $this->Chartac_model->getData();
		
		$this->load->view('master/header', $data);
		$this->load->view('master/topbar', $data);		
		$this->load->view('master/sidebar');
		$this->load->view('chart_ac/chart');
		$this->load->view('master/footer',$data );
		$this->load->view('master/js');
	}


	 public function ambil_data_chart()
    {
        if ($this->input->post('tahun')) {
            $chart_data = $this->Chartac_model->get_chart_data($this->input->post('tahun'));
            foreach ($chart_data->result_array() as $row) {
                $output[] = array(
                    'bulan' => $row["bulan"],
                    'unit' => floatval($row["unit"])
                );
            }
            echo json_encode($output);
        }
    }
}
