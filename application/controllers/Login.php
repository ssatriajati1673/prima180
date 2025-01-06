<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }

    public function ceklogin()
    {
        if(isset($_POST['login'])){
            $user = $this->input->post('user', true);
            $pass = $this->input->post('pass', true);
            $cek = $this->Login_model->proseslogin($user, $pass);
            $hasil = isset($cek);
            if($hasil > 0){
                session_start();
                $try_login = $this->db->get_where('table_user', array('username' => $user,
                'password' => $pass))->row();
                // echo $try_login->level;
                $_SESSION['username'] = $try_login->username;
                $_SESSION['level'] = $try_login->role;
                $_SESSION['nama_lengkap'] = $try_login->nama;
                $_SESSION['id_pegawai'] = $try_login->id;
                $_SESSION['nama_pendek'] = $try_login->nama_pendek;
                redirect(base_url('dashboard'));
            } else{
                redirect(base_url());
            }
        }
    }
}