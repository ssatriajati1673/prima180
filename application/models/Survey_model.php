<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_model extends CI_Model {

    // Mengambil semua pegawai
    public function get_all_pegawai() {
        $this->db->select('id, nama, role');
        $query = $this->db->get('table_user');
        return $query->result_array();
    }

    // Mengambil pegawai berdasarkan ID
    public function get_pegawai_by_id($pegawai_id) {
        $this->db->where('id', $pegawai_id);
        $query = $this->db->get('table_user');
        return $query->row_array();
    }

    // Menyimpan hasil penilaian
    public function simpan_penilaian($data) {
        $this->db->insert('surveys', $data);
    }
}
