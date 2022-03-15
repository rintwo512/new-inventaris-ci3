<?php

function check_session()
{	
	
    $dc = get_instance();    
    if (!$dc->session->userdata('nik')) {	        
        redirect('auth');
    }
}
function user_access()
{
    $dc = get_instance();
    if ($dc->session->userdata('role') != "admin" && $dc->session->userdata('role') != "super admin") {
        redirect('blocked');
    }
}

function myTime()
{
    date_default_timezone_set("Asia/Jakarta");
}
