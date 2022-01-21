<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function cek_login()
    {
        $this->load->model('m_user');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->m_user->cek_login($username, $password);

        if (!empty($cek)) {

            foreach ($cek as $user) {

                $session_data = array(
                    'id_user'       => $user->id_user,
                    'username'      => $user->username,
                    'nama_lengkap'  => $user->nama_lengkap,
                    'alamat'        => $user->alamat,
                    'phone'         => $user->phone,
                    'status'        => $user->status,
                    'password'      => $user->password
                );

                $this->session->set_userdata($session_data);
            }

            echo "success";
        } else {

            echo "error";
        }
    }

    public function logout()
    {
        //load view form login
        $this->session->sess_destroy();
        redirect(base_url('/'));
    }
}
