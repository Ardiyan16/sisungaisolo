<?php

class Csv extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('csv_model'); //meload csv_model
        $this->load->library('csvimport'); //meload library csvimport.php
    }

    function index() {
         
        $this->load->view('csv_view');
    }

    function index_detail_patok(){
        $this->load->view('csv_detail_patok');
    }

    function importcsv() {

        $data['error'] = '';    //initialize image upload error array to empty

        //convigure upload 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);


        // jika upload gagal, muncul error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('csv_view', $data);
        } else {

            //prosses upload csv berhasil serta memproses insert data ke database
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            $id_daerah = $this->input->post('daerah');
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_patok = array(
                        'id_patok'=>$row['No'],
                        'id_daerah'=>$id_daerah,
                        'ruas_sungai'=>$row['Ruas'],
                        'kapasitas_sungai'=>$row['Kapasitas'],
                        'lat_patok' => $row['Lat'],
                        'long_patok' => $row['Long']
                    );
                    // $insert_detail_patok = array(
                    //     'id_patok'=>$row['No'],
                    //     'id_daerah'=>$id_daerah,
                    //     'ruas_sungai'=>$row['Ruas'],
                    //     'kapasitas_sungai'=>$row['Kapasitas'],
                    //     'lat_patok' => $row['Lat'],
                    //     'long_patok' => $row['Long']
                    // );
                    $this->csv_model->insert_csv('patok',$insert_patok);
                }
                // $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv');
                // print_r($csv_array[0]);
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('csv_view', $data);
            }  
        }

        function importcsv_detail_patok() {

        $data['error'] = '';    //initialize image upload error array to empty

        //convigure upload 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);


        // jika upload gagal, muncul error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('csv_view', $data);
        } else {

            //prosses upload csv berhasil serta memproses insert data ke database
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            $id_daerah = $this->input->post('daerah');
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $id_patok = $this->csv_model->select_where_csv('patok', array('ruas_sungai' => $row['Ruas'],
                                                                                  'id_daerah' => $row['SWD']));
                   // echo $id_patok[0]['id_patok'];
                   //  echo "<br>";
                    $insert_detail_patok = array(
                        'id_patok'=>$id_patok[0]['id_patok'],
                        'kondisi'=>$row['KondisiTanggul'],
                        'konsep_penanganan'=>$row['Tindakan'],
                        'tingkat_resiko'=>$row['ResikoAngka'],
                        'jenis_patok' => $row['Jenis_patok']
                    );
                    // $insert_detail_patok = array(
                    //     'id_patok'=>$row['No'],
                    //     'id_daerah'=>$id_daerah,
                    //     'ruas_sungai'=>$row['Ruas'],
                    //     'kapasitas_sungai'=>$row['Kapasitas'],
                    //     'lat_patok' => $row['Lat'],
                    //     'long_patok' => $row['Long']
                    // );
                    $this->csv_model->insert_csv('detail_patok',$insert_detail_patok);
                }
                // $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv/index_detail_patok');
                // print_r($csv_array[0]);
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('csv_view', $data);
            }  
        }  
}