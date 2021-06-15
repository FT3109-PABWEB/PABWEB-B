<?php

class Mahasiswa_model extends CI_Model
{
    function lihatData()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    function metodeResult()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    function metodeRow()
    {
        $query = $this->db->where('ID_Mahasiswa', 3);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }
    function metodeResultArray()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }
    function metodeRowArray()
    {
        $query = $this->db->where('ID_Mahasiswa', 2);
        $query = $this->db->get('mahasiswa');
        return $query->row_array();
    }
    public function lihat_data()
    {
        return $this->db->join('prodi','prodi.id_prodi = mahasiswa.id_prodi','left')->get('mahasiswa')->result();
        
    }
}