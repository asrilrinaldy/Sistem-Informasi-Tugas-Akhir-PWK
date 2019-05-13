<?php
class Keloladosen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dosen_model');
		//Start Untuk mengecek kalau yg akses adalah admin
		if($this->session->userdata('akses') != "Admin") {
			if($this->session->userdata('akses') == "Dosen") {// Jika Dosen berusaha akses maka akan di redirect ke halaman dosen
				$url = base_url('dosen/berandadosen');
				redirect($url);
			}else{// Jika Mahasiswa berusaha akses maka akan di redirect ke halaman mahasiswa
				$url = base_url('mahasiswa/berandamahasiswa');
				redirect($url);
			}
		}
		//END Untuk mengecek kalau yg akses adalahadmin
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
