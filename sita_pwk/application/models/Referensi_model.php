<?php
class Referensi_model extends CI_Model {

  function referensi_list(){
		$hasil=$this->db->get('referensi');
		return $hasil->result();
	}

	function save_referensi(){
		$data = array(
				'Id_Referensi' 	=> $this->input->post('id_referensi'),
				'Judul_TA' 	=> $this->input->post('judul_ta'),
				'Penulis' => $this->input->post('penulis'),
        'Tahun' => $this->input->post('tahun'),
        'Asal_Referensi' => $this->input->post('asal_referensi'),
        'Id_admin' => $this->session->userdata('ses_id')
			);
		$result=$this->db->insert('referensi',$data);
		return $result;
	}

  function tambah_referensi($id,$judul,$penulis,$tahun,$asal,$file,$id_admin){
    $data = array(
      'Id_Referensi' 	=> $id,
      'Judul_TA' 	=> $judul,
      'Penulis' => $penulis,
      'Tahun' => $tahun,
      'Asal_Referensi' => $asal,
      'file' => $file,
      'Id_admin' => $id_admin
    );
    $result = $this->db->insert('referensi',$data);
    return $result;
  }

	function update_referensi(){
    $id_referensi=$this->input->post('id_referensi');
		$judul_ta=$this->input->post('judul_ta');
		$penulis=$this->input->post('penulis');
    $tahun=$this->input->post('tahun');
    $asal_referensi=$this->input->post('asal_referensi');
    $id_admin=$this->input->post('id_admin');

		$this->db->set('Judul_TA', $judul_ta);
		$this->db->set('Penulis', $penulis);
		$this->db->set('Tahun', $tahun);
    $this->db->set('Asal_Referensi', $asal_referensi);
    $this->db->set('Id_admin', $id_admin);
    $this->db->where('Id_Referensi', $id_referensi);
		$result=$this->db->update('referensi');
		return $result;
	}

	function delete_referensi(){
		$id_referensi=$this->input->post('id_referensi');
		$this->db->where('Id_referensi', $id_referensi);
		$result=$this->db->delete('referensi');
		return $result;
	}



}
