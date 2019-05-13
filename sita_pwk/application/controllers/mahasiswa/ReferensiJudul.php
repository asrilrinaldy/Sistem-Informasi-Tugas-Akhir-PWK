<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReferensiJudul extends CI_Controller {

	function __construct()
	{
		parent::__construct();
				$this->load->model('referensi_model');
		if($this->session->userdata('akses') != "Mahasiswa") {
			if($this->session->userdata('akses') == "Dosen") {
				$url = base_url('dosen/berandadosen');
				redirect($url);
			}else{
				$url = base_url('admin/berandaadmin');
				redirect($url);
			}
		}
	}

	public function index()
	{
		$isi['konten'] = 'mahasiswa/ReferensiJudul';

		$this->load->view('mahasiswa/header', $isi);

	}

	function referensi_data(){
		$data=$this->referensi_model->referensi_list();
		echo json_encode($data);
	}
}
