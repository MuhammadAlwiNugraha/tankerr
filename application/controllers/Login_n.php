<?php 
 
class Login_n extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('index.php/C_User');
	}
 
	function do_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("profile",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'email' => $email,
				'status' => "user"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect("index.php/C_User");
 
		}else{
			echo "email dan password salah !";
			redirect(base_url());
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}