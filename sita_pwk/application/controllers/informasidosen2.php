<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiDosen2 extends CI_Controller
{

	public function index()
	{
		$this->load->model('dosen_model');
		$data_dosen = $this->dosen_model->get_dosen($this->input->get('nip'));
		$isi['dosen'] = $data_dosen->row_array();
		$isi['konten'] = 'mahasiswa/informasidosen2';
		$this->load->view('mahasiswa/header', $isi);
	}
}
