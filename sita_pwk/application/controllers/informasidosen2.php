<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiDosen2 extends CI_Controller
{

	public function index()
	{
		$isi['konten'] = 'mahasiswa/informasidosen2';
		$this->load->view('mahasiswa/header', $isi);
	}
}
