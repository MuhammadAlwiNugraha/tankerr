<?php

class M_admin extends CI_Model{
	protected $_table = 'admin';

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_id($id){
		$query = $this->db->get_where($this->_table, ['id' => $id]);
		return $query->row();
	}

	public function lihat_email($email){
		$query = $this->db->get_where($this->_table, ['email' => $email]);
		return $query->row();
	}
}