<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peta_dashboard extends CI_Controller {

	 function __construct() {

        parent::__construct();
        //load model web
        $this->load->model('m_peta_coba');
        $this->load->model('m_line_patok');
        $this->load->model('m_detail_tebing');
    }


	function index() {
		$data['bangunan']  = $this->m_line_patok->get_infrastruktur();

        $data['ongoing']  = $this->m_line_patok->get_infrastruktur_ongoing();
        
        $data['internal'] = $this->m_line_patok->get_internal();
        
        $data['eksternal'] = $this->m_line_patok->get_eksternal();

        //$data['line_patok_new'] = $this->M_line_patok->get_peta($limit, $offset);
        
        $data['sungai'] = $this->m_line_patok->ambil_peta();
        $data['sungaine'] = $this->m_line_patok->ambil_sungai();
        
        //$data['line_patok_beng'] = $this->M_line_patok->get_beng_solo($limit, $offset);
        
        $data['data']=$this->m_line_patok->get_usulan();
        
        $data['rekap_terbangun']=$this->m_line_patok->rekap_terbangun();
        
        $data['rekap_ongoing']=$this->m_line_patok->get_infrastruktur_ongoing();
        
        $data['rekap_eksternal']=$this->m_line_patok->get_eksternal();
        
        $data['rekap_internal']=$this->m_line_patok->get_internal();
        
        $data['rekap_sungai']=$this->m_line_patok->get_sungai();
		$data['koordinat_sungai'] =  $this->m_peta_coba->get_data();
		$this->load->view('front/peta_coba', $data);
	}	

	 public function create_load($id){
        $data['data'] = $this->m_peta_coba->detail_peta($id)->row();
       // print_r($this->db->last_query());
        $this->load->view('front/load_detail', $data);
    }

    public function create_load_bangunan($id){
      $data['data_bangunan'] = $this->m_line_patok->detail_bangunan($id)->row();  
      $this->load->view('front/load_detail_bangunan', $data);  
    }

     public function create_load_ongoing($id){
      $data['data_ongoing'] = $this->m_line_patok->detail_ongoing($id)->row();   
      $this->load->view('front/load_detail_ongoing', $data);  
    }

    public function create_load_tanggul($id){
        $data['sungaine2'] = $this->m_line_patok->ambil_sungai();
         $sungaine = $this->m_line_patok->ambil_sungai();
         $sungaiArr = array();
            for ($i=0; $i < sizeof($sungaine); $i++) { 
                $sungaiArr[$i]= "anjing-".$sungaine[$i]['id_sungai'];
            }

        $data['id_sungai'] =   $sungaiArr;  
        $data['detail_tanggul'] = $this->m_line_patok->detail_item_tanggul($id);  
    
        $data['data_tanggul'] = $this->m_line_patok->detail_tanggul($id)->row();   
        $this->load->view('front/load_detail_tanggul', $data);  
    }

    public function create_load_pintu($id){
        $data['data_pintu'] = $this->m_line_patok->detail_pintu($id)->row();  
        $data['detail_pintu'] = $this->m_line_patok->detail_item_pintu($id);  
        $this->load->view('front/load_detail_pintu', $data);  
    }

    public function create_load_revertmen($id){
        $data['data_revertmen'] = $this->m_line_patok->detail_revertmen($id)->row();  
         $data['detail_revertmen'] = $this->m_line_patok->detail_item_revertmen($id);  
        // $this->table->set_heading(array('NO','Tanggal Inspeksi','Jenis Bangunan','Bagian Bangunan','Kerusakan','Usulan Perbaikan','Panjang','Lebar','Tinggi','Volume','Keterangan','Nilai Kinerja','Kinerja','Tindakan'));
        //     $tmp=array('table_open'=>'<table id="example0" class="table display" style="background-color: #fff;color: #000;" >',
        //                 'thead_open'=>'<thead>',
        //                 'thead_close'=> '</thead>',
        //                 'tbody_open'=> '<tbody>',
        //                 'tbody_close'=> '</tbody>',
        //     ); 
        //     $this->table->set_template($tmp);   
        $this->load->view('front/load_detail_revertmen', $data);  
    }

    public function create_load_tebing($id){
        $data['data_tebing'] = $this->m_line_patok->detail_tebing($id)->row();   
        $this->load->view('front/load_detail_tebing', $data);  
    }
    public function create_load_tebing2($id){
        $data['data_tebing'] = $this->m_line_patok->detail_tebing($id)->row();
        $data['detail_tebing'] = $this->m_line_patok->detail_item_tebing($id);  
        $this->table->set_heading(array('NO','Tanggal Inspeksi','Jenis Bangunan','Bagian Bangunan','Kerusakan','Usulan Perbaikan','Panjang','Lebar','Tinggi','Volume','Keterangan','Nilai Kinerja','Kinerja','Tindakan'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" style="background-color: #fff;color: #000;" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                ); 
            $this->table->set_template($tmp);  
        $this->load->view('front/load_detail_tebing2', $data);  
    }
    public function create_load_cekdam($id){
        $data['data_cekdam'] = $this->m_line_patok->detail_cekdam($id)->row(); 
      //  print_r($this->db->last_query());
        $data['detail_cekdam'] = $this->m_line_patok->detail_item_cekdam($id);  
        $this->load->view('front/load_detail_cekdam', $data);  
    }

    function map(){
         $data['sungaine2'] = $this->m_line_patok->ambil_sungai();
         $sungaine = $this->m_line_patok->ambil_sungai();
         //$notifArr = array();
         $sungaiArr = array();
            for ($i=0; $i < sizeof($sungaine); $i++) { 
               // $recipientArr[$i]=$data_drop[$i]['email'];
                $sungaiArr[$i]= "anjing-".$sungaine[$i]['id_sungai'];
            }

        $data['id_sungai'] =   $sungaiArr;  
        $data['ongoing']  = $this->m_line_patok->get_infrastruktur_ongoing();

        $data['bangunan']  = $this->m_line_patok->get_infrastruktur();
        $data['tanggul']  = $this->m_line_patok->get_dtanggul();
        $data['pintu']  = $this->m_line_patok->get_dpintu();
        $data['rever']  = $this->m_line_patok->get_drever();

        $data['tebing']  = $this->m_line_patok->get_dtebing();
        $data['cekdam']  = $this->m_line_patok->get_dcekdam();

        $data['koordinat']  = $this->m_line_patok->get_koordinat_tanggul();

        $this->load->view('front/map_gl', $data);
    }

    function map_kml(){
        $this->load->view('front/map_kml');
    }    

	// function index(){
	// 	 $blog = $this->m_peta_coba->get_data();
	// 	 //print_r($this->db->last_query());
 //        //masukkan data kedalam variabel
 //      	//$data['blog'] = $blog;
 //        // //deklarasi variabel array
 //           $response = array();
 //           $posts = array();
 //        // // //lopping data dari database
 //        foreach ($blog as $hasil)
 //        {
 //            $posts[] = array(
 //                 "id_koordinat"                 =>  $hasil->id_koordinat,
 //            );
 //        }

 //      //  print_r($data['blog']);
 //        // $response['blog'] = $posts;
 //        // header('Content-Type: application/json');
 //        // echo json_encode($response,TRUE);
    // }
    
    public function ajax_list_tebing(){
        $list = $this->M_detail_tebing->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->tanggal_inspeksi;
            $row[] = $produk->tjenis_bgn;
            $row[] = $produk->tbagian_bgn;
            $row[] = $produk->tkerusakan;
            $row[] = $produk->tusulan_pbk;
            $row[] = $produk->tpanjang;
            $row[] = $produk->tlebar;
            $row[] = $produk->ttinggi;
            $row[] = $produk->tvolume;
            $row[] = $produk->tket;
            $row[] = $produk->tn_kinerja;
            $row[] = $produk->tkinerja;
            $row[] = $produk->ttindakan;

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->M_detail_tebing->count_all(),
                        "recordsFiltered" => $this->M_detail_tebing->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    function api_infrastruktur_ongoing(){
        $query = $this->m_line_patok->get_api_infrastruktur_ongoing()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['longitude'],
                                (float)$value['latitude']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['id_infrastruktur_ongoing'],
                            'nama' => $value['nama_paket'] ,
                            'foto' => $value['foto_1']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_infrastruktur_terbangun(){
        $query = $this->m_line_patok->get_api_infrastruktur_terbangun()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['longitude'],
                                (float)$value['latitude']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['id_infrastuktur'],
                            'nama' => $value['nama_paket'] ,
                            'foto' => $value['foto_1']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_tanggul(){
        $query = $this->m_line_patok->get_api_tanggul()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['longitude'],
                                (float)$value['latitude']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['fn_idtanggul'],
                            'nama' => $value['fv_STA'] ,
                            //'foto' => $value['foto_1']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_pintu(){
        $query = $this->m_line_patok->get_api_pintu()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['fv_bujur'],
                                (float)$value['fv_lintang']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['fv_idpintu'],
                            'nama' => $value['fv_identifikasi'] ,
                            'foto' => $value['fv_dokumentasi'],
                            'kode_lokasi' => $value['fv_kodelokasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_revertmen(){
        $query = $this->m_line_patok->get_api_revertmen()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['fv_bujur'],
                                (float)$value['fv_lintang']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['fn_id_rivertmen'],
                            'nama' => $value['fv_kodelok'] ,
                           // 'foto' => $value['fv_dokumentasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_tebing(){
        $query = $this->m_line_patok->get_api_tebing()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['longitude'],
                                (float)$value['latitude']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['id_tebing'],
                            'nama' => $value['jenis_bangunan'] ,
                            //'foto' => $value['fv_dokumentasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_cekdam(){
        $query = $this->m_line_patok->get_api_cekdam()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['longitude'],
                                (float)$value['latitude']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['id_cekdam'],
                            'nama' => $value['nama_cekdam'] ,
                            //'foto' => $value['fv_dokumentasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_usulan_internal(){
        $query = $this->m_line_patok->get_api_usulan_internal()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['longitude'],
                                (float)$value['latitude']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['id_usulan'],
                            'nama' => $value['detail_usulan'] ,
                            //'foto' => $value['fv_dokumentasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_usulan_eksternal(){
        $query = $this->m_line_patok->get_api_usulan_eksternal()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                (float)$value['longitude'],
                                (float)$value['latitude']
                            ),
                            'type' => 'Point', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['id_usulan'],
                            'nama' => $value['detail_usulan'] ,
                            //'foto' => $value['fv_dokumentasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_koordinat_tanggul(){
        $query = $this->m_line_patok->get_api_koordinat_tanggul()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                // (float)$value['fv_longitude_awal'],
                                // (float)$value['fv_latitude_awal']
                                array((float)$value['fv_longitude_awal'], 
                                (float)$value['fv_latitude_awal']),
                                array((float)$value['fv_longitude_akhir'], 
                                (float)$value['fv_latitude_akhir']),  
                            ),
                            'type' => 'LineString', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['fn_idtanggul'],
                            'nama' => $value['nama_sungai'] ,
                            //'foto' => $value['fv_dokumentasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

    function api_koordinat_sungai(){
        $query = $this->m_line_patok->get_api_koordinat_sungai()->result_array();
        $jsonData =json_encode($query);
        $original_data = json_decode($jsonData, true);

        $coordinates = array();
        $features = array();
        //$coordinates2 = array();
        foreach($original_data as $value) {
                $features[] = array(
                        
                        'geometry' => array(
                            'coordinates' => array( 
                                // (float)$value['fv_longitude_awal'],
                                // (float)$value['fv_latitude_awal']
                                array((float)$value['longitude_awal'], 
                                (float)$value['latitude_awal']),
                                array((float)$value['longitude_akhir'], 
                                (float)$value['latitude_akhir']),  
                            ),
                            'type' => 'LineString', 
                        ),
                        'type' => 'Feature',
                        'properties' => array(
                            'id' =>$value['id_sungai'],
                            'NAMA_SUNGAI' => $value['nama_sungai'] ,
                            'Foto' => $value['foto_1'] ,
                            'color' => "blue"
                            //'foto' => $value['fv_dokumentasi']
                        )
                );

         }
        $new_data = array(
            'type' => 'FeatureCollection',
            'features' => $features
        );

        //$final_data = json_encode($new_data);
        //$data['type'] = 'FeatureCollection';
        die(json_encode($new_data));
    }

}	