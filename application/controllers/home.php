<?php

class Home extends CI_Controller {

    function __construct() {

        parent::__construct();
            $this->load->library(array('ion_auth'));

            if (!$this->ion_auth->logged_in()) {
                redirect('/auth', 'refresh');
            }
        
        }

        function index(){
           
         
          $this->load->view('admin/home');
           // redirect(site_url().'search/all');
            

        }
        function ind(){
            echo "adf";
        }

 


        
}
?>
