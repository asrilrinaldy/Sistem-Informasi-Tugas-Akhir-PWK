<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiDosen extends CI_Controller
{

	public function index()
	{
		$isi['konten'] = 'mahasiswa/informasidosen';

		$this->load->view('mahasiswa/header', $isi);
	}
	public function data_dosen()
	{
		$nip1 = $this->session->userdata('ses_nippembimbing');
		$nip2 = $this->session->userdata('ses_nippembimbing2');

		$this->load->model('dosen_model');
		$data = $this->dosen_model->dosen_pembimbing($nip1,$nip2);
		echo json_encode($data);
	}
}
