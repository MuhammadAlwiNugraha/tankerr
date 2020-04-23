<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->load->model('M_Login');
	}
	public function index()
	{
		$this->load->view('users/header');
		$this->load->view('users/home');
	}

	public function serviks() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerserviks');
	}

	public function hati() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerhati');
	}
	public function payudara() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerpayudara');
	}
	public function paru() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerparu');
	}
	public function lambung() {
		$this->load->view('users/header');
		$this->load->view('users/artikelkankerlambung');
	}
	public function TanyaTangker() {
		$this->load->view('users/header');
		$this->load->view('users/tanyasitangker');
	}
	public function create() {
		$this->load->model("M_TanyaTangker");
		$this->M_TanyaTangker->createData();
		redirect("index.php/welcome/TanyaTangker");
	}
	public function tips() {
		$this->load->view('users/header');
		$this->load->view('users/tipspage');
	}
	public function rumahsakit() {
		$this->load->model('M_RumahSakit');
		$data['result'] = $this->M_RumahSakit->getAllData();
		$this->load->view('users/header');
		$this->load->view('users/listrumahsakit', $data);
	}

	public function Login() {
		$message="Invalid email or password";
		if ($this->input->method() == 'post') {
			$data = ['email' => $this->input->post('email'), 'password' => $this->input->post('password')];
			if ($this->M_Login->loginuser($data)) {
				$this->session->set_userdata('email', $data['email']);
                redirect("index.php/C_User");
            } else {
				$this->load->view('users/header');
                $this->load->view('users/home');

            }
		}else{
			$this->load->view('users/header');
			$this->load->view('users/home');
		}
		
	}

	public function Register() {
		$this->load->view('users/header');
		$this->load->view('users/home');
	}
}
