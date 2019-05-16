<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanJudul extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa/PengajuanJudul';
		$this->load->view('mahasiswa/header', $isi);
	}

	public function set_judulta(){
		$this->load->model('mahasiswa_model');
		$data = $this->mahasiswa_model->set_judulta();
		echo json_encode($data);
	}

}
