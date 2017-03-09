<?php
defined('BASEPATH') OR exit('No direct script allowed');

	class Login_model extends CI_Model
	{
		function create($data){
			$this->db->insert("holder", $data);
		}

		function read($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);

			$query = $this->db->get("login");

			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}

		function update($where, $data) {
			$this->db->where($where);
			$this->db->update("login", $data);
		}

		function delete($where){
			$this->db->where($where);
			$this->db->delete("login");
		}		
	}