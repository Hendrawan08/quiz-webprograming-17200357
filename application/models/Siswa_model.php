<?php
// Siswa_model.php

class Siswa_model extends CI_Model {

    public function insert_siswa($data) {
        $this->db->insert('siswa', $data);
    }

    public function get_all_siswa() {
        $query = $this->db->get('siswa');
        return $query->result();
    }
}
?>
