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
			$data['username'] = $this->session->userdata('username');
			$data['level'] = $this->session->userdata('level');
			$this->load->model("Lomba_model");
			$cat = @$_GET['cat'];
			if($cat) {
				$sort = array (
					"kategori" => $cat
				);
			} else {
				$sort = array();
			}
			$data['result'] = $this->Lomba_model->readcat();
			$data['resultcompetition'] = $this->Lomba_model->read($sort);
			$data['tags'] = $this->Lomba_model->readtags();
			
			$data['view'] = "lomba/v_list";
			$this->load->view("index", $data);
		}

		function show($id){
			$data['username'] = $this->session->userdata('username');
			$data['level'] = $this->session->userdata('level');
			
			$this->load->model("Lomba_model");
			$data['result'] = $this->Lomba_model->read("kd_lomba = '$id'");
			
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
