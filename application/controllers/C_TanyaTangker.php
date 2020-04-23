<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_TanyaTangker extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != "admin"){
		redirect(base_url());
		}
		$this->load->model('M_TanyaTangker');
	}
	public function index() {
		$data['result'] = $this->M_TanyaTangker->getAllData();
		$this->load->view('crud/tanyatangker/V_Tanya', $data);
	}

	public function create() {
		$this->M_TanyaTangker->createData();
		redirect("index.php/C_TanyaTangker");
	}

	public function edit($id) {
		$data['row'] = $this->M_TanyaTangker->getData($id);
		$this->load->view('crud/tanyatangker/V_TanyaEdit', $data);
	}

	public function update($id) {
        $this->M_TanyaTangker->updateData($id);
        redirect("index.php/C_TanyaTangker");
    }

    public function delete($id) {
    	$this->M_TanyaTangker->deleteData($id);
    	redirect("index.php/C_TanyaTangker");
    }


	
}
