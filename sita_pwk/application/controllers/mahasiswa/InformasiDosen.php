<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiDosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
		$isi['konten'] = 'mahasiswa/informasidosen';

		$this->load->view('mahasiswa/header', $isi);
	}
	public function data_dosen()
	{
		$nip1 = $this->session->userdata('ses_nippembimbing'); //Mengambil nip dosen pembimbing 1
		$nip2 = $this->session->userdata('ses_nippembimbing2'); //Mengambil nip dosen pembimbing 2

		$this->load->model('dosen_model');
		$data = $this->dosen_model->dosen_pembimbing($nip1, $nip2);//Mengambil data dosen pembimbing 1 & 2
		echo json_encode($data);
	}
}
