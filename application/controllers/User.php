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

		$username = $this->session->userdata('username');
		
		$data['result'] = $this->user_model->read();
		$data['dataHolder'] = $this->user_model->readHolder("username = '$username' ");
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
		$path = "";
		$config['upload_path']          = './gambar';
		$config['allowed_types']        = 'gif|jpg|png';
		
		if (!is_dir('./gambar')) {
			mkdir('./gambar', 0777, TRUE);
		}
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('poster')){
			echo $this->upload->display_errors();
			echo "mantap";
		}else{
			$data = $this->upload->data();
			$path = $data['file_name'];
		}
		$arraydata = array (
			"id_kategori" => $this->input->post("id_kategori"),
			"id_holder" => $this->input->post("id_holder"),
			"nama_lomba" => $this->input->post("nama_lomba"),
			"deskripsi" => $this->input->post("deskripsi"),
			"tgl_pendaftaran" => $this->input->post("tgl_pendaftaran"),
			"tgl_pengumpulan" => $this->input->post("tgl_pengumpulan"),
			"link" => $this->input->post("link"),
			"poster" => $path
		);
		$this->load->model("user_model");
		$this->user_model->create($arraydata);

		redirect("user/user_lomba");
	}
}