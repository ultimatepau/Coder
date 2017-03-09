<?php 
defined('BASEPATH') OR exit('No direct access allowed');

/**
* 
*/
class Admin extends CI_Controller
{
	
	function dataHolder()
	{
		$this->load->model("admin_model");

		$data['result'] = $this->admin_model->readHolder();
		$data['view'] = "admin_page/list_holder";

		$this->load->view('index', $data);
	}

	function dataLomba()
	{
		$this->load->model("admin_model");

		$data['result'] = $this->admin_model->readLomba();
		$data['view'] = "admin_page/list_lomba";

		$this->load->view('index', $data);
	}

	function deleteLb($kd)
	{
		$this->load->model("admin_model");
		$this->admin_model->deleteLomba("kd_lomba='$kd'");
		redirect("admin/dataLomba");
	}

	function deleteHd($id)
	{
		$this->load->model("admin_model");
		$this->admin_model->deleteHolder("id_holder='$id'");
		redirect("admin/dataHolder");
	}
}