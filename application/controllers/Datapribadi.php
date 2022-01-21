<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapribadi extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if ($this->session->userdata("id_user") == "") {
            redirect('/login');
        }
    }

    public function index()
    {
        $this->data['menu'] = 'Datapribadi';
        $this->data['lihat'] = 'datapribadi';
        $this->load->view('templates/admin', $this->data);
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('/beranda');
    }
}
