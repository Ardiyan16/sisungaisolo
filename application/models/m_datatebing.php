<?php

class m_datatebing extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('td_tebing');
		$this->db->join('kecamatan','kecamatan.id_kecamatan=td_tebing.id_kecamatan');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=td_tebing.id_kabupaten');
		$this->db->join('sungai','sungai.id_sungai=td_tebing.id_sungai');
		$query = $this->db->get();
		return $query;
	}

	function get_kecamatan(){
		
		return $query = $this->db->get('kecamatan');
	}

	function get_sungai(){
		
		return $query = $this->db->get('sungai');
	}

	function get_kabupaten(){
		
		return $query = $this->db->get('kabupaten');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){	
		$key = implode('',$where);
	$this->db->select('*');
		$this->db->from('td_tebing');
		$this->db->join('kecamatan','kecamatan.id_kecamatan=td_tebing.id_kecamatan');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=td_tebing.id_kabupaten');
		$this->db->join('sungai','sungai.id_sungai=td_tebing.id_sungai');
		$this->db->where('id_tebing', $key);
	return $this->db->get();
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}