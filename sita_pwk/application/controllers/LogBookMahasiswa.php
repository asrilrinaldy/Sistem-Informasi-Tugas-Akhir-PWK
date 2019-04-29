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

	public function getmahasiswa()
	{
		$nim = $this->input->post('nim', TRUE);
		$data = $this->jadwalpenting_model->get_mhs_by_nim($nim)->result();
		echo json_encode($data);
	}

	function jadwal_data()
	{
		$data = $this->jadwalpenting_model->jadwal_list_nama();
		echo json_encode($data);
	}

	function save()
	{
		$data = $this->jadwalpenting_model->save_jadwalpenting();
		echo json_encode($data);
	}

	function update()
	{
		$data = $this->jadwalpenting_model->update_jadwalpenting();
		echo json_encode($data);
	}

	function delete()
	{
		$data = $this->jadwalpenting_model->delete_jadwalpenting();
		echo json_encode($data);
	}
}
