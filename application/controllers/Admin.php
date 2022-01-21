<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_admin");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['admin'] = $this->m_admin->getAll();
		$this->data['menu'] = 'Data Admin';
		$this->data['lihat'] = 'admin/index';

		$this->load->view('templates/admin', $this->data);
	}

	public function team()
	{
		$this->data['menu'] = 'Team Kami';
		$this->data['lihat'] = 'admin/team';
		$this->load->view('templates/admin', $this->data);
	}

	public function tambah()
	{
		$this->data['menu'] = 'Tambah Admin';
		$this->data['lihat'] = 'admin/tambah';
		$this->load->view('templates/admin', $this->data);
	}

	public function store()
	{

		$this->form_validation->set_rules("nama_lengkap", "Nama lengkap", "required");
		$this->form_validation->set_rules("username", "Username", "required");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("status", "Status", "required");
		$this->form_validation->set_rules("alamat", "Alamat", "required");
		$this->form_validation->set_rules("phone", "Phone", "required");
		if ($this->form_validation->run() != false) {

			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post("nama_lengkap", TRUE), ENT_QUOTES),
				'username' => htmlspecialchars($this->input->post("username", TRUE), ENT_QUOTES),
				'password' => password_hash($this->input->post("password", TRUE), PASSWORD_DEFAULT),
				'status' => htmlspecialchars($this->input->post("status", TRUE), ENT_QUOTES),
				'alamat' => htmlspecialchars($this->input->post("alamat", TRUE), ENT_QUOTES),
				'phone' => htmlspecialchars($this->input->post("phone", TRUE), ENT_QUOTES),
			];

			$this->db->insert("tbl_users", $data);
			$this->session->set_flashdata("success", " Berhasil Insert Data ! ");
			redirect(base_url("admin"));
		} else {
			$this->session->set_flashdata("failed", " Gagal Insert Data ! " . validation_errors());
			redirect(base_url("admin"));
		}
	}

	public function edit($id)
	{
		$this->data['edit'] = $this->m_admin->getById($id);
		$this->data['menu'] = 'Edit Admin';
		$this->data['lihat'] = 'admin/edit';
		$this->load->view('templates/admin', $this->data);
	}

	public function update()
	{
		$id =  (int)$this->input->post("id_user"); // parameter yang mau di update

		$this->form_validation->set_rules("nama_lengkap", "Nama lengkap", "required");
		$this->form_validation->set_rules("username", "Username", "required");
		$this->form_validation->set_rules("status", "Status", "required");
		$this->form_validation->set_rules("alamat", "Alamat", "required");
		$this->form_validation->set_rules("phone", "Phone", "required");
		if ($this->form_validation->run() != false) {

			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post("nama_lengkap", TRUE), ENT_QUOTES),
				'username' => htmlspecialchars($this->input->post("username", TRUE), ENT_QUOTES),
				'status' => htmlspecialchars($this->input->post("status", TRUE), ENT_QUOTES),
				'alamat' => htmlspecialchars($this->input->post("alamat", TRUE), ENT_QUOTES),
				'phone' => htmlspecialchars($this->input->post("phone", TRUE), ENT_QUOTES),
			];

			if (!empty($this->input->post("password", TRUE))) {
				$this->db->set('password',  password_hash($this->input->post('password'), PASSWORD_DEFAULT));
			}

			$this->db->where("id_user", $id); // ubah id dan postnya
			$this->db->update("tbl_users", $data);
			$this->session->set_flashdata("success", " Berhasil Update Data ! ");
			redirect(base_url("admin/edit/" . $id));
		} else {
			$this->session->set_flashdata("failed", " Gagal Update Data ! " . validation_errors());
			redirect(base_url("admin/edit/" . $id));
		}
	}

	public function delete($id)
	{
		$cek = $this->db->get_where("tbl_users", ["id_user" => $id]); // tulis id yang dituju
		if ($cek->num_rows() > 0) {
			$this->db->where("id_user", $id); // tulis id yang dituju
			$this->db->delete("tbl_users");
			$this->session->set_flashdata("success", " Berhasil Delete Data ! ");
			redirect(base_url("admin"));
		} else {
			$this->session->set_flashdata("failed", " Gagal Delete Data ! " . validation_errors());
			redirect(base_url("admin"));
		}
	}
}
