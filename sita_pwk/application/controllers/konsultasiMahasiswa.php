<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konsultasiMahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('dosen_model');
		$dosen1 = $this->session->userdata("ses_nippembimbing");
		$dosen2 = $this->session->userdata("ses_nippembimbing2");
		$isi['dosen'] = $this->dosen_model->dosen_pembimbing($dosen1,$dosen2);
		$isi['konten'] = 'mahasiswa/konsultasi';
		$this->load->view('mahasiswa/header', $isi);
	}

	public function konsul_data()
	{
		$this->load->model('mahasiswa_model');
		$nim = $this->session->userdata('ses_id');
		$data=$this->mahasiswa_model->konsul_list($nim);
		echo json_encode($data);
	}

	public function insert_data()
	{
		$this->load->model('mahasiswa_model');
		$config['upload_path']="./assets/upload/"; //path folder file upload
		$config['allowed_types']='doc|docx|pdf'; //type file yang boleh di upload

		$this->load->library('upload',$config); //call library upload
		if($this->upload->do_upload("file_konsul")){ //upload file
		$data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload

		$file= $data['upload_data']['file_name']; //set file name ke variable image
		$nim=$this->session->userdata('ses_id');
		$nip=$this->input->post('nip');
		$tanggal = date("Y-m-d");
		$judul_ta="asdasd";
		$keterangan=$this->input->post('keterangan');

		$result = $this->mahasiswa_model->tambah_konsul($nim,$nip,$tanggal,$judul_ta,$file,$keterangan);
		echo json_decode($result);

		}
	}
}
