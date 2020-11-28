<?php

class Saluran extends CI_Controller {

    function __construct() {

        parent::__construct();
            $this->load->library(array('ion_auth'));

            // if (!$this->ion_auth->logged_in()) {
            //     redirect('/auth', 'refresh');
            // }
        
        }

        function index(){
           
         
          $this->load->view('admin/bangunan');
           // redirect(site_url().'search/all');
            

        }
        function get_json_saluran(){
            $saluran=new M_saluran();
            echo json_encode($saluran->get_json());
        }

        function add(){
        	$this->load->view('admin/add_bangunan');
        }

        function edit($id){
        	$bangunan=new M_bangunan();
        	$bangunan->where('id_bangunan',$id);
        	$data['bangunan']=$bangunan->get();
        	$this->load->view('admin/edit_bangunan',$data);
        }
        function save_edit(){

        	// echo $this->input->post('nama_bangunan')."<br>";
        	// echo $this->input->post('koordinat_x_bangunan')."<br>";
        	// echo $this->input->post('koordinat_y_bangunan')."<br>";
        	// echo $this->input->post('kondisi_ada')."<br>";
        	// echo $this->input->post('konsep_penanganan')."<br>";  
        	$update = array(
        		'nama_bangunan' => $this->input->post('nama_bangunan') ,
        		'koordinat_x_bangunan' => $this->input->post('koordinat_x_bangunan'),
        		'koordinat_y_bangunan' => $this->input->post('koordinat_y_bangunan') ,
        		'kondisi_ada' => $this->input->post('kondisi_ada'),
        		'konsep_penanganan' => $this->input->post('konsep_penanganan')
        		);

        	$bangunan=new M_bangunan();
        	$bangunan->where('id_bangunan',$this->input->post('id_bangunan'));
        	$bangunan->update($update);
        	$this->session->set_flashdata('item','<div class="alert alert-success" role="alert">Data berhasil diperbarui</div>'); 
        	redirect('bangunan/edit/'.$this->input->post('id_bangunan'));
        }

 


        
}
?>
