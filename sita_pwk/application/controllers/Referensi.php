<?php
class Referensi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('referensi_model');
	}
	function index(){
		$isi['konten'] = 'admin/judulTA';
		$this->load->view('admin/template', $isi);
	}

	function lihat_referensi(){
		$this->load->view('lihatreferensi_view');
	}

	function referensi_data(){
		$data=$this->referensi_model->referensi_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->referensi_model->save_referensi();
		echo json_encode($data);
	}

	function update(){
		$data=$this->referensi_model->update_referensi();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->referensi_model->delete_referensi();
		echo json_encode($data);
	}

}
