<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReferensiJudul extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa/ReferensiJudul';

		$this->load->view('mahasiswa/header', $isi);

	}
}
