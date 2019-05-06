<?php
class Keloladosen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dosen_model');
	}
	function index(){
		$isi['konten'] = 'admin/Dosen/keloladosen';
		$this->load->view('admin/template', $isi);
	}

	function dosen_data(){
		$data=$this->dosen_model->dosen_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->dosen_model->save_dosen();
		echo json_encode($data);
	}

	function update(){
		$data=$this->dosen_model->update_dosen();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->dosen_model->delete_dosen();
		echo json_encode($data);
	}

}
