<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_kepala extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard_kepala');
        $this->load->view('templates/footer');
    }
}
