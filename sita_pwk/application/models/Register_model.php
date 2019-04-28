<?php
class Register_model extends CI_Model
{
  // declare private variable
  private $_NIM;
  private $_Nama;
  private $_Email;
  private $_Password;
  private $_No_telepon;
  private $_Alamat;

  public function setNIM($NIM)
  {
    $this->_NIM = $NIM;
  }
  public function setNama($Nama)
  {
    $this->_Nama = $Nama;
  }
  public function setEmail($Email)
  {
    $this->_Email = $Email;
  }
  public function setNo_telepon($No_telepon)
  {
    $this->_No_telepon = $No_telepon;
  }
  public function setAlamat($Alamat)
  {
    $this->_Alamat = $Alamat;
  }
  public function setPassword($Password)
  {
    $this->_Password = $Password;
  }

  public function createMahasiswa()
  {
    $data = array(
      'NIM'               => $this->_NIM,
      'Nama'              => $this->_Nama,
      'Email'             => $this->_Email,
      'Password'          => $this->_Password,
      'No_telepon'        => $this->_No_telepon,
      'Alamat'            => $this->_Alamat
    );
    $this->db->insert('mahasiswa', $data);
    if (!empty($this->db->insert_id()) && $this->db->insert_id() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
