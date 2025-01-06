<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_PPNPN extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penilaian_model');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['title'] = 'Penilaian PPNPN';
        $data['pegawai'] = $this->Penilaian_model->get_data('penilaian_ppnpn')->result();

        $data['all_data'] = $this->Penilaian_model->get_data('penilaian_ppnpn');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('penilaian_ppnpn', $data);
        $this->load->view('templates/footer');
    }

    function load_data()
    {
        $data = $this->Penilaian_model->load_data_ppnpn();
        echo json_encode($data);
    }

    function update()
    {
        $data = array(
            $this->input->post('table_column') => $this->input->post('value')
        );

        $this->Penilaian_model->update_ppnpn($data, $this->input->post('id'));
    }

    // public function update_data(){
    //     // POST values
    //     $nilai_hairul   = $this->input->post('nilai_hairul');
    //     $nilai_yeny     = $this->input->post('nilai_yeny');
    //     $nilai_ummi     = $this->input->post('nilai_ummi');
    //     $nilai_iqbal    = $this->input->post('nilai_iqbal');
    //     $nilai_armula   = $this->input->post('nilai_armula');
    //     $nilai_salim    = $this->input->post('nilai_salim');
    //     $nilai_yetri    = $this->input->post('nilai_yetri');
    //     $nilai_ony      = $this->input->post('nilai_ony');
    //     $nilai_eka      = $this->input->post('nilai_eka');
    //     $nilai_wahyu    = $this->input->post('nilai_wahyu');
    //     $nilai_nadhea   = $this->input->post('nilai_nadhea');
    //     $nilai_lupri    = $this->input->post('nilai_lupri');
    //     $nilai_zulfikri = $this->input->post('nilai_zulfikri');
    //     $nilai_hendra   = $this->input->post('nilai_hendra');
    //     $nilai_adi      = $this->input->post('nilai_adi');
    //     $field = $this->input->post('field');
    //     $value = $this->input->post('value');


    //     // Update records
    //     $this->UsersModel->updateUser($nilai_hairul, $nilai_yeny, $nilai_ummi,
    //     $nilai_iqbal, $nilai_armula, $nilai_salim, $nilai_yetri, $nilai_ony, 
    //     $nilai_eka, $nilai_wahyu, $nilai_nadhea, $nilai_lupri, $nilai_zulfikri,
    //     $nilai_hendra, $nilai_adi , $field, $value);

    //     echo 1;
    //     exit;
    //   }

}
