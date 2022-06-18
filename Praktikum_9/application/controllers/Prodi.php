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

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/nav');
        $this->load->view('prodi/index');
        $this->load->view('templates/footer');
    }
}
