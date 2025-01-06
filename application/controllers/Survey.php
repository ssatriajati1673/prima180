<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Survey_model');
        $this->load->helper('url');
    }

    // Menampilkan halaman utama dengan daftar pegawai
    public function index() {
        $data['title'] = 'Survei';
        
        // Ambil semua pegawai
        $data['pegawai_list'] = $this->Survey_model->get_all_pegawai();
        
        // Load view
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('survey/survey_main', $data);
        $this->load->view('templates/footer');
    }

    // Menampilkan halaman penilaian untuk pegawai tertentu
    public function penilaian($pegawai_id) {
        $data['title'] = 'Penilaian Pegawai';
        
        // Ambil data pegawai yang dinilai berdasarkan ID
        $data['pegawai'] = $this->Survey_model->get_pegawai_by_id($pegawai_id);

        // Pass pegawai_id ke view
        $data['pegawai_id'] = $pegawai_id;

        // Load view
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('survey/penilaian', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_penilaian() {
        // Pastikan session id_pegawai ada
        $penilai_id = $this->session->userdata('id_pegawai');
        
        if (!$penilai_id) {
            // Jika session id_pegawai tidak ditemukan, redirect ke login
            redirect('login'); // Ganti dengan rute login Anda
            return;
        }
    
        // Ambil data lainnya dari form
        $pegawai_id = $this->input->post('pegawai_id');
        
        // Data yang akan disimpan ke database
        $data = [
            'penilai_id' => $penilai_id,  // Ambil penilai_id dari session
            'pegawai_id' => $pegawai_id,   // ID pegawai yang dinilai
            'nilai_1' => $this->input->post('nilai_1'),
            'nilai_2' => $this->input->post('nilai_2'),
            'nilai_3' => $this->input->post('nilai_3'),
            'nilai_4' => $this->input->post('nilai_4'),
            'nilai_5' => $this->input->post('nilai_5'),
            'nilai_6' => $this->input->post('nilai_6'),
            'nilai_7' => $this->input->post('nilai_7')
        ];
    
        // Simpan penilaian ke database
        $this->Survey_model->simpan_penilaian($data);
        
        // Redirect ke halaman selesai setelah simpan
        redirect('survey/selesai');
    }    
    

    // Menampilkan halaman selesai
    public function selesai() {
        $data['title'] = 'Survei Selesai';
        
        // Load view
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('survey/selesai');
        $this->load->view('templates/footer');
    }
}
