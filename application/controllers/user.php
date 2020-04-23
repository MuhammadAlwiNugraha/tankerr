<?php 
 
class user extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "user"){
			redirect(base_url("user"));
		}
	}
 
	function index(){
		$this->load->view(base_url());
	}
}