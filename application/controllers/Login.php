<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Login extends CI_Controller {
	// function __construct() {
	// 		parent::__construct();

	// 		$username = $this->session->userdata('username');

	// 		if (empty($username)) redirect("login");
	// 	}
	
	function index() {
/*		$data['success'] = $this->session->flashdata("success");
		$data['error'] = $this->session->flashdata("error"); */
		
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		
		$data['view'] = "login/v_login";
		$this->load->view("index", $data);
	}

	function signup() {
		$data['view'] = "login/v_signup";
		$this->load->view("index", $data);
	}

	function do_login() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$where = array(
			"username" => $username,
			"password" => md5($password)
			);

		$this->load->model("Login_model");
		$result = $this->Login_model->read($where);

		if (count($result) != 0) {
			$this->session->set_userdata("username", $username);

			$level = $result[0]->level;
			if($level == 0) {
				$level = "Administrator";
			} else {
				$level = "User";
			}
			$this->session->set_userdata("level", $level);

			redirect("home");
		} else {
		//	$this->session->set_flashdata("error","Username atau password salah.");

			redirect("login");
		}

	}

	function do_signup() {
		$this->load->model('Login_model');
		$data = array (
			"username" => $this->input->post('username'),
			"password" => md5($this->input->post('password')),
			"nama_lengkap" => $this->input->post('name'),
			"email" => $this->input->post('email'),
		);
		$this->Login_model->create($data);
		
		redirect("login");
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect("login");
	}	
}