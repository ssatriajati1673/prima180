<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petunjuk extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Petunjuk';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('petunjuk');
        $this->load->view('templates/footer');
    }
}