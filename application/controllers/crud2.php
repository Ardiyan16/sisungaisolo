<?php

class crud2 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_datarever');
				$this->load->helper('url');
	}

	function index(){
		$data['td_rivertmen'] = $this->m_datarever->tampil_data()->result();
		$this->load->view('v_tampil2' ,$data);
	}

	function tambah(){
		$this->load->view('inputrever');
	}

	function tambah_aksi(){
		$fn_id_rivertmen = $this->input->post('fn_id_rivertmen');
		$fv_kodelok = $this->input->post('fv_kodelok');
		$fv_pjtotal = $this->input->post('fv_pjtotal');
		$fv_pjkr = $this->input->post('fv_pjkr');
		$ft_desa = $this->input->post('ft_desa');
		$ft_kec = $this->input->post('ft_kec');
		$ft_kab = $this->input->post('ft_kab');
		$ft_prop = $this->input->post('ft_prop');
		$fv_lintang = $this->input->post('fv_lintang');
		$fv_bujur = $this->input->post('fv_bujur');
		$fv_idsungai = $this->input->post('fv_idsungai');
 
		$data = array(
			'fn_id_rivertmen' => $fn_id_rivertmen,
			'fv_kodelok' => $fv_kodelok,
			'fv_pjtotal' => $fv_pjtotal,
			'fv_pjkr' => $fv_pjkr,
			'ft_desa' => $ft_desa,
			'ft_kec' => $ft_kec,
			'ft_kab' => $ft_kab,
			'ft_prop' => $ft_prop,
			'fv_lintang' => $fv_lintang,
			'fv_bujur' => $fv_bujur,
			'fv_idsungai' => $fv_idsungai
			
			);
		$this->m_datarever->input_data($data,'td_rivertmen');
		redirect('crud2/index');
	}

	function edit($fn_id_rivertmen){
		$where = array('fn_id_rivertmen' => $fn_id_rivertmen);
		$data['td_rivertmen'] = $this->m_datarever->edit_data($where,'td_rivertmen')->result();
		$this->load->view('edit2',$data);
	}

	function hapus($fn_id_rivertmen){
		$where = array('fn_id_rivertmen' => $fn_id_rivertmen);
		$this->m_datarever->hapus_data($where,'td_rivertmen');
		redirect('crud2/index');
	}

	function update(){
	$fn_id_rivertmen = $this->input->post('fn_id_rivertmen');
		$fv_kodelok = $this->input->post('fv_kodelok');
		$fv_pjtotal = $this->input->post('fv_pjtotal');
		$fv_pjkr = $this->input->post('fv_pjkr');
		$ft_desa = $this->input->post('ft_desa');
		$ft_kec = $this->input->post('ft_kec');
		$ft_kab = $this->input->post('ft_kab');
		$ft_prop = $this->input->post('ft_prop');
		$fv_lintang = $this->input->post('fv_lintang');
		$fv_bujur = $this->input->post('fv_bujur');
		$fv_idsungai = $this->input->post('fv_idsungai');
 
		$data = array(
			'fn_id_rivertmen' => $fn_id_rivertmen,
			'fv_kodelok' => $fv_kodelok,
			'fv_pjtotal' => $fv_pjtotal,
			'fv_pjkr' => $fv_pjkr,
			'ft_desa' => $ft_desa,
			'ft_kec' => $ft_kec,
			'ft_kab' => $ft_kab,
			'ft_prop' => $ft_prop,
			'fv_lintang' => $fv_lintang,
			'fv_bujur' => $fv_bujur,
			'fv_idsungai' => $fv_idsungai
			
			);
 
	$where = array(
		'fn_id_rivertmen' => $fn_id_rivertmen
	);
 
	$this->m_datarever->update_data($where,$data,'td_rivertmen');
	redirect('crud2/index');
}
}