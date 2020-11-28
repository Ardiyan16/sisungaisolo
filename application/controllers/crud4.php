<?php

class crud4 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_datacekdam');
				$this->load->helper('url');
	}

	function index(){
		$data['cekdam'] = $this->m_datacekdam->tampil_data()->result();
		$this->load->view('v_tampilcekdam' ,$data);
	}

	function tambah(){
		$data['sungai']=$this->m_datacekdam->get_sungai()->result();
		$data['kabupaten']=$this->m_datacekdam->get_kabupaten()->result();
		$data['kecamatan']=$this->m_datacekdam->get_kecamatan()->result();
		$data['prop']=$this->m_datacekdam->get_prop()->result();
		$this->load->view('v_inputcekdam',$data);
	}

	function tambah_aksi(){
			$id_cekdam = $this->input->post('id_cekdam');
			$nama_cekdam = $this->input->post('nama_cekdam');
			$id_sungai = $this->input->post('id_sungai');
			$id_kecamatan = $this->input->post('id_kecamatan');
			$id_kabupaten = $this->input->post('id_kabupaten');
			$id_prop = $this->input->post('id_prop');
			$latitude = $this->input->post('latitude');
			$longitude = $this->input->post('longitude');
			$fv_identifikasi = $this->input->post('fv_identifikasi');
			$fv_n_kondisi = $this->input->post('fv_n_kondisi');
			$fv_kondisi = $this->input->post('fv_kondisi');
			$fv_fungsi = $this->input->post('fv_fungsi');
			$fv_kerja_op = $this->input->post('fv_kerja_op');
			$fv_kinerja_op = $this->input->post('fv_kinerja_op');
			$fv_tindakan = $this->input->post('fv_tindakan');

 
		$data = array(
			'id_cekdam' => $id_cekdam,
			'nama_cekdam' => $nama_cekdam,
			'id_sungai' => $id_sungai,
			'id_kecamatan' => $id_kecamatan,
			'id_kabupaten' => $id_kabupaten,
			'id_prop' => $id_prop,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'fv_identifikasi' => $fv_identifikasi,
			'fv_n_kondisi' => $fv_n_kondisi,
			'fv_kondisi' => $fv_kondisi,
			'fv_fungsi' => $fv_fungsi,
			'fv_kerja_op' => $fv_kerja_op,
			'fv_kinerja_op' => $fv_kinerja_op,
			'fv_tindakan' => $fv_tindakan
			);
		$this->m_datacekdam->input_data($data,'cekdam');
		redirect('crud4/index');
	}

	function hapus($id_cekdam){
		$where = array('id_cekdam' => $id_cekdam);
		$this->m_datacekdam->hapus_data($where,'cekdam');
		redirect('crud4/index');
	}

	function edit($id_cekdam){
		$where = array('id_cekdam' => $id_cekdam);
		$data['cekdam'] = $this->m_datacekdam->edit_data($where,'cekdam')->result();
		$data['sungai']=$this->m_datacekdam->get_sungai()->result();
		$data['kabupaten']=$this->m_datacekdam->get_kabupaten()->result();
		$data['kecamatan']=$this->m_datacekdam->get_kecamatan()->result();
		$this->load->view('v_editcekdam',$data);
	}

	function update(){
		$id_cekdam = $this->input->post('id_cekdam');
		$nama_cekdam = $this->input->post('nama_cekdam');
		$id_sungai = $this->input->post('id_sungai');
		$id_kecamatan = $this->input->post('id_kecamatan');
		$id_kabupaten = $this->input->post('id_kabupaten');
		$id_prop = $this->input->post('id_prop');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$fv_identifikasi = $this->input->post('fv_identifikasi');
		$fv_n_kondisi = $this->input->post('fv_n_kondisi');
		$fv_kondisi = $this->input->post('fv_kondisi');
		$fv_fungsi = $this->input->post('fv_fungsi');
		$fv_kerja_op = $this->input->post('fv_kerja_op');
		$fv_kinerja_op = $this->input->post('fv_kinerja_op');
		$fv_tindakan = $this->input->post('fv_tindakan');
 
	$data = array(
			'id_cekdam' => $id_cekdam,
			'nama_cekdam' => $nama_cekdam,
			'id_sungai' => $id_sungai,
			'id_kecamatan' => $id_kecamatan,
			'id_kabupaten' => $id_kabupaten,
			'id_prop' => $id_prop,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'fv_identifikasi' => $fv_identifikasi,
			'fv_n_kondisi' => $fv_n_kondisi,
			'fv_kondisi' => $fv_kondisi,
			'fv_fungsi' => $fv_fungsi,
			'fv_kerja_op' => $fv_kerja_op,
			'fv_kinerja_op' => $fv_kinerja_op,
			'fv_tindakan' => $fv_tindakan
			);
 
	$where = array(
		'id_cekdam' => $id_cekdam
	);
 
	$this->m_datacekdam->update_data($where,$data,'cekdam');
	redirect('crud4/index');
}
 
}