<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DosenModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Dosen',
            'list_dsn' => $this->DosenModel->getAllDosen(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/nav');
        $this->load->view('dosen/index');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Dosen',
        ];

        $config = [
            [
                'field' => 'nidn',
                'label' => 'NIDN',
                'rules' => 'numeric|required|max_length[9]|is_unique[dosen.nidn]',
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|is_unique[dosen.nama]',
            ],
            [
                'field' => 'kampus',
                'label' => 'Kampus',
                'rules' => 'required',
            ],
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('dosen/addDosen');
            $this->load->view('templates/footer');
        } else {
            $this->DosenModel->addDosen();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('dosen/index');
        }
    }

    public function delete($id)
    {
        $this->DosenModel->delete_dosen($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('dosen');
    }

    public function detail($id)
    {
        $data = array(
            'title' => 'Detail Dosen',
            'dosen' => $this->DosenModel->getDosenById($id)
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('dosen/detailDosen');
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'title' => 'Tambah Dosen',
            'dosen' => $this->DosenModel->getDosenById($id),
        ];

        $config = [
            [
                'field' => 'nidn',
                'label' => 'NIDN',
                'rules' => 'required|numeric|max_length[9]',
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
            ],
            [
                'field' => 'kampus',
                'label' => 'Kampus',
                'rules' => 'required',
            ],
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('dosen/editDosen');
            $this->load->view('templates/footer');
        } else {
            $this->DosenModel->update_dosen();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('dosen/index');
        }
    }
}
