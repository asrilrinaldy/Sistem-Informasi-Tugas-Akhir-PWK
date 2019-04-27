<?php
class Jadwalpenting_model extends CI_Model {

  function jadwal_list(){
		$hasil=$this->db->get('jadwal_penting');
		return $hasil->result();
	}

  function jadwal_list_nama(){
    $query = $this->db->query("SELECT mahasiswa.Nama, jadwal_penting.Id_Jadwal, jadwal_penting.NIM, jadwal_penting.Ruangan, jadwal_penting.Waktu, jadwal_penting.Tanggal FROM mahasiswa INNER JOIN jadwal_penting ON mahasiswa.NIM=jadwal_penting.NIM");
    return $query->result();
  }

  public function get_mhs_by_nim($nim)
  {
    $query = $this->db->get_where('mahasiswa', array('NIM' => $nim));
    return $query;
  }


	function save_jadwalpenting(){
		$data = array(
				'NIM' 	=> $this->input->post('nim'),
        'Ruangan' => $this->input->post('ruangan'),
        'Waktu' => $this->input->post('waktu'),
        'Tanggal' => $this->input->post('tanggal'),
			);
		$result=$this->db->insert('jadwal_penting',$data);
		return $result;
	}

	function update_jadwalpenting(){
    $id_jadwal=$this->input->post('id_jadwal');
		$ruangan=$this->input->post('ruangan');
    $waktu=$this->input->post('waktu');
    $tanggal=$this->input->post('tanggal');

		$this->db->set('Ruangan', $ruangan);
		$this->db->set('Waktu', $waktu);
    $this->db->set('Tanggal', $tanggal);
    $this->db->where('Id_Jadwal', $id_jadwal);
		$result=$this->db->update('jadwal_penting');
		return $result;
	}

	function delete_jadwalpenting(){
		$id_jadwal=$this->input->post('id_jadwal');
		$this->db->where('Id_Jadwal', $id_jadwal);
		$result=$this->db->delete('jadwal_penting');
		return $result;
	}



}
