<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data = array(
            'title' => "Home"
        );
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar');
        $this->load->view('pages/home');
        $this->load->view('layout/footer');
    }
}
