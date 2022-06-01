<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('DosenModel', 'dsn1');
        $dsn1 = new DosenModel();
        $dsn1->nidn = "0414047101";
        $dsn1->nama = "Sirojul Munir, S.Si, M.Kom";
        $dsn1->gender = "L";
        $dsn1->pendidikan = "S2";

        $this->load->model('DosenModel', 'dsn2');
        $dsn2 = new DosenModel();
        $dsn2->nidn = "0413128601";
        $dsn2->nama = "Ahmad Rio Adriansyah, S.Si. M.Si";
        $dsn2->gender = "L";
        $dsn2->pendidikan = "S2";

        $this->load->model('DosenModel', 'dsn3');
        $dsn3 = new DosenModel();
        $dsn3->nidn = "420089004";
        $dsn3->nama = "Tifani Nabarian, S.Kom, M.T.i";
        $dsn3->gender = "P";
        $dsn3->pendidikan = "S2";


        $this->load->model('DosenModel', 'dsn4');
        $dsn4 = new DosenModel();
        $dsn4->nidn = $this->input->post('nidn');
        $dsn4->nama = $this->input->post('nama');
        $dsn4->gender = $this->input->post('gender');
        $dsn4->pendidikan = $this->input->post('pendidikan');


        $data = array(
            'title' => "Dosen",
            'list_dosen' => [$dsn1, $dsn2, $dsn3, $dsn4]
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/index');
        $this->load->view('layout/footer');
    }

    public function add()
    {
        $data = array(
            'title' => 'Form Dosen'
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/formDosen');
        $this->load->view('layout/footer');
    }
}
