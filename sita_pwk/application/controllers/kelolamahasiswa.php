<?php
class Kelolamahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}
	function index(){
		$isi['konten'] = 'admin/Mahasiswa/kelolamahasiswa';
		$this->load->view('admin/template', $isi);
	}

	function mahasiswa_data(){
		$data=$this->mahasiswa_model->mahasiswa_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->mahasiswa_model->save_mahasiswa();
		echo json_encode($data);
	}

	function update(){
		$data=$this->mahasiswa_model->update_mahasiswa();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->mahasiswa_model->delete_mahasiswa();
		echo json_encode($data);
	}

}
