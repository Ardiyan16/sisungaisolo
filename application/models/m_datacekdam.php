<?php

class m_datacekdam extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('cekdam');
		$this->db->join('kecamatan','kecamatan.id_kecamatan=cekdam.id_kecamatan');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=cekdam.id_kabupaten');
		$this->db->join('sungai','sungai.id_sungai=cekdam.id_sungai');
		$this->db->join('prop','prop.id_prop=cekdam.id_prop');
		$this->db->order_by('id_cekdam','asc');
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

	function get_prop(){
		
		return $query = $this->db->get('prop');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){	
		$key = implode('',$where);
	$this->db->select('*');
		$this->db->from('cekdam');
		$this->db->join('kecamatan','kecamatan.id_kecamatan=cekdam.id_kecamatan');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=cekdam.id_kabupaten');
		$this->db->join('sungai','sungai.id_sungai=cekdam.id_sungai');
		$this->db->join('prop','prop.id_prop=cekdam.id_prop');
		$this->db->where('id_cekdam', $key);
	return $this->db->get();
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}