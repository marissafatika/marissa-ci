<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alamat_model extends CI_Model {

	public function getAlamat()
	{
        
		return $this->db->get('alamat')->result_array();
		
	}
    #menambah alamat
    public function tambahAlamat()
	{
		$data =
		[
			"alamat" => $this->input->post('alamat' ,true),
			"kode_pos" => $this->input->post('kode_pos' ,true)
		];
		$this->db->insert('alamat',$data);
	}
}