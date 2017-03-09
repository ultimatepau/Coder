<?php
defined('BASEPATH') OR exit('No direct script allowed');

	class Lomba_model extends CI_Model
	{
		function create($data){
			$this->db->insert("lomba", $data);
		}

		function read($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);

			$this->db->join('kategori_lomba','lomba.id_kategori = kategori_lomba.id_kategori');
			$query = $this->db->get("lomba");
			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}
		
		function readtags($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);
			
			$query = $this->db->get("lomba");
			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}
		
		function readcat($where="", $order=""){
			if (!empty($where) ) $this->db->where($where);
			if (!empty($order) ) $this->db->where($order);

			$query = $this->db->get("kategori_lomba");
			if ($query AND $query->num_rows() != 0){
				return $query->result();
			} else {
				return array();
			}
		}

		function update($where, $data) {
			$this->db->where($where);
			$this->db->update("t_siswa", $data);

			if($this->db->affected_rows()>0){
				$this->session->set_flashdata("success", "Data Siswa Berhasil Diubah");
			}else{
				$this->session->set_flashdata("error", "Terjadi Kesalahan ".$error['message']);
			}
		}

		function delete($where){
			$this->db->where($where);
			$this->db->delete("t_siswa");

			if($this->db->affected_rows()>0){
				$this->session->set_flashdata("success", "Data Siswa Berhasil Dihapus");
			}else{
				$this->session->set_flashdata("error", "Terjadi Kesalahan ".$error['message']);
			}
		}
	}