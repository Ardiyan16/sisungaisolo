<?php (defined('BASEPATH')) or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Html;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Rekap_data extends CI_Controller {

    function __construct() {

        parent::__construct();
        $this->load->model('Mdl_rekap');
        $this->load->model('M_line_patok');
        $this->load->model('Mdl_terbangun');
        $this->load->model('Mdl_tanggul');
        $this->load->model('Mdl_rever');
        $this->load->model('Mdl_pintu');
        $this->load->model('Mdl_cekdam');
        $this->load->model('Mdl_tebing');
        $this->load->model('Mdl_ongoing');
        $this->load->model('Mdl_ongoing_id');
        $this->load->model('Mdl_tebing_id');
        $this->load->model('Mdl_tanggul_id');
        $this->load->model('Mdl_revertmen_id');
        $this->load->model('Mdl_pintu_id');
        $this->load->model('Mdl_cekdam_id');
        $this->load->model('Mdl_history_id');
        $this->load->model('Mdl_internal');
        $this->load->model('Mdl_eksternal');
        $this->load->model('Mdl_dipa');
        $this->load->model('Mdl_orde1_id');
        $this->load->model('Mdl_usulan');
        $this->load->model('M_line_patok');
        $this->load->model('Mdl_history');
        $this->load->helper('number');
		$this->load->library('form_validation');
		$this->load->helper('file');
      //  $this->auth->restrict2();
    }

    public function dashboard2(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
        $this->load->view('dashboard/header_dashboard');
        $data['grafik_lokal'] = $this->Mdl_rekap->grafik_lokal();
        $data['grafik_internal'] = $this->Mdl_rekap->grafik_internal();
        $data['grafik_usulan'] = $this->Mdl_rekap->grafik_usulan();
        $data['grafik_terbangun'] = $this->Mdl_rekap->grafik_terbangun();
        $data['grafik_lanjut'] = $this->Mdl_rekap->grafik_lanjut();
       // print_r($this->db->last_query());
        $data['orde_1'] = $this->Mdl_rekap->count_orde_1();
        $data['orde_2'] = $this->Mdl_rekap->count_orde_2();
        $data['orde_3'] = $this->Mdl_rekap->count_orde_3();
        $data['terbangun'] = $this->Mdl_rekap->count_terbangun();
        $data['ongoing'] = $this->Mdl_rekap->count_ongoing();
        $data['usulan'] = $this->Mdl_rekap->count_usulan();

        $data['parapet'] = $this->Mdl_rekap->parapet();

        $data['revetment'] = $this->Mdl_rekap->revetment();
       // print_r($this->db->last_query());
        $data['tanggul_tanah'] = $this->Mdl_rekap->tanggul_tanah();
        $data['bendung'] = $this->Mdl_rekap->bendung();
        $data['cekdam'] = $this->Mdl_rekap->cekdam();
        $data['pompa_air'] = $this->Mdl_rekap->pompa_air();
        $data['pintu_air'] = $this->Mdl_rekap->pintu_air();
       // print_r($this->db->last_query());
        $this->load->view('dashboard/view_dashboard', $data);
        $this->load->view('dashboard/footer_dashboard'); 
    }

    public function load_panjang($id_blok){
        echo $this->show_panjang($id_blok);
        
    }

    public function show_panjang($id_blok){
        if ($id_blok==0) {
            $id_blok="";
        }

        $list_sungai = $this->Mdl_rekap->get_panjang($id_blok);
      // print_r($this->db->last_query());
        //$panjang = 0;

       

        $output = '';

        $output .=  $list_sungai->panjang_sungai
        ;

        return $output;
    }

    public function load_cetak($id_blok){
        echo $this->show_cetak($id_blok);
    }

    public function show_cetak($id_blok){
        // if ($id_blok==0) {
        //     $id_blok="";
        // }

        $output = '';

        $output .=  '
                 "<p><a href="'.base_url('peta/export_excel_sungai/'.$id_blok).'" class="btn btn-success"><i class="fa fa-print"></i>Export ke Excel</a></p>"';
        

        return $output;
    }    

    public function create_orde2($id){
      $data['data'] = $this->M_line_patok->data_orde2($id);  
      $this->table->set_heading(array('NO','Nama Sungai',' Orde Sungai','Panjang Sungai','Tahun Data'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
      $this->load->view('dashboard/load_detail_orde2', $data);  
    }

    function ajax_list_orde1_id(){
        $kode = $this->uri->segment(3);
         $list = $this->Mdl_orde1_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        $km=' km';
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->nama_sungai;
            $row[] = $orde->orde_sungai;
            $row[] = $orde->panjang_sungai.$km;
            $row[] = $orde->tahun_data;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_orde1_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_orde1_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    function ajax_list_orde2_id(){
         $kode = $this->uri->segment(3);
         $list = $this->Mdl_orde1_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        $km=' km';
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->nama_sungai;
            $row[] = $orde->orde_sungai;
            $row[] = $orde->panjang_sungai.$km;
            $row[] = $orde->tahun_data;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_orde1_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_orde1_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    function ajax_list_orde3_id(){
         $kode = $this->uri->segment(3);
         $list = $this->Mdl_orde1_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        $km=' km';
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->nama_sungai;
            $row[] = $orde->orde_sungai;
            $row[] = $orde->panjang_sungai.$km;
            $row[] = $orde->tahun_data;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_orde1_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_orde1_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function create_terbangun(){
      $data['terbangun'] = $this->M_line_patok->data_terbangun();  
      $this->table->set_heading(array('NO','Nama Paket / Bangunan','Penyedia Jasa Konstruksi','Tahun Selesai','Item Pekerjaan','Volume','Latitude','Longitude','Keterangan','Penilaian Kinerja','AKNOP','Tahun Data'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
      $this->load->view('dashboard/load_detail_Terbangun', $data);  
    }

     public function create_ongoing(){
      
        $data['ongoing']=$this->M_line_patok->data_ongoing();
        $this->table->set_heading(array('NO','No Reg','Nama Paket / Bangunan','Penyedia Jasa Konstruksi','Masa Konstruksi','Item Pekerjaan','Jenis Pekerjaan','Volume','Latitude','Longitude','Keterangan','Tahun Data'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
        $this->load->view('dashboard/load_detail_ongoing', $data);
        // $this->load->view('dashboard/footer_dashboard');  
    }

    public function create_usulan(){
      
        $data['usulan']=$this->M_line_patok->data_usulan();
        $this->table->set_heading(array('NO','ID Usulan','Tanggal usulan','Pengirim Usulan','Detail Usulan','Latitude','Longitude','Tindak Lanjut','Keterangan'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
        $this->load->view('dashboard/load_detail_usulan', $data);

    }

     public function rekap_sungai(){
        $this->load->view('dashboard/header_dashboard');
        $data['rekap_sungai']=$this->M_line_patok->get_sungai();
        $this->table->set_heading(array('NO','Nama Sungai',' Orde Sungai','Panjang Sungai','Tahun Data','Wilayah Administrasi'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
        $this->load->view('dashboard/view_rekap_sungai', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    // public function rekap_terbangun(){
    //     $this->load->view('dashboard/header_dashboard');
    //     $data['rekap_terbangun']=$this->M_line_patok->rekap_terbangun();
    //     $this->table->set_heading(array('NO','Nama Paket / Bangunan','Penyedia Jasa Konstruksi','Tahun Selesai','Item Pekerjaan','Volume','Satuan','Latitude','Longitude','Keterangan','Penilaian Kinerja','AKNOP','Tahun Data'));
    //         $tmp=array('table_open'=>'<table id="example0" class="table display" >',
    //                     'thead_open'=>'<thead>',
    //                     'thead_close'=> '</thead>',
    //                     'tbody_open'=> '<tbody>',
    //                     'tbody_close'=> '</tbody>',
    //             );
    //         $this->table->set_template($tmp);
    //     $this->load->view('dashboard/view_rekap_terbangun', $data);
    //     $this->load->view('dashboard/footer_dashboard');
    // }

    public function rekap_terbangun(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
         $this->load->view('dashboard/header_dashboard');
         $this->load->view('dashboard/view_rekap_terbangun2');
         $this->load->view('dashboard/footer_dashboard');
    }  

    public function rekap_tanggul(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
         $this->load->view('dashboard/header_dashboard');
         $this->load->view('dashboard/view_rekap_tanggul');
         $this->load->view('dashboard/footer_dashboard');
    }
    public function ajax_list_tanggul(){
        $list = $this->Mdl_tanggul->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->fv_STA;
            $row[] = $produk->fv_kodetitikawal;
            $row[] = $produk->fv_kodetitikakhir;
            $row[] = $produk->fv_panjang;
            $row[] = $produk->fv_panjangkerusakan;
            $row[] = $produk->fv_desa;
            $row[] = $produk->fv_kecamatan;
            $row[] = $produk->fv_kabupaten;
            $row[] = $produk->longitude;
            $row[] = $produk->latitude;
            $row[] = $produk->fv_propinsi;
            $row[] = '<a href="javascript:void(0)" class="btn btn-default" onclick="detail_kinerja_tanggul('."'".$produk->fn_idtanggul."'".')">Klik Untuk Detail</a>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_tanggul->count_all(),
                        "recordsFiltered" => $this->Mdl_tanggul->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function rekap_rever(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
         $this->load->view('dashboard/header_dashboard');
         $this->load->view('dashboard/view_rekap_rever');
         $this->load->view('dashboard/footer_dashboard');
    }
    public function ajax_list_rever(){
        $list = $this->Mdl_rever->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->fv_sta;
            $row[] = $produk->fv_kodelok;
            $row[] = $produk->fv_pjtotal;
            $row[] = $produk->fv_pjkr;
            $row[] = $produk->ft_desa;
            $row[] = $produk->ft_kec;
            $row[] = $produk->ft_kab;
            $row[] = $produk->ft_prop;
            $row[] = $produk->fv_lintang;
            $row[] = $produk->fv_bujur;
            // $row[] = $produk->fv_idsungai;
            $row[] = '<a href="javascript:void(0)" class="btn btn-default" onclick="detail_kinerja_revertmen('."'".$produk->fn_id_rivertmen."'".')">Klik Untuk Detail</a>';
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_rever->count_all(),
                        "recordsFiltered" => $this->Mdl_rever->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function rekap_pintu(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
         $this->load->view('dashboard/header_dashboard');
         $this->load->view('dashboard/view_rekap_pintu');
         $this->load->view('dashboard/footer_dashboard');
    }

    public function ajax_list_pintu(){
        $list = $this->Mdl_pintu->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->fv_kodelokasi;
            $row[] = $produk->fv_desa;
            $row[] = $produk->fv_kecamatan;
            $row[] = $produk->fv_kabupaten;
            $row[] = $produk->fv_provinsi;
            $row[] = $produk->fv_lintang;
            $row[] = $produk->fv_bujur;
            $row[] = '<a href="javascript:void(0)" class="btn btn-default" onclick="detail_kinerja_pintu('."'".$produk->fv_idpintu."'".')">Klik Untuk Detail</a>';
            
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_pintu->count_all(),
                        "recordsFiltered" => $this->Mdl_pintu->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function rekap_cekdam(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
         $this->load->view('dashboard/header_dashboard');
         $this->load->view('dashboard/view_rekap_cekdam');
         $this->load->view('dashboard/footer_dashboard');
    }

    public function ajax_list_cekdam(){
        $list = $this->Mdl_cekdam->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[]= $produk->nama_cekdam;
            $row[]= $produk->nama_kecamatan;
            $row[]= $produk->nama_kabupaten;   
            $row[]= $produk->nama_prop;
            $row[]= $produk->latitude;
            $row[]= $produk->longitude;
            $row[] = '<a href="javascript:void(0)" class="btn btn-default" onclick="detail_kinerja_cekdam('."'".$produk->id_cekdam."'".')">Klik Untuk Detail</a>';
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_cekdam->count_all(),
                        "recordsFiltered" => $this->Mdl_cekdam->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function rekap_tebing(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
         $this->load->view('dashboard/header_dashboard');
         $this->load->view('dashboard/view_rekap_tebing');
         $this->load->view('dashboard/footer_dashboard');
    }

     public function ajax_list_tebing(){
        $list = $this->Mdl_tebing->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;            
            // $row[]=$produk->id_tebing;
            $row[]=$produk->nama_sungai;
            $row[]=$produk->desa;
            $row[]=$produk->nama_kecamatan;
            $row[]=$produk->nama_kabupaten;
            $row[]=$produk->latitude;
            $row[]=$produk->longitude;
            $row[] = '<a href="javascript:void(0)" class="btn btn-default" onclick="detail_paket('."'".$produk->id_tebing."'".')">Klik Untuk Detail</a>';
            //$row[]=$produk->jenis_bangunan;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_tebing->count_all(),
                        "recordsFiltered" => $this->Mdl_tebing->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function history(){
         $this->load->view('dashboard/header_dashboard');
         $this->load->view('dashboard/view_history');
         $this->load->view('dashboard/footer_dashboard');
    }

     public function ajax_list_history(){
        $list = $this->Mdl_history->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no; 
            $row[]=$produk->nama_sungai;
            $row[]=$produk->orde_sungai;
            $row[]=str_replace(",",".",$produk->panjang_sungai);
            $row[] = '<a href="javascript:void(0)" class="btn btn-default btn-block" onclick="detail_paket('."'".$produk->id_sungai."'".')">Klik Untuk Detail</a>';
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_history->count_all(),
                        "recordsFiltered" => $this->Mdl_history->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

     function ajax_list_history_id(){
        $kode = $this->uri->segment(3);
        $list = $this->Mdl_history_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            // $row[]=$orde->id_tindaklanjut;     
            // $row[]=$orde->id_sungai;   
            
            $row[]=$orde->letak;
            $row[]=$orde->STA;     
            $row[]=$orde->kodetitikawal;   
            $row[]=$orde->kodetitikakhir;
            $row[]=$orde->panjang;
            $row[]=$orde->panjangkerusakan;
            $row[]=$orde->desa;
            $row[]=$orde->nama_kecamatan;
            $row[]=$orde->nama_kabupaten;
            $row[]=$orde->nama_prop;
            $row[]=$orde->jenis_konstruksi;
            $row[]=$orde->latitude_awal;
            $row[]=$orde->longitude_awal;
            $row[]=$orde->latitude_akhir;
            $row[]=$orde->longitude_akhir;
            $row[]=$orde->identifikasi;
            $row[]=$orde->kondisi;
            $row[]=$orde->fungsi;
            $row[]=$orde->kinerja;

            $row[]="Rp. ".number_format($orde->operasi_rp,2,',','.');
            $row[]="Rp. ".number_format($orde->rutin_rp,2,',','.');
            $row[]="Rp. ".number_format($orde->berkala_rp,2,',','.');
            $row[]="Rp. ".number_format($orde->total_rp,2,',','.');
            
            $row[]=$orde->rencana;
            if($orde->dokumentasi!=""){
                if ($orde->dokumentasi2=="") {
                    $row[]="<img src='".base_url()."assets/images/tindaklanjut/".$orde->dokumentasi."'>";
                }
                else{
                    $row[]="<img src='".base_url()."assets/images/tindaklanjut/".$orde->dokumentasi."'>&nbsp;<img src='".base_url()."assets/images/tindaklanjut/".$orde->dokumentasi2."'>";     
                }         
            }
            else{
                $row[]="Tidak Ada Dokumentasi";
            }
            $row[]="<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Baik)</font>".$orde->b_kondisi_kinerja."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->b_panjang."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Cukup Baik)</font>".$orde->cb_kondisi_kinerja."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->cb_panjang."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Rusak)</font>".$orde->r_kondisi_kinerja."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->r_panjang;
            $row[]="<font style='margin-left:32px;padding-right: 20px; font-weight:bold;'>(Sangat Baik)</font>".$orde->sb_fisik."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->sb_fisik_p."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Baik)</font>".$orde->b_fisik."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->b_fisik_p."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Cukup Baik)</font>".$orde->cb_fisik."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->cb_fisik_p."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Jelek)</font>".$orde->j_fisik."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->j_fisik_p;
            $row[]="<font style='margin-left:21px;padding-right: 20px; font-weight:bold;'>(Sangat Baik)</font>".$orde->sb_fungsi."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->sb_fungsi_p."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Baik)</font>".$orde->b_fungsi."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->b_fungsi_p."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Cukup Baik)</font>".$orde->cb_fungsi."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->cb_fungsi_p."<font style='margin-left:20px;padding-right: 20px; font-weight:bold;'>(Jelek)</font>".$orde->j_fungsi."<font style='margin-left:20px;padding-right: 20px;'>Panjang</font>".$orde->j_fungsi_p;
            $row[]=$orde->tindaklanjut;
            $data[] = $row;
        }
        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_history_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_history_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }
   

    function ajax_list_tebing_id(){
        $kode = $this->uri->segment(3);
         $list = $this->Mdl_tebing_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->tahun;
            $row[] = $orde->bulan;
            $row[] = $orde->tjenis_bgn; 
            $row[] = $orde->tbagian_bgn;
            $row[] = $orde->tkerusakan;
            $row[] = $orde->tusulan_pbk;
            $row[] = $orde->tpanjang; 
            $row[] = $orde->tlebar;
            $row[] = $orde->ttinggi;
            $row[] = $orde->tvolume;
            $row[] = $orde->tket;
            $row[] = $orde->tn_kinerja;
            $row[] = $orde->tkinerja;
            $row[] = $orde->ttindakan;
            //$row[] = $orde->nama_pegawai;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_tebing_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_tebing_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }
    
    function ajax_list_tanggul_id(){
        $kode = $this->uri->segment(3);
        $list = $this->Mdl_tanggul_id->get_datatables($kode);
    //    print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->tahun;
            $row[] = $orde->bulan;
            $row[] = $orde->tjenis_bgn; 
            $row[] = $orde->tbagian_bgn;
            $row[] = $orde->tkerusakan;
            $row[] = $orde->tusulan_pbk;
            $row[] = $orde->tpanjang; 
            $row[] = $orde->tlebar;
            $row[] = $orde->ttinggi;
            $row[] = $orde->tvolume;
            $row[] = $orde->tket;
            $row[] = $orde->tn_kinerja;
            $row[] = $orde->tkinerja;
            $row[] = $orde->ttindakan;
            $row[] = $orde->nama_petugas;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_tanggul_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_tanggul_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }
    
    function ajax_list_pintu_id(){
        $kode = $this->uri->segment(3);
        $list = $this->Mdl_pintu_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->tahun;
            $row[] = $orde->bulan; 
            $row[] = $orde->tjenis_bgn; 
            $row[] = $orde->tbagian_bgn;
            $row[] = $orde->tkerusakan;
            $row[] = $orde->tusulan_pbk;
            $row[] = $orde->tpanjang; 
            $row[] = $orde->tlebar;
            $row[] = $orde->ttinggi;
            $row[] = $orde->tvolume;
            $row[] = $orde->tket;
            $row[] = $orde->tn_kinerja;
            $row[] = $orde->tkinerja;
            $row[] = $orde->ttindakan;
            $row[] = $orde->nama_petugas;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_pintu_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_pintu_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }
    
    function ajax_list_cekdam_id(){
        $kode = $this->uri->segment(3);
        $list = $this->Mdl_cekdam_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->tahun;
            $row[] = $orde->bulan;
            $row[] = $orde->tjenis_bgn; 
            $row[] = $orde->tbagian_bgn;
            $row[] = $orde->tkerusakan;
            $row[] = $orde->tusulan_tindakan;
            $row[] = $orde->tvolume;
            $row[] = $orde->tket;
            $row[] = $orde->tn_kinerja;
            $row[] = $orde->tkinerja;
            $row[] = $orde->tpekerjaan_perbaikan;
            $row[] = $orde->nama_petugas;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_cekdam_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_cekdam_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }
    
    public function ajax_list_revertmen_id(){
        
        $kode = $this->uri->segment(3);
        $list = $this->Mdl_revertmen_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->tahun;
            $row[] = $orde->bulan;
            $row[] = $orde->tjenis_bgn; 
            $row[] = $orde->tbagian_bgn;
            $row[] = $orde->tkerusakan;
            $row[] = $orde->tpanjang; 
            $row[] = $orde->tlebar;
            $row[] = $orde->ttinggi;
            $row[] = $orde->tvolume;
            $row[] = $orde->tket;
            $row[] = $orde->tn_kinerja;
            $row[] = $orde->tkinerja;
            $row[] = $orde->ttindakan;
            $row[] = $orde->tusulan_pbk;
            $row[] = $orde->nama_petugas;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_revertmen_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_revertmen_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
        
    }

    public function ajax_list_terbangun(){
        $list = $this->Mdl_terbangun->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->nama_paket;
            $row[] = $produk->penyedia_jasa_konstruksi;
            $row[] = $produk->masa_konstruksi;
            $row[] = $produk->item_pekerjaan;
            $row[] = $produk->volume;
            $row[] = $produk->satuan;
            $row[] = $produk->latitude;
            $row[] = $produk->longitude;
            $row[] = $produk->keterangan;
            $row[] = $produk->penilaian_kinerja;
            $row[] = $produk->aknop;
            $row[] = $produk->tahun_data;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_terbangun->count_all(),
                        "recordsFiltered" => $this->Mdl_terbangun->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }  

    // public function rekap_ongoing(){
    //     $this->load->view('dashboard/header_dashboard');
    //     $data['rekap_ongoing']=$this->M_line_patok->get_infrastruktur_ongoing();
    //     $this->table->set_heading(array('NO','No Reg','Nama Paket / Bangunan','Penyedia Jasa Konstruksi','Masa Konstruksi','Item Pekerjaan','Jenis Pekerjaan','Keterangan','Tahun Data'));
    //         $tmp=array('table_open'=>'<table id="example0" class="table display" >',
    //                     'thead_open'=>'<thead>',
    //                     'thead_close'=> '</thead>',
    //                     'tbody_open'=> '<tbody>',
    //                     'tbody_close'=> '</tbody>',
    //             );
    //         $this->table->set_template($tmp);
    //     $this->load->view('dashboard/view_rekap_ongoing', $data);
    //     $this->load->view('dashboard/footer_dashboard');
    // }

    public function rekap_ongoing(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/view_rekap_ongoing2');
        $this->load->view('dashboard/footer_dashboard');
    }  

    function peta_dashboard(){
        // if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
         $data['internal'] = $this->M_line_patok->get_internal();
        
         $data['eksternal'] = $this->M_line_patok->get_eksternal();   
         $data['ongoing']  = $this->M_line_patok->get_infrastruktur_ongoing();

         $data['bangunan']  = $this->M_line_patok->get_infrastruktur();
         $data['sungaine2'] = $this->M_line_patok->ambil_sungai();

         $data['tanggul']  = $this->M_line_patok->get_dtanggul();
         $data['pintu']  = $this->M_line_patok->get_dpintu();
         $data['rever']  = $this->M_line_patok->get_drever();
         $data['tebing']  = $this->M_line_patok->get_dtebing();
        $data['cekdam']  = $this->M_line_patok->get_dcekdam();

        $data['koordinat']  = $this->M_line_patok->get_koordinat_tanggul();
         $this->load->view('dashboard/map_gl_dashboard', $data);
    }

    public function ajax_list_ongoing(){
        $list = $this->Mdl_ongoing->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->no_reg;
            $row[] = $produk->nama_paket;
            $row[] = $produk->penyedia_jasa_konstruksi;
            $row[] = $produk->masa_konstruksi;
            $row[] = '<a href="javascript:void(0)" class="btn btn-default" onclick="detail_paket('."'".$produk->id_infrastruktur_ongoing."'".')">Klik Untuk Detail</a>';
            $row[] = $produk->jenis_pekerjaan;
            $row[] = $produk->keterangan;
            $row[] = $produk->tahun_data;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_ongoing->count_all(),
                        "recordsFiltered" => $this->Mdl_ongoing->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    } 

    // public function rekap_eksternal(){
    //     $this->load->view('dashboard/header_dashboard');
    //     $data['rekap_eksternal']=$this->M_line_patok->get_eksternal();
    //     $this->table->set_heading(array('NO','Tanggal Usulan','Pengirim Usulan',' Detail Usulan','Koordinat Latitude','Koordinat Longitude','Tindak Lanjut','Keterangan','Nama Pengirim','Email Pengirim','No Hp Pengirim'));
    //         $tmp=array('table_open'=>'<table id="example0" class="table display" >',
    //                     'thead_open'=>'<thead>',
    //                     'thead_close'=> '</thead>',
    //                     'tbody_open'=> '<tbody>',
    //                     'tbody_close'=> '</tbody>',
    //             );
    //         $this->table->set_template($tmp);
    //     $this->load->view('dashboard/view_rekap_eksternal', $data);
    //     $this->load->view('dashboard/footer_dashboard');
    // }

     public function rekap_eksternal(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/view_rekap_eksternal2');
        $this->load->view('dashboard/footer_dashboard');
    }

    function ajax_list_eksternal(){
        $list = $this->Mdl_eksternal->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->tanggal_usulan;
            $row[] = $produk->pengirim_usulan;
            $row[] = $produk->detail_usulan;
            $row[] = $produk->latitude;
            $row[] = $produk->longitude;
            $row[] = $produk->tindak_lanjut;
            $row[] = $produk->keterangan;
            $row[] = $produk->nama_pengirim;
            $row[] = $produk->email_pengirim;
            $row[] = $produk->no_hp;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_eksternal->count_all(),
                        "recordsFiltered" => $this->Mdl_eksternal->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output); 
    }

     function ajax_list_usulan(){
        $list = $this->Mdl_usulan->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->tanggal_usulan;
            $row[] = $produk->pengirim_usulan;
            $row[] = $produk->detail_usulan;
            $row[] = $produk->latitude;
            $row[] = $produk->longitude;
            $row[] = $produk->tindak_lanjut;
            $row[] = $produk->keterangan;
            $row[] = $produk->nama_pengirim;
            $row[] = $produk->email_pengirim;
            $row[] = $produk->no_hp;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_usulan->count_all(),
                        "recordsFiltered" => $this->Mdl_usulan->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output); 
    }

    // public function rekap_internal(){
    //     $this->load->view('dashboard/header_dashboard');
    //     $data['rekap_internal']=$this->M_line_patok->get_internal();
    //     $this->table->set_heading(array('NO','Tanggal Usulan','Pengirim Usulan',' Detail Usulan','Koordinat Latitude','Koordinat Longitude','Tindak Lanjut','Keterangan','Nama Pengirim','Email Pengirim','No Hp Pengirim'));
    //         $tmp=array('table_open'=>'<table id="example0" class="table display" >',
    //                     'thead_open'=>'<thead>',
    //                     'thead_close'=> '</thead>',
    //                     'tbody_open'=> '<tbody>',
    //                     'tbody_close'=> '</tbody>',
    //             );
    //         $this->table->set_template($tmp);
    //     $this->load->view('dashboard/view_rekap_internal', $data);
    //     $this->load->view('dashboard/footer_dashboard');
    // }

    function ajax_list_internal(){
        $list = $this->Mdl_internal->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->tanggal_usulan;
            $row[] = $produk->pengirim_usulan;
            $row[] = $produk->detail_usulan;
            $row[] = $produk->latitude;
            $row[] = $produk->longitude;
            $row[] = $produk->tindak_lanjut;
            $row[] = $produk->keterangan;
            $row[] = $produk->nama_pengirim;
            $row[] = $produk->email_pengirim;
            $row[] = $produk->no_hp;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_internal->count_all(),
                        "recordsFiltered" => $this->Mdl_internal->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output); 
    }

    public function rekap_internal(){
        //  if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/view_rekap_internal2');
        $this->load->view('dashboard/footer_dashboard');
    }

    // public function rekap_dipa(){
    //     $this->load->view('dashboard/header_dashboard');
    //     $data['rekap_dipa']=$this->M_line_patok->get_dipa();
    //     $this->table->set_heading(array('NO','Tanggal Usulan','Pengirim Usulan',' Detail Usulan','Koordinat Latitude','Koordinat Longitude','Tindak Lanjut','Keterangan','Nama Pengirim','Email Pengirim','No Hp Pengirim'));
    //         $tmp=array('table_open'=>'<table id="example0" class="table display" >',
    //                     'thead_open'=>'<thead>',
    //                     'thead_close'=> '</thead>',
    //                     'tbody_open'=> '<tbody>',
    //                     'tbody_close'=> '</tbody>',
    //             );
    //         $this->table->set_template($tmp);
    //     $this->load->view('dashboard/view_rekap_dipa', $data);
    //     $this->load->view('dashboard/footer_dashboard');
    // }

     public function rekap_dipa(){
        // if (!$this->ion_auth->logged_in()) {
        //     redirect('peta/login_vue');
        // }
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/view_rekap_dipa2');
        $this->load->view('dashboard/footer_dashboard');
    }

    function ajax_list_dipa(){
        $list = $this->Mdl_dipa->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $produk) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $produk->tanggal_usulan;
            $row[] = $produk->pengirim_usulan;
            $row[] = $produk->detail_usulan;
            $row[] = $produk->latitude;
            $row[] = $produk->longitude;
            $row[] = $produk->tindak_lanjut;
            $row[] = $produk->keterangan;
            $row[] = $produk->nama_pengirim;
            $row[] = $produk->email_pengirim;
            $row[] = $produk->no_hp;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_dipa->count_all(),
                        "recordsFiltered" => $this->Mdl_dipa->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output); 
    }

    function logout(){
		//helper_log("logout", "Logout");
		$this->session->sess_destroy();
		redirect('peta_dashboard/map','refresh');
    }

    function list_orde(){
        $this->load->view('dashboard/view_orde');
    }

    public function ajax_listall($id_blok){
         if ($id_blok==0) {
            $id_blok="";
        }

         $list = $this->Mdl_rekap->get_datatablesid($id_blok);
    //print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = "";
            $row[] = $no;
            $row[] = $orde->nama_sungai;
            $row[] = $orde->orde_sungai;
            $row[] = $orde->panjang_sungai;
            $row[] = $orde->tahun_data;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_rekap->count_allid($id_blok),
                        "recordsFiltered" => $this->Mdl_rekap->count_filteredid($id_blok),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function ajax_listid() {
        $kdOrde = $this->uri->segment(3);
        $list = $this->Mdl_rekap->get_datatablesid($kdOrde);
        //print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = "";
            $row[] = $no;
            $row[] = $orde->nama_sungai;
            $row[] = $orde->orde_sungai;
            $row[] = $orde->panjang_sungai;
            $row[] = $orde->tahun_data;
           
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_rekap->count_allid($kdOrde),
                        "recordsFiltered" => $this->Mdl_rekap->count_filteredid($kdOrde),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    public function ajax_list() {
        $list = $this->Mdl_rekap->get_datatables();
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = "";
            $row[] = $no;
            $row[] = $orde->nama_sungai;
            $row[] = $orde->orde_sungai;
            $row[] = $orde->panjang_sungai;
            $row[] = $orde->tahun_data;
            
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_rekap->count_all(),
                        "recordsFiltered" => $this->Mdl_rekap->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }

    

    function create_load_ongoing($id){
        // $data['detail_paket']=$this->Mdl_rekap->detail_item_ongoing($id);
        //  $this->table->set_heading(array('NO','Item Pekerjaan','Volume','Satuan','Latitude','Longitude'));
        //     $tmp=array('table_open'=>'<table id="example0" class="table display" >',
        //                 'thead_open'=>'<thead>',
        //                 'thead_close'=> '</thead>',
        //                 'tbody_open'=> '<tbody>',
        //                 'tbody_close'=> '</tbody>',
        //         );
        //     $this->table->set_template($tmp);



        $this->load->view('dashboard/detail_paket_ongoing');  

    }
    public function create_load_tebing($id){
      $data['data_tebing'] = $this->M_line_patok->detail_tebing($id)->row();  
      $data['detail_tebing'] = $this->M_line_patok->detail_item_tebing($id);  
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

    function ajax_list_ongoing_id(){
        $kode = $this->uri->segment(3);
         $list = $this->Mdl_ongoing_id->get_datatables($kode);
      //  print_r($this->db->last_query());
        $data = array();
        $no = $_REQUEST['start'];
        foreach ($list as $orde) {
            $no++;
            $row = array();
            $row[] = '';
            $row[] = $no;
            $row[] = $orde->item_pekerjaan_detail;
            $row[] = $orde->volume_detail;
            $row[] = $orde->satuan_detail;
            $row[] = $orde->latitude_detail;
            $row[] = $orde->longitude_detail;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_REQUEST['draw'],
                        "recordsTotal" => $this->Mdl_ongoing_id->count_all($kode),
                        "recordsFiltered" => $this->Mdl_ongoing_id->count_filtered($kode),
                        "data" => $data,
                );
        echo json_encode($output);
    }
    
     public function getSheet()
    {
        $res = array();
        $uniq = $this->input->get('uniq');
        $prefix = '';
       // if($this->input->get('tanggul')){
            $prefix = 'tanggul';
            $res['data'] = $this->Mdl_rekap->getAllData();
            $tanggule =  $this->Mdl_rekap->getAssetTanggul2();
            $det_tanggule =  $this->Mdl_rekap->getDetTanggul2($tanggule->fn_idtanggul);
           // echo $this->load->view("table", $res, true);
       // }
        $view = $this->load->view("table", $res, true);
        //echo json_encode($res);

        $fileName = $uniq."temp_file_name.html";
        $path = "assets/public/docs/";
        $path_file = $path . $fileName;

        if (write_file($path_file, $view)) {
            $htmlreader = new Html();
            $spreadsheet = $htmlreader->load($path_file);

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save("assets/public/docs/".$uniq."05featuredemo.xlsx");

            // unlink($path_file);

            $xlsxreader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $xlsxsheet = $xlsxreader->load("assets/public/docs/".$uniq."05featuredemo.xlsx");
            $worksheet = $xlsxsheet->getActiveSheet();
            $styleArray = [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['hex' => '#000000'],
                    ],
                ],

            ];
            $headStyle = [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                // 'fill' => [
                //     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                //     'startColor' => [
                //         'hex' => '#9ed991',
                //     ],
                // ],
            ];
            $worksheet->getStyle('A1:' . $worksheet->getHighestColumn() . $worksheet->getHighestRow() //J12
            )->applyFromArray($styleArray);

            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);

            for ($x = 1; $x <= $worksheet->getHighestRow(); $x++) {
                if ($x == 1) {
                    $worksheet->getStyle('A' . $x . ':L' . $x . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                
                //if($det_tanggule!=null){
                     if ($x % 6 == 0) {
                        $worksheet->getStyle('A' . ($x + 1) . ':L' . ($x + 1) . '')->getFill()
                            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                            ->getStartColor()->setARGB('FF00FF7F');
                     }
                // }else{
                //     if ($x % 4 == 0) {
                //         $worksheet->getStyle('A' . ($x + 1) . ':L' . ($x + 1) . '')->getFill()
                //             ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                //             ->getStartColor()->setARGB('FF00FF7F');
                //      }
                // }
               
                if ($x % 2 != 0) {
                    $worksheet->getStyle('A' . $x . ':L' . $x . '')->applyFromArray($headStyle);

                }

            }

            // $worksheet->getStyle('D2')->getAlignment()->setWrapText(true);
            // $worksheet->getStyle('A3:J3')
            // ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            foreach(range('A','L') as $col){
                $worksheet->getColumnDimension($col)->setAutoSize(true);
            }
            
            $xlsxwriter = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($xlsxsheet);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$prefix.'rekap.xlsx"');
            // $xlsxwriter->save("assets/public/docs/".$prefix."rekap.xlsx");
            $xlsxwriter->save("php://output");
          

            unlink("assets/public/docs/".$uniq."05featuredemo.xlsx");
            unlink("assets/public/docs/".$uniq."temp_file_name.html");
           

        } else {
            // echo "<script> alert('error !'); </script>";
        }

	}
	
	public function getSheetRevertmen(){

		$res = array();
        $uniq = $this->input->get('uniq');
        $prefix = '';
      // if($this->input->get('tanggul')){
            $prefix = 'revertmen';
            $res['data'] = $this->Mdl_rekap->getAllDataRevertmen();
      // }
        $view = $this->load->view("table_revertmen", $res, true);
        //echo json_encode($res);

        $fileName = $uniq."temp_file_name.html";
        $path = "assets/public/docs/";
        $path_file = $path . $fileName;

        if (write_file($path_file, $view)) {
            $htmlreader = new Html();
            $spreadsheet = $htmlreader->load($path_file);

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save("assets/public/docs/".$uniq."05featuredemo.xlsx");

            // unlink($path_file);

            $xlsxreader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $xlsxsheet = $xlsxreader->load("assets/public/docs/".$uniq."05featuredemo.xlsx");
            $worksheet = $xlsxsheet->getActiveSheet();
            $styleArray = [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['hex' => '#000000'],
                    ],
                ],

            ];
            $headStyle = [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                // 'fill' => [
                //     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                //     'startColor' => [
                //         'hex' => '#9ed991',
                //     ],
                // ],
            ];
            $worksheet->getStyle('A1:' . $worksheet->getHighestColumn() . $worksheet->getHighestRow() //J12
            )->applyFromArray($styleArray);

            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);

            for ($x = 1; $x <= $worksheet->getHighestRow(); $x++) {
                if ($x == 1) {
                    $worksheet->getStyle('A' . $x . ':K' . $x . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 6 == 0) {
                    $worksheet->getStyle('A' . ($x + 1) . ':K' . ($x + 1) . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 2 != 0) {
                    $worksheet->getStyle('A' . $x . ':K' . $x . '')->applyFromArray($headStyle);

                }

            }

            // $worksheet->getStyle('D2')->getAlignment()->setWrapText(true);
            // $worksheet->getStyle('A3:J3')
            // ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            foreach(range('A','K') as $col){
                $worksheet->getColumnDimension($col)->setAutoSize(true);
            }
            
            $xlsxwriter = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($xlsxsheet);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$prefix.'rekap.xlsx"');
            // $xlsxwriter->save("assets/public/docs/".$prefix."rekap.xlsx");
            $xlsxwriter->save("php://output");
          

            unlink("assets/public/docs/".$uniq."05featuredemo.xlsx");
            unlink("assets/public/docs/".$uniq."temp_file_name.html");
           

        } else {
            // echo "<script> alert('error !'); </script>";
        }

	}

	public function getSheetPintu(){
		$res = array();
        $uniq = $this->input->get('uniq');
        $prefix = '';
       // if($this->input->get('tanggul')){
            $prefix = 'pintu';
            $res['data'] = $this->Mdl_rekap->getAllDataPintu();
       // }
        $view = $this->load->view("table_pintu", $res, true);
        //echo json_encode($res);

        $fileName = $uniq."temp_file_name.html";
        $path = "assets/public/docs/";
        $path_file = $path . $fileName;

        if (write_file($path_file, $view)) {
            $htmlreader = new Html();
            $spreadsheet = $htmlreader->load($path_file);

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save("assets/public/docs/".$uniq."05featuredemo.xlsx");

            // unlink($path_file);

            $xlsxreader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $xlsxsheet = $xlsxreader->load("assets/public/docs/".$uniq."05featuredemo.xlsx");
            $worksheet = $xlsxsheet->getActiveSheet();
            $styleArray = [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['hex' => '#000000'],
                    ],
                ],

            ];
            $headStyle = [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                // 'fill' => [
                //     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                //     'startColor' => [
                //         'hex' => '#9ed991',
                //     ],
                // ],
            ];
            $worksheet->getStyle('A1:' . $worksheet->getHighestColumn() . $worksheet->getHighestRow() //J12
            )->applyFromArray($styleArray);

            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);

            for ($x = 1; $x <= $worksheet->getHighestRow(); $x++) {
                if ($x == 1) {
                    $worksheet->getStyle('A' . $x . ':H' . $x . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 6 == 0) {
                    $worksheet->getStyle('A' . ($x + 1) . ':H' . ($x + 1) . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 2 != 0) {
                    $worksheet->getStyle('A' . $x . ':H' . $x . '')->applyFromArray($headStyle);

                }

            }

            // $worksheet->getStyle('D2')->getAlignment()->setWrapText(true);
            // $worksheet->getStyle('A3:J3')
            // ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            foreach(range('A','H') as $col){
                $worksheet->getColumnDimension($col)->setAutoSize(true);
            }
            
            $xlsxwriter = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($xlsxsheet);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$prefix.'rekap.xlsx"');
            // $xlsxwriter->save("assets/public/docs/".$prefix."rekap.xlsx");
            $xlsxwriter->save("php://output");
          

            unlink("assets/public/docs/".$uniq."05featuredemo.xlsx");
            unlink("assets/public/docs/".$uniq."temp_file_name.html");
           

        } else {
            // echo "<script> alert('error !'); </script>";
        }
	}

	public function getSheetCekdam(){
		$res = array();
        $uniq = $this->input->get('uniq');
        $prefix = '';
       // if($this->input->get('tanggul')){
            $prefix = 'cekdam';
            $res['data'] = $this->Mdl_rekap->getAllDataCekdam();
       // }
        $view = $this->load->view("table_cekdam", $res, true);
        //echo json_encode($res);

        $fileName = $uniq."temp_file_name.html";
        $path = "assets/public/docs/";
        $path_file = $path . $fileName;

        if (write_file($path_file, $view)) {
            $htmlreader = new Html();
            $spreadsheet = $htmlreader->load($path_file);

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save("assets/public/docs/".$uniq."05featuredemo.xlsx");

            // unlink($path_file);

            $xlsxreader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $xlsxsheet = $xlsxreader->load("assets/public/docs/".$uniq."05featuredemo.xlsx");
            $worksheet = $xlsxsheet->getActiveSheet();
            $styleArray = [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['hex' => '#000000'],
                    ],
                ],

            ];
            $headStyle = [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                // 'fill' => [
                //     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                //     'startColor' => [
                //         'hex' => '#9ed991',
                //     ],
                // ],
            ];
            $worksheet->getStyle('A1:' . $worksheet->getHighestColumn() . $worksheet->getHighestRow() //J12
            )->applyFromArray($styleArray);

            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);

            for ($x = 1; $x <= $worksheet->getHighestRow(); $x++) {
                if ($x == 1) {
                    $worksheet->getStyle('A' . $x . ':G' . $x . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 6 == 0) {
                    $worksheet->getStyle('A' . ($x + 1) . ':G' . ($x + 1) . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 2 != 0) {
                    $worksheet->getStyle('A' . $x . ':G' . $x . '')->applyFromArray($headStyle);

                }

            }

            // $worksheet->getStyle('D2')->getAlignment()->setWrapText(true);
            // $worksheet->getStyle('A3:J3')
            // ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            foreach(range('A','G') as $col){
                $worksheet->getColumnDimension($col)->setAutoSize(true);
            }
            
            $xlsxwriter = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($xlsxsheet);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$prefix.'rekap.xlsx"');
            // $xlsxwriter->save("assets/public/docs/".$prefix."rekap.xlsx");
            $xlsxwriter->save("php://output");
          

            unlink("assets/public/docs/".$uniq."05featuredemo.xlsx");
            unlink("assets/public/docs/".$uniq."temp_file_name.html");
           

        } else {
            // echo "<script> alert('error !'); </script>";
        }
	}


	public function getSheetTebing(){
		$res = array();
        $uniq = $this->input->get('uniq');
        $prefix = '';
       // if($this->input->get('tanggul')){
            $prefix = 'tebing';
            $res['data'] = $this->Mdl_rekap->getAllDataTebing();
       // }
        $view = $this->load->view("table_tebing", $res, true);
        //echo json_encode($res);

        $fileName = $uniq."temp_file_name.html";
        $path = "assets/public/docs/";
        $path_file = $path . $fileName;

        if (write_file($path_file, $view)) {
            $htmlreader = new Html();
            $spreadsheet = $htmlreader->load($path_file);

            $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $writer->save("assets/public/docs/".$uniq."05featuredemo.xlsx");

            // unlink($path_file);

            $xlsxreader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $xlsxsheet = $xlsxreader->load("assets/public/docs/".$uniq."05featuredemo.xlsx");
            $worksheet = $xlsxsheet->getActiveSheet();
            $styleArray = [
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['hex' => '#000000'],
                    ],
                ],

            ];
            $headStyle = [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
                // 'fill' => [
                //     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                //     'startColor' => [
                //         'hex' => '#9ed991',
                //     ],
                // ],
            ];
            $worksheet->getStyle('A1:' . $worksheet->getHighestColumn() . $worksheet->getHighestRow() //J12
            )->applyFromArray($styleArray);

            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $worksheet->getStyle('A1:A' . $worksheet->getHighestRow())
                ->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);

            for ($x = 1; $x <= $worksheet->getHighestRow(); $x++) {
                if ($x == 1) {
                    $worksheet->getStyle('A' . $x . ':G' . $x . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 6 == 0) {
                    $worksheet->getStyle('A' . ($x + 1) . ':G' . ($x + 1) . '')->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('FF00FF7F');
                }
                if ($x % 2 != 0) {
                    $worksheet->getStyle('A' . $x . ':G' . $x . '')->applyFromArray($headStyle);

                }

            }

            // $worksheet->getStyle('D2')->getAlignment()->setWrapText(true);
            // $worksheet->getStyle('A3:J3')
            // ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            foreach(range('A','G') as $col){
                $worksheet->getColumnDimension($col)->setAutoSize(true);
            }
            
            $xlsxwriter = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($xlsxsheet);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$prefix.'rekap.xlsx"');
            // $xlsxwriter->save("assets/public/docs/".$prefix."rekap.xlsx");
            $xlsxwriter->save("php://output");
          

            unlink("assets/public/docs/".$uniq."05featuredemo.xlsx");
            unlink("assets/public/docs/".$uniq."temp_file_name.html");
           

        } else {
            // echo "<script> alert('error !'); </script>";
        }
	}
}    
