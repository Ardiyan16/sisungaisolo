<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct() {

        parent::__construct();
        //load model web
        $this->load->model('m_dashboard');
    }


	function index() {
		$data['koordinat_sungai'] =  $this->m_dashboard->get_data();
		$this->load->view('front/peta_dashboard', $data);
	}	

	 public function create_load($id){
        $data['data'] = $this->m_dashboard->detail_peta($id)->row();
       // print_r($this->db->last_query());
        $data['data_foto'] = $this->m_dashboard->detail_peta($id)->result();
        $data['data_study'] = $this->m_dashboard->get_study($id)->result();
        $this->load->view('front/peta_dashboard', $data);
    }

}	