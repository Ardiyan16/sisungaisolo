<?php

class crud1 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_datatanggul');
				$this->load->helper('url');
	}

	function index(){
		$data['td_tanggul'] = $this->m_datatanggul->tampil_data()->result();
		$this->load->view('v_tampiltanggul' ,$data);
	}

	function tambah(){
		$this->load->view('v_inputtanggul');
	}

	function tambah_aksi(){
		$fn_idtanggul = $this->input->post('fn_idtanggul');
		$id_sungai = $this->input->post('id_sungai');
		$fv_STA = $this->input->post('fv_STA');
		$fv_kodetitikawal = $this->input->post('fv_kodetitikawal');
		$fv_kodetitikakhir = $this->input->post('fv_kodetitikakhir');
		$fv_panjang = $this->input->post('fv_panjang');
		$fv_panjangkerusakan = $this->input->post('fv_panjangkerusakan');
		$fv_desa = $this->input->post('fv_desa');
		$fv_kecamatan = $this->input->post('fv_kecamatan');
		$fv_kabupaten = $this->input->post('fv_kabupaten');
		$fv_propinsi = $this->input->post('fv_propinsi');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$fv_hslpengamatan = $this->input->post('fv_hslpengamatan');
 
		$data = array(
			'fn_idtanggul' => $fn_idtanggul,
			'id_sungai' => $id_sungai,
			'fv_STA' => $fv_STA,
			'fv_kodetitikawal' => $fv_kodetitikawal,
			'fv_kodetitikakhir' => $fv_kodetitikakhir,
			'fv_panjang' => $fv_panjang,
			'fv_panjangkerusakan' => $fv_panjangkerusakan,
			'fv_desa' => $fv_desa,
			'fv_kecamatan' => $fv_kecamatan,
			'fv_kabupaten' => $fv_kabupaten,
			'fv_propinsi' => $fv_propinsi,
			'latitude' => $latitude,
			'latitude' => $longitude,
			'fv_hslpengamatan' => $fv_hslpengamatan,
			);
		$this->m_datatanggul->input_data($data,'td_tanggul');
		redirect('rekap_data/rekap_tanggul');
	}

	function edit($fn_idtanggul){
		$where = array('fn_idtanggul' => $fn_idtanggul);
		$data['td_tanggul'] = $this->m_datatanggul->edit_data($where,'td_tanggul')->result();
		$this->load->view('v_edittanggul',$data);
	}

	function hapus($fn_idtanggul){
		$where = array('fn_idtanggul' => $fn_idtanggul);
		$this->m_datatanggul->hapus_data($where,'td_tanggul');
		redirect('crud1/index');
	}
 
	function update(){
	$fn_idtanggul = $this->input->post('fn_idtanggul');
		$id_sungai = $this->input->post('id_sungai');
		$fv_STA = $this->input->post('fv_STA');
		$fv_kodetitikawal = $this->input->post('fv_kodetitikawal');
		$fv_kodetitikakhir = $this->input->post('fv_kodetitikakhir');
		$fv_panjang = $this->input->post('fv_panjang');
		$fv_panjangkerusakan = $this->input->post('fv_panjangkerusakan');
		$fv_desa = $this->input->post('fv_desa');
		$fv_kecamatan = $this->input->post('fv_kecamatan');
		$fv_kabupaten = $this->input->post('fv_kabupaten');
		$fv_propinsi = $this->input->post('fv_propinsi');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		$fv_hslpengamatan = $this->input->post('fv_hslpengamatan');
 
		$data = array(
			'fn_idtanggul' => $fn_idtanggul,
			'id_sungai' => $id_sungai,
			'fv_STA' => $fv_STA,
			'fv_kodetitikawal' => $fv_kodetitikawal,
			'fv_kodetitikakhir' => $fv_kodetitikakhir,
			'fv_panjang' => $fv_panjang,
			'fv_panjangkerusakan' => $fv_panjangkerusakan,
			'fv_desa' => $fv_desa,
			'fv_kecamatan' => $fv_kecamatan,
			'fv_kabupaten' => $fv_kabupaten,
			'fv_propinsi' => $fv_propinsi,
			'latitude' => $latitude,
			'latitude' => $longitude,
			'fv_hslpengamatan' => $fv_hslpengamatan,
			);
 
	$where = array(
		'fn_idtanggul' => $fn_idtanggul
	);
 
	$this->m_datatanggul->update_data($where,$data,'td_tanggul');
	redirect('rekap_data/rekap_tanggul');
}
}