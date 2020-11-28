<?php

class crud3 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_datatebing');
				$this->load->helper('url');
	}

	function index(){
		$data['td_tebing'] = $this->m_datatebing->tampil_data()->result();
		$this->load->view('v_tampiltebing' ,$data);
	}

	function tambah(){
		$data['sungai']=$this->m_datatebing->get_sungai()->result();
		$data['kabupaten']=$this->m_datatebing->get_kabupaten()->result();
		$data['kecamatan']=$this->m_datatebing->get_kecamatan()->result();
		$this->load->view('v_inputtebing',$data);
	}

	function tambah_aksi(){
		$id_tebing = $this->input->post('id_tebing');
        $id_sungai = $this->input->post('id_sungai');
        $desa = $this->input->post('desa');
        $id_kecamatan = $this->input->post('id_kecamatan');
        $id_kabupaten = $this->input->post('id_kabupaten');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $jenis_bangunan = $this->input->post('jenis_bangunan');
 
		$data = array(
			'id_tebing' => $id_tebing,
	        'id_sungai' => $id_sungai,
	        'desa' => $desa,
	        'id_kecamatan' => $id_kecamatan,
	        'id_kabupaten' => $id_kabupaten,
	        'latitude' => $latitude,
	        'longitude' => $longitude,
	        'jenis_bangunan' => $jenis_bangunan
			);
		$this->m_datatebing->input_data($data,'td_tebing');
		redirect('crud3/index');
	}

	function edit($id_tebing){
		$where = array('id_tebing' => $id_tebing);
		$data['td_tebing'] = $this->m_datatebing->edit_data($where,'td_tebing')->result();
		$data['sungai']=$this->m_datatebing->get_sungai()->result();
		$data['kabupaten']=$this->m_datatebing->get_kabupaten()->result();
		$data['kecamatan']=$this->m_datatebing->get_kecamatan()->result();
		$this->load->view('v_edittebing',$data);
	}

	function hapus($id_tebing){
		$where = array('id_tebing' => $id_tebing);
		$this->m_datatebing->hapus_data($where,'td_tebing');
		redirect('crud3/index');
	}
 
	function update(){
	$id_tebing = $this->input->post('id_tebing');
        $id_sungai = $this->input->post('id_sungai');
        $desa = $this->input->post('desa');
        $id_kecamatan = $this->input->post('id_kecamatan');
        $id_kabupaten = $this->input->post('id_kabupaten');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $jenis_bangunan = $this->input->post('jenis_bangunan');
 
	$data = array(
			'id_tebing' => $id_tebing,
	        'id_sungai' => $id_sungai,
	        'desa' => $desa,
	        'id_kecamatan' => $id_kecamatan,
	        'id_kabupaten' => $id_kabupaten,
	        'latitude' => $latitude,
	        'longitude' => $longitude,
	        'jenis_bangunan' => $jenis_bangunan
			);
 
	$where = array(
		'id_tebing' => $id_tebing
	);
 
	$this->m_datatebing->update_data($where,$data,'td_tebing');
	redirect('crud3/index');
}
}