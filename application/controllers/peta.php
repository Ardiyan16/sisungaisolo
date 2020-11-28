<?php

class Peta extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('M_line_patok');
         $this->load->library(array('form_validation'));
    }

    function index() {

        $data['bangunan']  = $this->M_line_patok->get_infrastruktur();

        $data['ongoing']  = $this->M_line_patok->get_infrastruktur_ongoing();
        
        $data['internal'] = $this->M_line_patok->get_internal();
        
        $data['eksternal'] = $this->M_line_patok->get_eksternal();

        $data['line_patok_new'] = $this->M_line_patok->get_peta();
        
        $data['sungai'] = $this->M_line_patok->ambil_peta();
        
        $data['line_patok_beng'] = $this->M_line_patok->get_beng_solo();
        
        $data['data']=$this->M_line_patok->get_usulan();
        
        $data['rekap_terbangun']=$this->M_line_patok->rekap_terbangun();
        
        $data['rekap_ongoing']=$this->M_line_patok->get_infrastruktur_ongoing();
        
        $data['rekap_eksternal']=$this->M_line_patok->get_eksternal();
        
        $data['rekap_internal']=$this->M_line_patok->get_internal();
        
        $data['rekap_sungai']=$this->M_line_patok->get_sungai();
        
        $this->table->set_heading(array('NO','Tanggal Usulan','Pengirim Usulan','Detail Usulan','Koordinat Latitude','Koordinat Longitude','Keterangan'));
	        $tmp=array('table_open'=>'<table class="table table-striped" >',
	        			'thead_open'=>'<thead>',
        				'thead_close'=> '</thead>',
        				'tbody_open'=> '<tbody>',
        				'tbody_close'=> '</tbody>',
        		);
	        $this->table->set_template($tmp);
        $this->load->view('front/peta2',$data);


    }

    public function dashboard(){
        $limit = $this->input->get('limit');
        $offset = $this->input->get('offset');

        $data['bangunan']  = $this->M_line_patok->get_infrastruktur();

        $data['ongoing']  = $this->M_line_patok->get_infrastruktur_ongoing();
        
        $data['internal'] = $this->M_line_patok->get_internal();
        
        $data['eksternal'] = $this->M_line_patok->get_eksternal();

        $data['line_patok_new'] = $this->M_line_patok->get_peta($limit, $offset);
        
        $data['sungai'] = $this->M_line_patok->ambil_peta();
        
        $data['line_patok_beng'] = $this->M_line_patok->get_beng_solo($limit, $offset);
        
        $data['data']=$this->M_line_patok->get_usulan();
        
        $data['rekap_terbangun']=$this->M_line_patok->rekap_terbangun();
        
        $data['rekap_ongoing']=$this->M_line_patok->get_infrastruktur_ongoing();
        
        $data['rekap_eksternal']=$this->M_line_patok->get_eksternal();
        
        $data['rekap_internal']=$this->M_line_patok->get_internal();
        
        $data['rekap_sungai']=$this->M_line_patok->get_sungai();
        $this->load->view('dashboard/view_dashboard2', $data);
    }

     function getPatokJson()
    {
        $limit = $this->input->get('limit');
        $offset = $this->input->get('offset');
        $arr = array();
        $list = $this->M_line_patok->get_peta($limit, $offset);
        foreach ($list as $result) {
          $arr[] = array(
            'id_koordinat' => $result->id_koordinat,
            'id_sungai' => $result->id_sungai,
            'latitude_awal' => $result->latitude_awal,
            'longitude_awal' => $result->longitude_awal,
            'latitude_akhir' => $result->latitude_akhir,
            'longitude_akhir' => $result->longitude_akhir,
            'wilayah_administrasi' => $result->wilayah_administrasi,
            'nama_sungai' => $result->nama_sungai,
            'orde_sungai' => $result->orde_sungai,
            'panjang_sungai' => $result->panjang_sungai,
            'tahun_data' => $result->tahun_data,
            'foto_1' => $result->foto_1,
            'foto_2' => $result->foto_2,
            'foto_3' => $result->foto_3,
            'foto_4' => $result->foto_4,
            'video' => $result->video);
        }
        echo json_encode($arr);
    }

    function getPatokSolo()
    {
        $limit = $this->input->get('limit');
        $offset = $this->input->get('offset');
        $arr = array();
        $list = $this->M_line_patok->get_beng_solo($limit, $offset);
        foreach ($list as $result) {
          $arr[] = array(
            'id_koordinat' => $result->id_koordinat,
            'id_sungai' => $result->id_sungai,
            'latitude_awal' => $result->latitude_awal,
            'longitude_awal' => $result->longitude_awal,
            'latitude_akhir' => $result->latitude_akhir,
            'longitude_akhir' => $result->longitude_akhir,
            'wilayah_administrasi' => $result->wilayah_administrasi,
            'nama_sungai' => $result->nama_sungai,
            'orde_sungai' => $result->orde_sungai,
            'panjang_sungai' => $result->panjang_sungai,
            'tahun_data' => $result->tahun_data,
            'foto_1' => $result->foto_1,
            'foto_2' => $result->foto_2,
            'foto_3' => $result->foto_3,
            'foto_4' => $result->foto_4,
            'video' => $result->video);
        }
        echo json_encode($arr);
    }

    //  public function peta2(){
    //     $limit = $this->input->get('limit');
    //     $offset = $this->input->get('offset');
    //     $data['bangunan']  = $this->M_line_patok->get_infrastruktur();

    //     $data['ongoing']  = $this->M_line_patok->get_infrastruktur_ongoing();
        
    //     $data['internal'] = $this->M_line_patok->get_internal();
        
    //     $data['eksternal'] = $this->M_line_patok->get_eksternal();

    //     $data['line_patok_new'] = $this->M_line_patok->get_peta($limit, $offset);
        
    //     $data['sungai'] = $this->M_line_patok->ambil_peta();
        
    //     $data['line_patok_beng'] = $this->M_line_patok->get_beng_solo($limit, $offset);
        
    //     $data['data']=$this->M_line_patok->get_usulan();
        
    //     $data['rekap_terbangun']=$this->M_line_patok->rekap_terbangun();
        
    //     $data['rekap_ongoing']=$this->M_line_patok->get_infrastruktur_ongoing();
        
    //     $data['rekap_eksternal']=$this->M_line_patok->get_eksternal();
        
    //     $data['rekap_internal']=$this->M_line_patok->get_internal();
        
    //     $data['rekap_sungai']=$this->M_line_patok->get_sungai();
    //     $this->load->view('dashboard/view_peta', $data);
    // }

    public function peta2(){
        // $limit = $this->input->get('limit');
        // $offset = $this->input->get('offset');
        $data['bangunan']  = $this->M_line_patok->get_infrastruktur();

        $data['ongoing']  = $this->M_line_patok->get_infrastruktur_ongoing();
        
        $data['internal'] = $this->M_line_patok->get_internal();
        
        $data['eksternal'] = $this->M_line_patok->get_eksternal();

       // $data['line_patok_new'] = $this->M_line_patok->get_peta($limit, $offset);
        
        $data['sungai'] = $this->M_line_patok->ambil_peta();
        
      //  $data['line_patok_beng'] = $this->M_line_patok->get_beng_solo($limit, $offset);
        
        $data['data']=$this->M_line_patok->get_usulan();
        
        $data['rekap_terbangun']=$this->M_line_patok->rekap_terbangun();
        
        $data['rekap_ongoing']=$this->M_line_patok->get_infrastruktur_ongoing();
        
        $data['rekap_eksternal']=$this->M_line_patok->get_eksternal();
        
        $data['rekap_internal']=$this->M_line_patok->get_internal();
        
        $data['rekap_sungai']=$this->M_line_patok->get_sungai();
        $this->load->view('dashboard/view_peta_admin', $data);
    }


    public function rekap_data(){
        $this->load->view('dashboard/login_rekap');
    }
    public function coban(){
        $this->load->view('coban');
    }



    public function login_vue(){
        $this->load->view('dashboard/login_vue');
    }

    public function do_login() {

        if(!$this->input->is_ajax_request()) {
            redirect('/', 'refresh');
        }

        //validate form input
        $this->form_validation->set_rules('identity', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === TRUE)
        {
            // check to see if the user is logging in
            // check for "remember me"
            $remember = (bool) $this->input->post('remember');
            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
            {
                //if the login is successful
                //redirect them back to the home page
                $this->session->set_flashdata('success_message', $this->ion_auth->messages());
                echo json_encode(array('status' => TRUE, 'redirect' => site_url('rekap_data/dashboard2')));
            }
            else
            {
                // if the login was un-successful                
                echo json_encode(array('status' => FALSE, 'message' => $this->ion_auth->errors()));
            }
        }
        else
        {
            $message = validation_errors();
            
            echo json_encode(array('status' => FALSE, 'message' => $message));
        }
    }

    function getlogin() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $user = $this->auth->log_admin($user,$pass);
            if($user==true){
                // $this->session->set_userdata($user);
                $this->session->set_userdata('id_admin',$user->id_admin);
                $this->session->set_userdata('admin_nama',$user->admin_nama);
				$this->session->set_userdata('admin_username',$user->admin_username);
				$this->session->set_userdata('admin_password',$user->admin_password);
				$this->session->set_userdata('admin_view_password',$user->admin_view_password);
				$this->session->set_userdata('admin_level',$user->admin_level);
                $data['hasil']=1;
                echo json_encode($data);
            }else{
                $data['hasil'] = 0;
                echo json_encode($data);
            }
    }

    public function dashboard2(){
        $this->load->view('dashboard/header_dashboard');
        $this->load->view('dashboard/view_dashboard');
        $this->load->view('dashboard/footer_dashboard'); 
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

    public function rekap_terbangun(){
        $this->load->view('dashboard/header_dashboard');
        $data['rekap_terbangun']=$this->M_line_patok->rekap_terbangun();
        $this->table->set_heading(array('NO','Nama Paket / Bangunan','Penyedia Jasa Konstruksi','Tahun Selesai','Item Pekerjaan','Volume','Satuan','Latitude','Longitude','Keterangan','Penilaian Kinerja','AKNOP','Tahun Data'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
        $this->load->view('dashboard/view_rekap_terbangun', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function rekap_ongoing(){
        $this->load->view('dashboard/header_dashboard');
        $data['rekap_ongoing']=$this->M_line_patok->get_infrastruktur_ongoing();
        $this->table->set_heading(array('NO','Nama Paket / Bangunan','Penyedia Jasa Konstruksi','Tahun Selesai','Item Pekerjaan','Volume','Satuan','Latitude','Longitude','Keterangan','Tahun Data'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
        $this->load->view('dashboard/view_rekap_ongoing', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function rekap_eksternal(){
        $this->load->view('dashboard/header_dashboard');
        $data['rekap_eksternal']=$this->M_line_patok->get_eksternal();
        $this->table->set_heading(array('NO','Tanggal Usulan','Pengirim Usulan',' Detail Usulan','Koordinat Latitude','Koordinat Longitude','Keterangan'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
        $this->load->view('dashboard/view_rekap_eksternal', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function rekap_internal(){
        $this->load->view('dashboard/header_dashboard');
        $data['rekap_internal']=$this->M_line_patok->get_internal();
        $this->table->set_heading(array('NO','Tanggal Usulan','Pengirim Usulan',' Detail Usulan','Koordinat Latitude','Koordinat Longitude','Keterangan'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
        $this->load->view('dashboard/view_rekap_internal', $data);
        $this->load->view('dashboard/footer_dashboard');
    }

    public function export_excel_history(){
           $data = array( 'title' => 'Laporan Excel Pemeriksaan Berkala 2019',
                'history' => $this->M_line_patok->get_history());
 
           $this->load->view('front/vw_laporan_history',$data);
    }
    
     public function export_excel(){
           $data = array( 'title' => 'Laporan Excel Infrastruktur Terbangun',
                'rekap_terbangun' => $this->M_line_patok->rekap_terbangun());
 
           $this->load->view('front/vw_laporan_excel',$data);
      }
      
    public function export_excel_ongoing(){
           $data = array( 'title' => 'Laporan Excel Infrastruktur Ongoing',
                'rekap_ongoing' => $this->M_line_patok->get_infrastruktur_ongoing(),
                'detail_ongoing' =>  $this->M_line_patok->get_detail_ongoing()
                );
 
           $this->load->view('front/vw_laporan_excel_ongoing',$data);
      }  
      
    public function export_excel_eksternal(){
           $data = array( 'title' => 'Laporan Excel Usulan Eksternal',
                'rekap_eksternal' => $this->M_line_patok->get_eksternal());
 
           $this->load->view('front/vw_laporan_excel_eksternal',$data);
    }    
    
     public function export_excel_internal(){
           $data = array( 'title' => 'Laporan Excel Usulan Internal',
                'rekap_internal' => $this->M_line_patok->get_internal());
 
           $this->load->view('front/vw_laporan_excel_internal',$data);
    }
    
     public function export_excel_sungai($id){

            if ($id==0) {
                $id="";
            }
            $data['rekap_sungai'] = $this->M_line_patok->get_sungai_eksel($id);
           
          // print_r($this->db)
           $this->load->view('front/vw_laporan_excel_sungai',$data);
    }

    public function export_excel_dipa(){
           $data = array( 'title' => 'Laporan Excel Rekap Usulan Dipa Ongoing',
                'rekap_dipa' => $this->M_line_patok->get_dipa());
 
           $this->load->view('front/vw_laporan_excel_dipa',$data);
    }

    public function create_load($id){
        $data['data'] = $this->M_line_patok->detail_peta($id)->row();
       // print_r($this->db->last_query());
        $data['data_foto'] = $this->M_line_patok->detail_peta($id)->result();
        $data['data_study'] = $this->M_line_patok->get_study($id)->result();
        $this->load->view('front/load_detail', $data);
    }

    // public function create_load($id){
    //     $data['data'] = $this->M_line_patok->detail_peta($id)->row();
    //    // print_r($this->db->last_query());
    //     $data['data_foto'] = $this->M_line_patok->detail_peta($id)->result();
    //     $data['data_study'] = $this->M_line_patok->get_study($id)->result();
    //     $this->load->view('front/load_detail', $data);
    // }

    public function create_sungai($id){
        $data['data'] = $this->M_line_patok->detail_peta($id)->row();
       // print_r($this->db->last_query());
        $data['data_foto'] = $this->M_line_patok->detail_peta($id)->result();
        $data['data_study'] = $this->M_line_patok->get_study($id)->result();
        $this->load->view('front/load_detail_sungai', $data);
    }

    public function create_load_bangunan($id){
      $data['data_bangunan'] = $this->M_line_patok->detail_bangunan($id)->row();  
      $this->load->view('front/load_detail_bangunan', $data);  
    }

    public function create_load_ongoing($id){
      $data['data_ongoing'] = $this->M_line_patok->detail_ongoing($id)->row();   
      $this->load->view('front/load_detail_ongoing', $data);  
    }

     public function create_load_bangunan2($id){
      $data['data_bangunan'] = $this->M_line_patok->detail_bangunan($id)->row();  
      $this->load->view('front/load_detail_bangunan2', $data);  
    }

    public function create_load_tebing($id){
        $data['data_tebing'] = $this->M_line_patok->detail_tebing($id)->row(); 
        $this->load->view('front/load_detail_tebing2', $data);  
    }

    public function create_load_cekdam($id){
        $data['data_cekdam'] = $this->m_line_patok->detail_cekdam($id)->row();   
        $this->load->view('front/load_detail_cekdam', $data);  
    }

     public function get_tanggul($id){
        $data=$this->M_line_patok->get_tanggul($id);
        echo json_encode($data);
    }

    public function create_load_ongoing2($id){
      $data['data_ongoing'] = $this->M_line_patok->detail_ongoing($id)->row();  
      $data['detail_ongoing'] = $this->M_line_patok->detail_item_ongoing($id);  
        $this->table->set_heading(array('NO','Item Pekerjaan','Volume','Satuan','Koordinat Latitude','Koordinat Longitude'));
            $tmp=array('table_open'=>'<table id="example0" class="table display" style="background-color: #fff;color: #000;" >',
                        'thead_open'=>'<thead>',
                        'thead_close'=> '</thead>',
                        'tbody_open'=> '<tbody>',
                        'tbody_close'=> '</tbody>',
                );
            $this->table->set_template($tmp);
      $this->load->view('front/load_detail_ongoing2', $data);  
    }

    public function create_load_tebing2($id){
      $data['data_tebing'] = $this->M_line_patok->detail_tebing($id)->row();
      //print_r($this->db->last_query());
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
    
    function create_load_eksternal($id){
        $data['data_eksternal'] = $this->M_line_patok->detail_eksternal($id)->row();   
        $this->load->view('front/load_detail_eksternal', $data);  
    }
    
     function create_load_internal($id){
        $data['data_internal'] = $this->M_line_patok->detail_internal($id)->row();   
        $this->load->view('front/load_detail_internal', $data);  
    }
    
    public function simpan() {
	//	$this->_validate();
		$data = array(
				'tanggal_usulan'    => $this->input->post('tanggal_usulan'),
				'pengirim_usulan'    => $this->input->post('pengirim_usulan'),
				'detail_usulan'     => $this->input->post('detail_usulan'),
				'latitude' => $this->input->post('latitude'),
				'longitude'     => $this->input->post('longitude'),
				'keterangan'     => $this->input->post('keterangan'),
                'nama_pengirim' => $this->input->post('nama_pengirim'),
                'email_pengirim'     => $this->input->post('email_pengirim'),
                'no_hp'     => $this->input->post('no_hp')
			);
		$insert = $this->M_line_patok->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('tanggal_usulan') == '')
		{
			$data['inputerror'][] = 'tanggal_usulan';
			$data['error_string'][] = 'Tanggal Usulan Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('pengirim_usulan') == '')
		{
			$data['inputerror'][] = 'pengirim_usulan';
			$data['error_string'][] = 'Pengirim Usulan Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('detail_usulan') == '')
		{
			$data['inputerror'][] = 'detail_usulan';
			$data['error_string'][] = 'Detail Usulan Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('latitude') == '')
		{
			$data['inputerror'][] = 'latitude';
			$data['error_string'][] = 'Latitude Harus Diisi';
			$data['status'] = FALSE;
		}

		if($this->input->post('longitude') == '')
		{
			$data['inputerror'][] = 'longitude';
			$data['error_string'][] = 'Longitude Harus Diisi';
			$data['status'] = FALSE;
		}


		if($this->input->post('keterangan') == '')
		{
			$data['inputerror'][] = 'keterangan';
			$data['error_string'][] = 'Keterangan Harus Diisi';
			$data['status'] = FALSE;
		}

		
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}

?>
