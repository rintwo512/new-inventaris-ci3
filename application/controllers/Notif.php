<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notif extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();       
        check_session();
        
    }

	

	public function get_ajax()
    {
        $tot = $this->db->get_where('users', ['user_login' => 'online'])->num_rows();
        $result['tot'] = $tot;

        echo json_encode($result);
    }
}
