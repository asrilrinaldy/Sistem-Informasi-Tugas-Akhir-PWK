<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logbookdosen extends CI_Controller {

	public function index()
	{
		$nip = $this->session->userdata('ses_id');
		$this->load->model('mahasiswa_model');
		$isi['jumlah_konsul'] = $this->mahasiswa_model->jumlah_konsul($nip);
		$isi['konten'] = 'dosen/logbookdosen';
		$this->load->view('dosen/template', $isi);
	}

	public function mahasiswa_data(){
		$this->load->model('mahasiswa_model');
		$nip = $this->session->userdata('ses_id');
		$data = $this->mahasiswa_model->get_mhs_nip($nip);
		echo json_encode($data);
	}

	public function detail_logbook(){
		$nip = $this->session->userdata('ses_id');
		$this->load->model('mahasiswa_model');
		$isi['jumlah_konsul'] = $this->mahasiswa_model->jumlah_konsul($nip);
		$this->load->model('mahasiswa_model');
		$mahasiswa = $this->mahasiswa_model->get_mhs_nim($this->input->get('nim'));
		$isi['mahasiswa'] = $mahasiswa->row_array();
		$isi['konten'] = 'dosen/detail_logbook';
		$this->load->view('dosen/template', $isi);
	}

	function logbook_data_mhs()
	{
		$nim = $this->input->get('nim');
		$this->load->model('mahasiswa_model');
		$data = $this->mahasiswa_model->logbook_mahasiswa_by_NIM($nim);
		echo json_encode($data);
	}

}
