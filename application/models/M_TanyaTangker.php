<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tanyatangker extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	function createData() {
		$data = array (
			'email' => $this->input->post('email'),
			'nama' => $this->input->post('nama'),
			'pertanyaan' => $this->input->post('pertanyaan')
		);
		$this->db->insert('tanyatangker', $data);
	}

	function getAllData() {
		$query = $this->db->query('SELECT * FROM tanyatangker');
		return $query->result();
	}

	function getData($id) {
        $query = $this->db->query('SELECT * FROM tanyatangker WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'email' => $this->input->post('email'),
			'nama' => $this->input->post('nama'),
			'pertanyaan' => $this->input->post('pertanyaan')
        );
        $this->db->where('id', $id);
        $this->db->update('tanyatangker', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('tanyatangker');
    }
}