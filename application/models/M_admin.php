<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
    private $table = "tbl_users";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
	}
	
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_user" => $id])->row();
    }

    public function update($data,$id)
    {
        return $this->db->update($this->table, $data, array('id_user' => $id));
    }

}
