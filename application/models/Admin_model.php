<?php
defined('BASEPATH') OR exit('No direct script allowed');

/**
* 
*/
class Admin_model extends CI_Model
{
	
	function readLomba($where="", $order="")
	{
		if (!empty($where) ) $this->db->where($where);
		if (!empty($order) ) $this->db->where($order);

		$this->db->join("kategori_lomba", "kategori_lomba.id_kategori = lomba.id_kategori");
		$this->db->join("holder","holder.id_holder = lomba.id_holder");
		
		$query = $this->db->get("lomba");
		if ($query AND $query->num_rows() != 0){
			return $query->result();
		} else {
			return array();
		}
	}

	function readHolder($where="", $order="")
	{
		if (!empty($where) ) $this->db->where($where);
		if (!empty($order) ) $this->db->where($order);

		$query = $this->db->get("holder");
		if ($query AND $query->num_rows() != 0){
			return $query->result();
		} else {
			return array();
		}
	}

	function deleteLomba($where)
	{
		$this->db->where($where);
		$this->db->delete("lomba");
	}

	function deleteHolder($where)
	{
		$this->db->where($where);
		$this->db->delete("holder");
	}
}