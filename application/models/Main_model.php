<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

    // Fetch users
    function getUsers($searchTerm=""){

        // Fetch users
        $this->db->select('*');
        $this->db->where("nama like '%".$searchTerm."%' ");
        $fetched_records = $this->db->get('tbl_kelurahan');
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach($users as $user){
            $data[] = array("id"=>$user['id_kec'], "text"=>$user['nama']);

        }
        return $data;
    }

}