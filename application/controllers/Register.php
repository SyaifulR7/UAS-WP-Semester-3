<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {
        $this->load->view('register');
    }

    public function simpan()
    {
        $this->load->model('m_user');

        $data = array(
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'alamat'   => $this->input->post('alamat'),
            'phone'   => $this->input->post('phone'),
            'username'      => $this->input->post('username'),
            'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );

        $register = $this->m_user->simpan_register($data);

        if ($register) {
            echo "success";
        } else {
            echo "error";
        }
    }
}
