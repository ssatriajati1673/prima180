<?php
class Upload_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insert data batch
    public function insert_batch($data) {
        $this->db->insert_batch('csv_uploads', $data);
    }

    // Update data batch berdasarkan triwulan dan tahun
    public function update_batch($data, $triwulan, $tahun) {
        foreach ($data as $row) {
            $this->db->where('triwulan', $triwulan);
            $this->db->where('tahun', $tahun);
            $this->db->where('NIP', $row['NIP']);  // Perbarui berdasarkan NIP
            $this->db->update('csv_uploads', $row);
        }
    }

    // Ambil data berdasarkan triwulan dan tahun
    public function get_data_by_triwulan_and_tahun($triwulan, $tahun) {
        $this->db->where('triwulan', $triwulan);
        $this->db->where('tahun', $tahun);
        $query = $this->db->get('csv_uploads');
        return $query->result();
    }
}
