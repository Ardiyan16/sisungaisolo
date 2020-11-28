<?php

class Admin extends CI_Controller {

    function __construct() {

        parent::__construct();
            // $this->load->library(array('ion_auth'));

            // if (!$this->ion_auth->logged_in()) {
            //     redirect('/auth', 'refresh');
            // }
        $this->auth->restrict();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->library("session");

        }

        function index(){
          

        $data['view_file']    = "admin_view/moduls/view_home";
        $this->load->view('admin_view/admin',$data);
           // redirect(site_url().'search/all');


        }
        function ind(){
            echo "adf";
        }





}
?>
