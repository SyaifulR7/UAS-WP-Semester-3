<?php

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('id_user') == '') {
            redirect('/login');
        }
    }

    public function index()
    {
        $this->data['files'] = directory_map('./upload');
        $this->data['menu'] = 'Upload Here';
        $this->data['lihat'] = 'main';

        $this->load->view('templates/admin', $this->data);
    }

    public function upload()
    {
        $config['upload_path'] = './upload';
        $config['allowed_types'] = '*';
        $config['max_size'] = 102400;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $this->session->set_flashdata('success', 'Upload data Berhasil');
            redirect('main');
        } else {
            $this->session->set_flashdata('error', 'Upload data Gagal');
            redirect('main');
        }
    }
    public function delete()
    {
        $filename = $this->input->get('file');
        $this->session->set_flashdata('success', 'hapus data berhasil');
        if (file_exists("./upload/$filename")) {
            unlink("./upload/$filename");
            redirect(base_url('main'));
        } else {
            echo 'hapus gagal';
        }
    }
}
