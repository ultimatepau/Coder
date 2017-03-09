<?php
defined('BASEPATH') OR exit('No direct script allowed');

	class Lomba extends CI_Controller
	{
		// function __construct(){
		// 	parent::__construct();

		// 	$username = $this->session->userdata('username');

		// 	if (empty($username)) redirect("login");
		// }

		function index(){
			// $this->load->model("lomba_model");

			// $data['result'] = $this->lomba_model->read();

			$data['view'] = "lomba/v_list";
			$this->load->view("index", $data);
		}

		function show(){
			$data['view'] = "lomba/v_details";
			$this->load->view("index", $data);
		}
		// function tambah(){
		// 	$data['view'] = "lomba/v_form";
		// 	$this->load->view("index", $data);
		// }

		// function do_tambah(){
		// 	$post = $this->input->post(NULL, TRUE);
		// 	$this->load->model("lomba_model");
		// 	$this->lomba_model->create($post);

		// 	redirect("lomba");
		// }

		function edit($kd_lomba) {
			$this->load->model("lomba_model");

			$result = $this->lomba_model->read("kd_lomba = '$kd_lomba'");

			$data['result'] = $result[0];

			$data['form_edit'] = TRUE;
			$data['view'] = "lomba/v_form";
			$this->load->view("index", $data);
		}

		function do_edit($kd_lomba){
			$post = $this->input->post(NULL, TRUE);
			$this->load->model("lomba_model");
			$this->lomba_model->update("kd_lomba='$kd_lomba'", $post);

			redirect("lomba");
		}

		function delete($kd_lomba){
			$this->load->model("lomba_model");
			$this->lomba_model->delete("kd_lomba='$kd_lomba'");

			redirect("lomba");
		}
	}
