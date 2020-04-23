<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('index.php/C_User');
	}
 	
	// public function proses_login(){
	// 	if($this->input->post('status') === "user") $this->n_login($this->input->post('email'));
	// 	elseif($this->input->post('status') === 'admin') $this->do_login($this->input->post('email'));
	// 	else {
	// 		redirect(base_url(status-tidak-tersedia));
	// 	}
	// }


	//buat login admin
	function do_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'email' => $email,
				'username' => $username,
				'status' => "admin"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect("index.php/C_User");
 
		}else{
			echo "email dan password salah !";
			redirect(base_url(admin));
		}
	}

	//buat lgoi
	function n_login(){
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
				'username' => $username,
				'status' => "user"
				);
 
			$this->session->set_userdata($data_session);
 			echo "benar";
			redirect('crud/users/V_User');
 
		}else{
			echo "email dan password salah !";
			redirect(base_url(user));

		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
