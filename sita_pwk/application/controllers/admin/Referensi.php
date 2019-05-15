<?php
class Referensi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('referensi_model');
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

	function upload(){
		$config['upload_path']="./assets/upload/referensi/"; //file yg diupload akan disimpan
		$config['allowed_types']='doc|docx|pdf'; // tipe file yang boleh di upload

		$this->load->library('upload',$config);
		if($this->upload->do_upload("file")){ //upload file
		$data = array('upload_data' => $this->upload->data()); //ambil nama file yang diupload

		$file= $data['upload_data']['file_name'];
		$id_referensi=$this->input->post('id_referensi');
		$judul_ta=$this->input->post('judul_ta');
		$penulis=$this->input->post('penulis');
    $tahun=$this->input->post('tahun');
    $asal_referensi=$this->input->post('asal_referensi');
    $id_admin=$this->session->userdata('ses_id');

		$result= $this->referensi_model->tambah_referensi($id_referensi,$judul_ta,$penulis,$tahun,$asal_referensi,$file,$id_admin);
		echo json_decode($result);
		}
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
