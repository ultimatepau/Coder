<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	// function __construct() {
	// 		parent::__construct();

	// 		$username = $this->session->userdata('username');

	// 		if (empty($username)) redirect("login");
	// 	}

	function index(){
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		
		$data['view'] = "home";

		$this->load->view('index', $data);
	}
}