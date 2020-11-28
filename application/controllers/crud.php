<?php

class crud extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
				$this->load->helper('url');
	}

	function index(){
		$data['td_pintu'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil' ,$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$fv_idpintu = $this->input->post('fv_idpintu');
		$idsungai = $this->input->post('idsungai');
		$fv_kodelokasi = $this->input->post('fv_kodelokasi');
		$fv_desa = $this->input->post('fv_desa');
		$fv_kecamatan = $this->input->post('fv_kecamatan');
		$fv_kabupaten = $this->input->post('fv_kabupaten');
		$fv_provinsi = $this->input->post('fv_provinsi');
		$fv_lintang = $this->input->post('fv_lintang');
		$fv_bujur = $this->input->post('fv_bujur');
		$fv_identifikasi = $this->input->post('fv_identifikasi');
		$fv_dokumentasi = $this->input->post('fv_dokumentasi');
		$fv_keterangan = $this->input->post('fv_keterangan');
 
		$data = array(
			'fv_idpintu' => $fv_idpintu,
			'idsungai' => $idsungai,
			'fv_kodelokasi' => $fv_kodelokasi,
			'fv_desa' => $fv_desa,
			'fv_kecamatan' => $fv_kecamatan,
			'fv_kabupaten' => $fv_kabupaten,
			'fv_provinsi' => $fv_provinsi,
			'fv_lintang' => $fv_lintang,
			'fv_bujur' => $fv_bujur,
			'fv_identifikasi' => $fv_identifikasi,
			'fv_dokumentasi' => $fv_dokumentasi,
			'fv_keterangan' => $fv_keterangan
			);
		$this->m_data->input_data($data,'td_pintu');
		redirect('crud/index');
	}

	function edit($fv_idpintu){
		$where = array('fv_idpintu' => $fv_idpintu);
		$data['td_pintu'] = $this->m_data->edit_data($where,'td_pintu')->result();
		$this->load->view('v_edit',$data);
	}

	function hapus($fv_idpintu){
		$where = array('fv_idpintu' => $fv_idpintu);
		$this->m_data->hapus_data($where,'td_pintu');
		redirect('crud/index');
	}
 
	function update(){
	$fv_idpintu = $this->input->post('fv_idpintu');
		$idsungai = $this->input->post('idsungai');
		$fv_kodelokasi = $this->input->post('fv_kodelokasi');
		$fv_desa = $this->input->post('fv_desa');
		$fv_kecamatan = $this->input->post('fv_kecamatan');
		$fv_kabupaten = $this->input->post('fv_kabupaten');
		$fv_provinsi = $this->input->post('fv_provinsi');
		$fv_lintang = $this->input->post('fv_lintang');
		$fv_bujur = $this->input->post('fv_bujur');
		$fv_identifikasi = $this->input->post('fv_identifikasi');
		$fv_dokumentasi = $this->input->post('fv_dokumentasi');
		$fv_keterangan = $this->input->post('fv_keterangan');
 
	$data = array(
			'fv_idpintu' => $fv_idpintu,
			'idsungai' => $idsungai,
			'fv_kodelokasi' => $fv_kodelokasi,
			'fv_desa' => $fv_desa,
			'fv_kecamatan' => $fv_kecamatan,
			'fv_kabupaten' => $fv_kabupaten,
			'fv_provinsi' => $fv_provinsi,
			'fv_lintang' => $fv_lintang,
			'fv_bujur' => $fv_bujur,
			'fv_identifikasi' => $fv_identifikasi,
			'fv_dokumentasi' => $fv_dokumentasi,
			'fv_keterangan' => $fv_keterangan
			);
 
	$where = array(
		'fv_idpintu' => $fv_idpintu
	);
 
	$this->m_data->update_data($where,$data,'td_pintu');
	redirect('crud/index');
}
}