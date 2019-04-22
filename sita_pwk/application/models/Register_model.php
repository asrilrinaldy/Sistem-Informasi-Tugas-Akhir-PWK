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
  private $_Tempat_lahir;
  private $_Tanggal_lahir;
  private $_Status;
  private $_Verification_code;

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
  public function setTempat_lahir($Tempat_lahir)
  {
    $this->_Tempat_lahir = $Tempat_lahir;
  }
  public function setTanggal_lahir($Tanggal_lahir)
  {
    $this->_Tanggal_lahir = $Tanggal_lahir;
  }
  public function setStatus($Status)
  {
    $this->_Status = $Status;
  }
  public function setVerification_code($Verification_code)
  {
    $this->_Verification_code = $Verification_code;
  }

  public function createMahasiswa()
  {
    $data = array(
      'NIM'               => $this->_NIM,
      'Nama'              => $this->_Nama,
      'Email'             => $this->_Email,
      'Password'          => $this->_Password,
      'No_telepon'        => $this->_No_telepon,
      'Alamat'            => $this->_Alamat,
      'Tempat_lahir'      => $this->_Tempat_lahir,
      'Tanggal_lahir'     => $this->_Tanggal_lahir,
      'Status'            => $this->_Status,
      'Verification_code' => $this->_Verification_code
    );
    $this->db->insert('mahasiswa', $data);
    if (!empty($this->db->insert_id()) && $this->db->insert_id() > 0) {
      return true;
    } else {
      return false;
    }
  }

  //create new user
  public function create()
  {
    $hash = $this->hash($this->_Password);
    $data = array(
      'Nama'              => $this->_Nama,
      'NIM'               => $this->NIM,
      'Email'             => $this->_Email,
      'Password'          => $hash,
      'No_telepon'        => $this->_No_telepon,
      'Alamat'            => $this->_Alamat,
      'Tempat_lahir'      => $this->_Tempat_lahir,
      'Tanggal_lahir'     => $this->_Tanggal_lahir,
      'Verification_code' => $this->_Verification_code,
      'Status'             => $this->_Status
    );
    $this->db->insert('mahasiswa', $data);
    if (!empty($this->db->insert_id()) && $this->db->insert_id() > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  // login method and password verify
  function login()
  {
    $this->db->select('NIM, Nama, Email, Password');
    $this->db->from('mahasiswa');
    $this->db->where('Email', $this->_Nama);
    $this->db->where('Verification_code', 1);
    $this->db->where('Status', 1);
    //{OR}
    $this->db->or_where('Nama', $this->_Nama);
    $this->db->where('Verification_code', 1);
    $this->db->where('status', 1);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      $result = $query->result();
      foreach ($result as $row) {
        if ($this->verifyHash($this->_Password, $row->Password) == TRUE) {
          return $result;
        } else {
          return FALSE;
        }
      }
    } else {
      return FALSE;
    }
  }

  //update user
  public function update()
  {
    $data = array(
      'Nama'  => $this->_Nama,
      'No_telepon' => $this->_No_telepon,
      'Alamat' => $this->_Alamat,
      'Tanggal_lahir' => $this->_Tanggal_lahir,
    );
    $this->db->where('NIM', $this->_NIM);
    $msg = $this->db->update('mahasiswa', $data);
    if ($msg == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  //change password
  public function changePassword()
  {
    $hash = $this->hash($this->_Password);
    $data = array(
      'Password' => $hash,
    );
    $this->db->where('NIM', $this->_NIM);
    $msg = $this->db->update('mahasiswa', $data);
    if ($msg == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  // get User Detail
  public function getUserDetails()
  {
    $this->db->select(array('m.NIM', 'm.Nama', 'm.Email', 'm.No_telepon', 'm.Alamat', 'm.Tanggal_lahir'));
    $this->db->from('mahasiswa as m');
    $this->db->where('m.NIM', $this->_NIM);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {
      return FALSE;
    }
  }

  // update Forgot Password
  public function updateForgotPassword()
  {
    $hash = $this->hash($this->_Password);
    $data = array(
      'Password' => $hash,
    );
    $this->db->where('Email', $this->_Email);
    $msg = $this->db->update('mahasiswa', $data);
    if ($msg > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  // get Email Address
  public function activate()
  {
    $data = array(
      'Status' => 1,
      'Verification_code' => 1,
    );
    $this->db->where('Verification_code', $this->_Verification_code);
    $msg = $this->db->update('mahasiswa', $data);
    if ($msg == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  // password hash
  public function hash($Password)
  {
    $hash = password_hash($Password, PASSWORD_DEFAULT);
    return $hash;
  }

  // password verify
  public function verifyHash($Password, $Vpassword)
  {
    if (password_verify($Password, $Vpassword)) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
