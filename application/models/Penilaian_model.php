<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_model extends CI_Model
{

    public function get_data($table)
    {
        //select * from penilaian_pns;
        return $this->db->get($table);
    }

    function load_data()
    {
        $id_pegawai = $_SESSION['id_pegawai'];
        $query = $this->db->query("SELECT * FROM `penilaian_pns` WHERE `id_pegawai`='$id_pegawai'");
        return $query->result_array();
    }

    function update($data, $id)
    {
        $this->db->where('id_pertanyaan', $id);
        $this->db->update('penilaian_pns', $data);
    }

    function load_data_ppnpn()
    {
        $id_pegawai = $_SESSION['id_pegawai'];
        $query = $this->db->query("SELECT * FROM `penilaian_ppnpn` WHERE `id_pegawai`='$id_pegawai'");
        return $query->result_array();
    }

    function update_ppnpn($data, $id)
    {
        $this->db->where('id_pertanyaan', $id);
        $this->db->update('penilaian_ppnpn', $data);
    }
}

// <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// class UsersModel extends CI_Model {

//   // Fetch users
//   function getUsers(){

//     // Fetch users
//     $this->db->select('*');
//     $fetched_records = $this->db->get('users');
//     $users = $fetched_records->result_array();

//     return $users;
//   }

//   // Update record
//   function updateUser($id,$field,$value){

//     // Update
//     $data=array($field => $value);
//     $this->db->where('id',$id);
//     $this->db->update('users',$data);
//   }

// }