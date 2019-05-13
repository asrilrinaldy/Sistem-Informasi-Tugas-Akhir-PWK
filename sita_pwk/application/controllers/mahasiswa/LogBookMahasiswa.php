<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogBookMahasiswa extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->model('dosen_model');
		$this->load->model('logbook_mahasiswa_model');
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
		$nip1 = $this->session->userdata('ses_nippembimbing');
		$nip2 = $this->session->userdata('ses_nippembimbing2');
		$isi['konten'] = 'mahasiswa/LogBook';
		$isi['dosen'] = $this->dosen_model->dosen_pembimbing($nip1, $nip2);
		$this->load->view('mahasiswa/header', $isi);
	}

	function logbook_mahasiswa_data()
	{
		$data = $this->mahasiswa_model->logbook_mahasiswa_list_nama();
		echo json_encode($data);
	}

	function save()
	{
		$data = $this->mahasiswa_model->save_logbook_mahasiswa();
		echo json_encode($data);
	}

	function update()
	{
		$data = $this->mahasiswa_model->update_logbook_mahasiswa();
		echo json_encode($data);
	}

	function delete()
	{
		$data = $this->mahasiswa_model->delete_logbook_mahasiswa();
		echo json_encode($data);
	}
}
