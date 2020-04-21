<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_RumahSakit extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	function createData() {
		$data = array (
			'nama' => $this->input->post('nama'),
			'nohp' => $this->input->post('nohp'),
			'alamat' => $this->input->post('alamat')
		);
		$this->db->insert('rumahsakit', $data);
	}

	function getAllData() {
		$query = $this->db->query('SELECT * FROM rumahsakit');
		return $query->result();
	}

	function getData($id) {
        $query = $this->db->query('SELECT * FROM rumahsakit WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp'),
            'alamat' => $this->input->post('alamat')
        );
        $this->db->where('id', $id);
        $this->db->update('rumahsakit', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('rumahsakit');
    }
}