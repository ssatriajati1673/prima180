<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Mengambil semua data pengguna (pegawai)
    public function get_all_users() {
        $this->db->select('id, nama, role');
        $query = $this->db->get('table_user');
        return $query->result_array();  // Mengembalikan semua data pegawai dalam bentuk array
    }

    // Mendapatkan data pengguna berdasarkan ID
    public function get_user_by_id($pegawai_id) {
        $this->db->where('id', $pegawai_id);
        $query = $this->db->get('table_user');
        return $query->row();  // Mengembalikan data pengguna berdasarkan ID
    }
}