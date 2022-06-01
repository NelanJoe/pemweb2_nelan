<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model("ProdiModel", "prodi");
        $list_prodi = $this->prodi->getAll();

        $data = array(
            'title' => 'Prodi',
            'list_prodi' => $list_prodi
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/index');
        $this->load->view('layout/footer');
    }
}
