<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reset_password_user extends CI_Controller
{

    public function index()
    {

        $this->load->view('welcome_message');
    }

    public function admin()
    {
        $this->load->view('admin');
    }

    public function reset_password_email()
    {
        $this->load->view('reset_password_email');
    }

    public function email_reset_password_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email|trim');
        if ($this->form_validation->run()) {

            $Email = $this->input->post('Email');
            $reset_key =  random_string('alnum', 50);

            $this->load->model('Reset_password_model');
            if ($this->Reset_password_model->update_reset_key($Email, $reset_key)) {

                $this->load->library('email');
                $config = array();
                $config['charset'] = 'utf-8';
                $config['useragent'] = 'Codeigniter';
                $config['protocol'] = "smtp";
                $config['mailtype'] = "html";
                $config['smtp_host'] = "ssl://smtp.gmail.com"; //pengaturan smtp
                $config['smtp_port'] = "465";
                $config['smtp_timeout'] = "5";
                $config['smtp_user'] = "xxx@gmail.com"; // isi dengan email kamu
                $config['smtp_pass'] = "xxx"; // isi dengan password kamu
                $config['crlf'] = "\r\n";
                $config['newline'] = "\r\n";
                $config['wordwrap'] = TRUE;
                //memanggil library email dan set konfigurasi untuk pengiriman email

                $this->email->initialize($config);
                //konfigurasi pengiriman
                $this->email->from($config['smtp_user']);
                $this->email->to($this->input->post('Email'));
                $this->email->subject("Reset your password");

                $message = "<p>Anda melakukan permintaan reset password</p>";
                $message .= "<a href='" . site_url('reset_password_user/reset_password/' . $reset_key) . "'>klik reset password</a>";
                $this->email->message($message);

                if ($this->email->send()) {
                    echo "silahkan cek email <b>" . $this->input->post('Email') . '</b> untuk melakukan reset password';
                } else {
                    echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
                }

                echo "<br><br><a href='" . site_url("member-login") . "'>Kembali ke Menu Login</a>";
            } else {
                die("Email yang anda masukan belum terdaftar");
            }
        } else {
            $this->load->view('reset_password_email');
        }
    }

    public function reset_password()
    {
        $reset_key = $this->uri->segment(3);

        if (!$reset_key) {
            die('Jangan Dihapus');
        }

        if ($this->Reset_password->check_reset_key($reset_key) == 1) {
            $this->load->view('reset_password');
        } else {
            die("reset key salah");
        }
    }

    public function reset_password_validation()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[retype_password]');
        $this->form_validation->set_rules('retype_password', 'Retype Password', 'required|min_length[6]|matches[password]');

        if ($this->form_validation->run()) {

            $reset_key = $this->input->post('reset_key');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            if ($this->reset_m->reset_password($reset_key, $Password)) {
                echo "Password anda telah berhasil diubah";
            } else {
                echo "error";
            }
        } else {
            $this->load->view('reset_password');
        }
    }
}
