<?php

class Tamu_model extends CI_Model {

    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('tamu');
        return $this->db->get()->result();
    }

    public function filterData($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('tamu');
        $this->db->where('tamu.tanggal >=', $tgl_awal);
        $this->db->where('tamu.tanggal <=', $tgl_akhir);
        return $this->db->get()->result();
    }

    
}
