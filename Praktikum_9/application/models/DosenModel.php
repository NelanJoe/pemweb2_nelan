<?php

class DosenModel extends CI_Model
{
    private $tabel = 'dosen';

    public function getAllDosen()
    {
        // ! SELECT * from dosen;
        $query = $this->db->get($this->tabel);

        return $query->result();
    }

    public function getDosenById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->tabel)->row_array();
        return $query;
    }

    public function addDosen()
    {
        $data = [
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama'),
            'kampus' => $this->input->post('kampus'),
            'pendidikan' => $this->input->post('pendidikan'),
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function delete_dosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
    }


    public function update_dosen()
    {
        $data = [
            'nidn' => $this->input->post('nidn', TRUE),
            'nama' => $this->input->post('nama', TRUE),
            'kampus' => $this->input->post('kampus', TRUE),
            'pendidikan' => $this->input->post('pendidikan', TRUE),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);
    }
}
