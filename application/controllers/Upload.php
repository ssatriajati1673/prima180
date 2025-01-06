<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('Upload_model'); // Panggil model Upload_model
    }

    public function index() {
        $data['title'] = 'Upload';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $data['records'] = []; // Kosongkan data saat pertama kali diakses
        $this->load->view('upload_view', $data);

        $this->load->view('templates/footer');
    }

    public function upload_file() {
        $data['title'] = 'Upload';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        // Validasi form input
        $this->form_validation->set_rules('triwulan', 'Triwulan', 'required|in_list[1,2,3,4]');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric|min_length[4]|max_length[4]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Upload');
        }

        // Konfigurasi upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('csv_file')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('Upload');
        } else {
            $file_data = $this->upload->data();
            $file_path = './uploads/' . $file_data['file_name'];

            if (($handle = fopen($file_path, "r")) !== FALSE) {
                // Membaca header untuk memastikan kolom sesuai
                $header = fgetcsv($handle, 1000, ";");  // Menggunakan delimiter ";"
                
                $data = [];
                while (($row = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    // Menyusun data dalam bentuk array yang sesuai dengan tabel csv_uploads
                    $data[] = [
                        'triwulan' => $this->input->post('triwulan'),
                        'tahun' => $this->input->post('tahun'),
                        'NIP' => $row[0],         // Kolom NIP
                        'Nama' => $row[1],        // Kolom Nama
                        'HK' => $row[2],          // Kolom HK
                        'HD' => $row[3],          // Kolom HD
                        'TK' => $row[4],          // Kolom TK
                        'TL' => $row[5],          // Kolom TL
                        'TB' => $row[6],          // Kolom TB
                        'PD' => $row[7],          // Kolom PD
                        'DK' => $row[8],          // Kolom DK
                        'KN' => $row[9],          // Kolom KN
                        'PSW' => $row[10],        // Kolom PSW
                        'PSW1' => $row[11],       // Kolom PSW1
                        'PSW2' => $row[12],       // Kolom PSW2
                        'PSW3' => $row[13],       // Kolom PSW3
                        'PSW4' => $row[14],       // Kolom PSW4
                        'HT' => $row[15],         // Kolom HT
                        'TL1' => $row[16],        // Kolom TL1
                        'TL2' => $row[17],        // Kolom TL2
                        'TL3' => $row[18],        // Kolom TL3
                        'TL4' => $row[19],        // Kolom TL4
                        'CB' => $row[20],         // Kolom CB
                        'CL' => $row[21],         // Kolom CL
                        'CM' => $row[22],         // Kolom CM
                        'CP' => $row[23],         // Kolom CP
                        'CS' => $row[24],         // Kolom CS
                        'CT10' => $row[25],       // Kolom CT10
                        'CT11' => $row[26],       // Kolom CT11
                        'CT12' => $row[27],       // Kolom CT12
                        'CST1' => $row[28],       // Kolom CST1
                        'CST2' => $row[29],       // Kolom CST2
                        'KJK_HT' => $row[30],     // Kolom KJK_HT
                        'KJK_PC' => $row[31],     // Kolom KJK_PC
                    ];
                }
                fclose($handle);

                // Cek apakah data dengan triwulan dan tahun yang sama sudah ada
                $existing_data = $this->Upload_model->get_data_by_triwulan_and_tahun(
                    $this->input->post('triwulan'),
                    $this->input->post('tahun')
                );

                if ($existing_data) {
                    // Update data jika sudah ada
                    $this->Upload_model->update_batch($data, $this->input->post('triwulan'), $this->input->post('tahun'));
                    $this->session->set_flashdata('success', 'Data updated successfully!');
                } else {
                    // Simpan data baru jika belum ada
                    $this->Upload_model->insert_batch($data);
                    $this->session->set_flashdata('success', 'File uploaded and data saved successfully!');
                }

                // Ambil data terbaru sesuai triwulan dan tahun
                $data['records'] = $this->Upload_model->get_data_by_triwulan_and_tahun(
                    $this->input->post('triwulan'),
                    $this->input->post('tahun')
                );

                $this->load->view('upload_view', $data); // Tampilkan data setelah upload
            }
        }

        $this->load->view('templates/footer');
    }
}
