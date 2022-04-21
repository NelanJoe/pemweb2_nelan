<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper();
    }
    public function index()
    {
        $data = array(
            'title' => "Home"
        );
        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('pages/home');
        $this->load->view('layout/footer');
    }
}
