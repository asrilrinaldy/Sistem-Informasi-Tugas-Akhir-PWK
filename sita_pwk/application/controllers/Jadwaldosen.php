<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwaldosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'dosen/jadwaldosen';
		$this->load->view('dosen/template', $isi);
	}

	function jadwal_data(){
		$nip = $this->session->userdata('ses_id');
		$this->load->model('dosen_model');
		$data=$this->dosen_model->jadwal_list_nip($nip);
		echo json_encode($data);
	}

	function input_jadwal(){
		$nip = $this->session->userdata('ses_id');
		$this->load->model('dosen_model');
		$data=$this->dosen_model->jadwal_kosong($nip);
		echo json_encode($data);
	}

	function delete_jadwal(){
		$this->load->model('dosen_model');
		$data=$this->dosen_model->delete_jadwal();
		echo json_encode($data);
	}


}
