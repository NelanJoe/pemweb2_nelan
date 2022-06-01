<?php
class ProdiModel extends CI_Model
{
    private $tabel = 'prodi';
    public function getAll()
    {
        // ! SELECT * from prodi;
        $query = $this->db->get($this->tabel);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where("kode", $id);
        $query = $this->db->get($this->tabel);
        return $query;
    }
}
