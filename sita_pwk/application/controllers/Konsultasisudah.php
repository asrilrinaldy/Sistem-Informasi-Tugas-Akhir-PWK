<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasisudah extends CI_Controller {

	public function index()
	{
		$nip = $this->session->userdata('ses_id');
		$this->load->model('mahasiswa_model');
		$isi['jumlah_konsul'] = $this->mahasiswa_model->jumlah_konsul($nip);
		$isi['konten'] = 'dosen/konsultasi/konsultasisudah';
		$this->load->view('dosen/template', $isi);
	}

	public function konsul_data(){
		$this->load->model('mahasiswa_model');
		$nip = $this->session->userdata('ses_id');
		$data=$this->mahasiswa_model->get_konsul_nip_sudah($nip);
		echo json_encode($data);
	}
}
