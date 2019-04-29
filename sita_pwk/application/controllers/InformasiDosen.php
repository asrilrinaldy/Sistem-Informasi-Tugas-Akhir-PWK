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
		$this->load->model('dosen_model');
		$data = $this->dosen_model->dosen_pembimbing();
		echo json_encode($data);
	}
}
