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
    if ($dc->session->userdata('role') != "admin") {
        redirect('blocked');
    }
}
