<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $rekapsiapa = 'rekap_'.$_SESSION['nama_pendek'];
        $query = $this->db->query("SELECT ROUND(AVG(`$rekapsiapa`),2) FROM rekap_chart_final");
        $data['average'] = json_encode($query->result_array());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }

    public function chart_data()
    {
        $data = $this->chart_model->chart_database();
        echo json_encode($data);
    }
}
