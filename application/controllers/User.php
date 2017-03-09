<?php
defined('BASEPATH') OR exit('No direct access allowed');

/**
* 
*/
class User extends CI_Controller
{
	
	function profile()
	{
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		
		$username = $this->session->userdata('username');
		$this->load->model("User_model");
		
		$data['result'] = $this->User_model->readsingle("username = '$username'");
		$data['view'] = "user_page/profile";
		$this->load->view('index', $data);
	}

	function user_lomba()
	{
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		
		$this->load->model("user_model");

		$data['result'] = $this->user_model->read();
		$data['dataHolder'] = $this->user_model->readHolder();
		$data['dataKategori'] = $this->user_model->readKategori();

		$data['view'] = "user_page/list_lomba";

		$this->load->view('index', $data);
	}

	// function tambahLomba(){
	// 	$this->load->model("user_model");

	// 	$data['dataHolder'] = $this->user_model->readHolder();
	// 	$data['dataKategori'] = $this->user_model->readKategori();

	// 	$data['view'] = "user_page/list_lomba";
	// 	$this->load->view("index", $data);
	// }

	function do_tambah(){
		$post = $this->input->post(NULL, TRUE);
		$this->load->model("user_model");
		$this->user_model->create($post);

		redirect("user/user_lomba");
	}
}