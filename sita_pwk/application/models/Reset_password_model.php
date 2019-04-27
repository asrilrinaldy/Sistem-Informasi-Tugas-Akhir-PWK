<?php
class Reset_password_model extends CI_Model
{
    public function get_member_by_username($Email)
    {
        return $this->db->get_where('mahasiswa', array('Email' => $Email, 'activation' => '1'))->row();
    }

    public function update_reset_key($Email, $reset_key)
    {
        $this->db->where('Email', $Email);
        $data = array('Reset_password' => $reset_key);
        $this->db->update('mahasiswa', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function reset_password($reset_key, $Password)
    {
        $this->db->where('Reset_password', $reset_key);
        $data = array('Password' => $Password);
        $this->db->update('mahasiswa', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }


    public function check_reset_key($reset_key)
    {
        $this->db->where('Reset_password', $reset_key);
        $this->db->from('mahasiswa');
        return $this->db->count_all_results();
    }
}
