<?php
defined('BASEPATH') OR exit('No direct script allowed');

	class User_model extends CI_Model
	{
		function create($data){
			$this->db->insert("lomba", $data);
		}

		function read($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);

			$this->db->join("holder","holder.id_holder = lomba.id_holder");
			$this->db->join("kategori_lomba", "kategori_lomba.id_kategori = lomba.id_kategori");

			$query = $this->db->get("lomba");
			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}
		
		function readsingle($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);


			$query = $this->db->get("holder");
			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}


		function readHolder($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);

			$query = $this->db->get("holder");
			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}

		function readKategori($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);

			$query = $this->db->get("kategori_lomba");
			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}
	}
