<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('LoginModel');
    }

    public function index()
    {

        $data = array(
            'title' => 'Login'
        );


        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim'
            ),

        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('login/index');
            $this->load->view('templates/footer');
        } else {
            // validasinya sukses
            $this->_login();
        }
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $user = $this->db->get_where('users', $where)->num_rows();

        if ($user > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Succes Login</div>');
            redirect('pages/index');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}
