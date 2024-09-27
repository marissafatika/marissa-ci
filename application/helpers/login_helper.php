<?php
function is_logged_in()
{
    #jika belum login maka tidak akan bisa masuk ke halaman admin
    $ci = get_instance();
    #jika tidak ditemukan session yang sesuai maka ditolak
    if(!$ci->session->userdata('username')){
        redirect('login');
    }
}