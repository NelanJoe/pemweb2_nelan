<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
    }

    public function index()
    {
        $this->load->model('MahasiswaModel', 'mahasiswa');
        $list_mhs = $this->mahasiswa->getAllMahasiswa();

        $data = [
            'title' => 'Mahasiswa',
            'list_mhs' => $list_mhs,
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/nav');
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Mahasiswa',
        ];

        $config = [
            [
                'field' => 'nim',
                'label' => 'Nim',
                'rules' => 'required|numeric|min_length[10]|max_length[11]|is_unique[mahasiswa.nim]',
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|is_unique[mahasiswa.nama]',
            ],
            [
                'field' => 'ipk',
                'label' => 'Ipk',
                'rules' => 'required|numeric',
            ],
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('mahasiswa/addMahasiswa');
            $this->load->view('templates/footer');
        } else {
            $this->MahasiswaModel->add_mahasiswa();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mahasiswa/index');
        }
    }

    public function delete($id)
    {
        $this->MahasiswaModel->delete_mahasiswa($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data = array(
            'title' => 'Detail Mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->getMahasiswaById($id)
        );


        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('mahasiswa/detailMahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Form Edit Mahasiswa',
            'mahasiswa' => $this->MahasiswaModel->getMahasiswaById($id)
        ];

        $config = [
            [
                'field' => 'nim',
                'label' => 'Nim',
                'rules' => 'required|numeric|max_length[10]',
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
            ],
            [
                'field' => 'ipk',
                'label' => 'Ipk',
                'rules' => 'required|numeric',
            ],
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('mahasiswa/editMahasiswa');
            $this->load->view('templates/footer');
        } else {
            $this->MahasiswaModel->update_mahasiswa();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mahasiswa/index');
        }
    }
}
