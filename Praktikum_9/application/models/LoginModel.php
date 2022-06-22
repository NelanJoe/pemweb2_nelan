<?php
class LoginModel extends CI_Model
{
    private $tabel = 'users';
    /*
        make model auth
    */

    // make funtion auth codeigniter 3
    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
            'password' => md5($password)
        );

        return $this->db->get_where($this->tabel, $data)->num_rows();
    }
}
