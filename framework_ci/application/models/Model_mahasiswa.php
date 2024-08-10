<?php

class Model_mahasiswa extends CI_Model{
    public function get_data(){
        try {
            $query = $this->db->get('tb_mahasiswa');
            $data = $query->result_array();
            $res_data = array();
		    $res_data["mhs"] = $data;
            return $res_data;
        } catch (Exception $e) {
            return $e;
        }
    }
    public function insert_data($record){
        try {
            $this->db->insert('tb_mahasiswa', $record);
            return $this->db->insert_id();
        } catch (Exception $e) {
            return $e;
        }
    }
    public function delete_data($id){
        try {
            $this->db->where("id", $id);
            $this->db->delete('tb_mahasiswa');
            return $this->db->insert_id();
        } catch (Exception $e) {
            return $e;
        }
    }
}

?>