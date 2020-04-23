<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_RumahSakit extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != "admin"){
			redirect(base_url());
		}
		$this->load->model('M_RumahSakit');
	}
	public function index() {
		$data['result'] = $this->M_RumahSakit->getAllData();
		$this->load->view('crud/rumahsakit/V_RS', $data);
	}

	public function create() {
		$this->M_RumahSakit->createData();
		redirect("index.php/C_RumahSakit");
	}

	public function edit($id) {
		$data['row'] = $this->M_RumahSakit->getData($id);
		$this->load->view('crud/rumahsakit/V_RSEdit', $data);
	}

	public function update($id) {
        $this->M_RumahSakit->updateData($id);
        redirect("index.php/C_RumahSakit");
    }

    public function delete($id) {
    	$this->M_RumahSakit->deleteData($id);
    	redirect("index.php/C_RumahSakit");
    }


	
}
