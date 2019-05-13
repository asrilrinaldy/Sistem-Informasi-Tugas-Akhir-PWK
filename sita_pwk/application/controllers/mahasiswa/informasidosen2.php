<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiDosen2 extends CI_Controller
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
		$this->load->model('dosen_model');
		$data_dosen = $this->dosen_model->get_dosen($this->input->get('nip'));
		$isi['dosen'] = $data_dosen->row_array();
		$isi['konten'] = 'mahasiswa/informasidosen2';
		$this->load->view('mahasiswa/header', $isi);
	}
	function jadwal_data_mhs()
	{
		$nip = $this->input->get('nip');
		$this->load->model('dosen_model');
		$data = $this->dosen_model->jadwal_list_nip($nip);
		echo json_encode($data);
	}
}
