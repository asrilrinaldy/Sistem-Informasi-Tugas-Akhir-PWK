<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogBookMahasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->model('logbook_mahasiswa_model');
	}

	public function index()
	{
		$isi['konten'] = 'mahasiswa/LogBook';
		$isi['mahasiswa'] = $this->mahasiswa_model->mahasiswa_list();
		$this->load->view('mahasiswa/header', $isi);
	}

	public function get_logbook_mahasiswa()
	{
		$nim = $this->input->post('Id_Log', TRUE);
		$data = $this->mahasiswa_model->get_logbook_mahasiswa_by_Id_Log($id_log)->result();
		echo json_encode($data);
	}

	function logbook_mahasiswa_data()
	{
		$data = $this->mahasiswa_model->logbook_mahasiswa_list_nama();
		echo json_encode($data);
	}

	function save()
	{
		$data = $this->logbook_mahasiswa_model->save_logbook_mahasiswa();
		echo json_encode($data);
	}

	function update()
	{
		$data = $this->logbook_mahasiswa_model->update_logbook_mahasiswa();
		echo json_encode($data);
	}

	function delete()
	{
		$data = $this->logbook_mahasiswa_model->delete_logbook_mahasiswa();
		echo json_encode($data);
	}
}
