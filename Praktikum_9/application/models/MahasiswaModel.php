<?php

class MahasiswaModel extends CI_Model
{
    private $tabel = 'mahasiswa';

    public function getAllMahasiswa()
    {
        // ! SELECT * from mahasiswa;
        $query = $this->db->get($this->tabel);

        return $query->result();
    }

    public function add_mahasiswa()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'ipk' => $this->input->post('ipk'),
            'gender' => $this->input->post('gender'),
            'prodi_kode' => $this->input->post('prodi'),
        ];
        $this->db->insert($this->tabel, $data);
    }

    public function delete_mahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
    }

    // Detail Mahasiswa
    public function getMahasiswaById($id)
    {
        // ! Select * mahasiswa id 
        $this->db->where('id', $id);
        $query = $this->db->get($this->tabel)->row_array();

        return $query;
    }

    public function update_mahasiswa()
    {
        $data = [
            'nim' => $this->input->post('nim', true),
            'nama' => $this->input->post('nama', true),
            'ipk' => $this->input->post('ipk', true),
            'gender' => $this->input->post('gender', true),
            'prodi_kode' => $this->input->post('prodi', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);
    }
}
