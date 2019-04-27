<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformasiDosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa/informasidosen';
<<<<<<< HEAD
		$this->load->view('mahasiswa/template', $isi);
=======
		$this->load->view('mahasiswa/header', $isi);
>>>>>>> master
	}
}
