<?php
class MahasiswaModel extends CI_Model
{
    private $tabel = 'mahasiswa';
    public function getAll()
    {
        // ! SELECT * from mahasiswa;
        $query = $this->db->get($this->tabel);
        return $query->result();
    }

    // public function findById($id)
    // {
    //     $this->db->where("kode", $id);
    //     $query = $this->db->get($this->tabel);
    //     return $query;
    // }
}
