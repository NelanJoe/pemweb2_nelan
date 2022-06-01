<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->model("MahasiswaModel", "mahasiswa");
        $list_mhs = $this->mahasiswa->getAll();

        $data = array(
            'title' => 'Mahasiswa',
            'list_mhs' => $list_mhs,
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/index');
        $this->load->view('layout/footer');
    }
}
