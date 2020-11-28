<?php

class Patok_ extends CI_Controller {

    function __construct() {

        parent::__construct();
       
      
    }

    function index() {


       $this->load->view('admin/patok');
        // redirect(site_url().'search/all');
    }

   function get_json_patok() {
        // $this->load->model('m_patok');
        $patok = new M_patok();
        // $patok = $this->m_patok->get_json();
        // print_r($patok);
        echo json_encode($patok->get_json());
    }

    function edit($id) {
        $patok = new M_patok();
        $patok->where('id_patok', $id);
        $data['patok'] = $patok->get();
        $this->load->model('m_patok');
        $data['daerah'] = $this->m_patok->get_daerah();
        $this->load->view('admin/edit_patok', $data);
    }

    function save_edit() {

        $update = array(
            'id_daerah' => $this->input->post('id_daerah'),
            'ruas_sungai' => $this->input->post('ruas_sungai'),
            'kapasitas_sungai' => $this->input->post('kapasitas_sungai'),
            'lat_patok' => $this->input->post('lat_patok'),
            'long_patok' => $this->input->post('long_patok')
            
        );

        $patok = new M_patok();
        $patok->where('id_patok', $this->input->post('id_patok'));


        
        $patok->update($update);
       // $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil diperbarui</div>');
       redirect('patok_/edit/' . $this->input->post('id_patok'));
    }

    function save_edit_detail() {

        $update = array(
            'kondisi'  => $this->input->post('kondisi'),
            'konsep_penanganan' => $this->input->post('konsep_penanganan'),
            'tingkat_resiko' => $this->input->post('tingkat_resiko')
        );

        $patok = new M_detail_patok();
        $patok->where('id_detail_patok', $this->input->post('id_detail_patok'));


        for ($x = 1; $x < 9; $x++) {
            $field = "foto" . $x;
            if (isset($_FILES[$field])) {
                if ($_FILES[$field] != '') {
                    $name = $_FILES[$field]['name'];
                    $tmp = $_FILES[$field]['tmp_name'];
                    $ext = pathinfo($name, PATHINFO_EXTENSION);

                    $new_name = 'swd' . '-' .$this->input->post('id_patok') . '-' . $this->input->post('jenis_patok') . '-' .$x.".".$ext;
                    if (move_uploaded_file($tmp, "./images/patok/".$new_name)) {
                        $update[$field] = $new_name;
                    }
                    ;
                }
            }
        }
        $patok->update($update);
       // $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil diperbarui</div>');
       redirect('patok_/detail_patok/' . $this->input->post('id_patok'));
    }

    function add() {
        $this->load->model('m_patok');
        $data['data'] = $this->m_patok->get_daerah();
        $this->load->view('admin/add_patok', $data );
    }

    function add_detail($id_patok) {
        $this->load->model('m_detail_patok');
        $jenis_patok = array('sempadan', 'Bertanggul', 'tak bertanggul','sungai');
        $angka = 0;
        $data['id_patok'] = $id_patok;
        foreach ($jenis_patok as $j) {
             $ambil_jenis = $this->m_detail_patok->get_jenis_patok($id_patok, $j);
             if($ambil_jenis == null){
                $data['jenis_patok'][$angka] =$j;
                $angka++;
             }
        }
       
        // print_r($data['jenis_tanggul']);
        
        $this->load->view('admin/add_detail_patok', $data );
    }

    function save_add() {
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('no_patok', 'no_patok', 'required');
        // if ($this->form_validation->run() == FALSE) {
        //     $this->session->set_flashdata('item', '<div class="alert alert-danger" role="alert">Gagal menambahkan, Sepertinya Masih ada yang kosong</div>');
        //     redirect("bangunan/add");
        // }
        $this->load->model('m_patok');
        $id_patok = $this->m_patok->get_last_patok();

        $patok = new M_patok();
        // $j = 1;
        // foreach ($_FILES['gambar']['name'] as $key => $val) {
        //     $name = $_FILES['gambar']['name'][$key];
        //     $tmp = $_FILES['gambar']['tmp_name'][$key];

        //     $tmp_file = "";
        //     if (trim($name) != '') {
        //         $cek = true;
        //         $new_name = 'swd' . $this->input->post('id_daerah') . '-' . rand(0, 999) . date('YmdHis') . $name;
        //         if (move_uploaded_file($tmp, "../images/patok" . $new_name)) {
        //             $tmp_file = $new_name;
        //         } else {
        //             $tmp_file = '';
        //         }
        //     }

        //     $data_foto[$j] = $tmp_file;
        //     $j++;
        // }
        $patok->id_patok = $id_patok[0]['id_patok']+1;
        $patok->id_daerah = $this->input->post('id_daerah');
        $patok->ruas_sungai = $this->input->post('ruas_sungai');
        $patok->kapasitas_sungai = $this->input->post('kapasitas_sungai');
        $patok->lat_patok = $this->input->post('lat_patok');
        $patok->long_patok = $this->input->post('long_patok');
        $patok->id_lokasi = $this->input->post('id_lokasi');
        $patok->id_inventarisasi_sungai = $this->input->post('id_saluran');
        // $patok->foto1 = $_FILES['gambar']['name'][0];
        // $patok->foto2 = $_FILES['gambar']['name'][1];
        // $patok->foto3 = $_FILES['gambar']['name'][2];
        // $patok->foto4 = $_FILES['gambar']['name'][3];
        // $patok->foto5 = $_FILES['gambar']['name'][4];
        // $patok->foto6 = $_FILES['gambar']['name'][5];
        // $patok->foto7 = $_FILES['gambar']['name'][6];
        // $patok->foto8 = $_FILES['gambar']['name'][7];

        // print_r($patok);



        if ($patok->save()) {
            // $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect('patok_');
        }
    }

    function save_add_detail() {
        // echo $this->input->post('id_patok');
        $patok = new M_detail_patok();
        $j = 1;
        
        foreach ($_FILES['gambar']['name'] as $key => $val) {
            $name = $_FILES['gambar']['name'][$key];
            $tmp = $_FILES['gambar']['tmp_name'][$key];
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $tmp_file = "";
            if (trim($name) != '') {
                $cek = true;
                $new_name = 'swd' . '-' .$this->input->post('id_patok') . '-' . $this->input->post('jenis_patok') . '-' .$j.".".$ext;
                if (move_uploaded_file($tmp, "./images/patok/".$new_name)) {
                    $tmp_file = $new_name;
                    
                } else {
                    $tmp_file = '';
            
                }
                
            }

            $data_foto[$j] = $tmp_file;
            $j++;
        }

        // print_r($data_foto);
        $patok->id_patok = $this->input->post('id_patok');
        $patok->kondisi = $this->input->post('kondisi');
        $patok->konsep_penanganan = $this->input->post('konsep_penanganan');
        $patok->tingkat_resiko = $this->input->post('tingkat_resiko');
        $patok->foto1 = $data_foto[1];
        $patok->foto2 = $data_foto[2];
        $patok->foto3 = $data_foto[3];
        $patok->foto4 = $data_foto[4];
        $patok->foto5 = $data_foto[5];
        $patok->foto6 = $data_foto[6];
        $patok->foto7 = $data_foto[7];
        $patok->foto8 = $data_foto[8];
        $patok->jenis_patok = $this->input->post('jenis_patok');
        
        



        if ($patok->save()) {
            // $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect('patok_/detail_patok/'.$patok->id_patok);
        }
    }

    function detail_patok($id_patok){
        $this->load->view('admin/detail_patok', array('id_patok' => $id_patok));
    }

    function get_json_detail_patok($id_patok) {
        // $this->load->model('m_patok');
        $patok = new M_patok();
        // $patok = $this->m_patok->get_json();
        // print_r($patok);
        // $patok = $this->m_patok->get_json_detail_patok($id_patok);
        // print_r($patok);
        echo json_encode($patok->get_json_detail_patok($id_patok));
    }

    function edit_detail_patok($id_detail_patok) {
         $detail_patok = new M_detail_patok();
        $detail_patok->where('id_detail_patok', $id_detail_patok);
        $data['detail_patok'] = $detail_patok->get();
        $this->load->view('admin/edit_detail_patok', $data);
    }

    function delete($id_patok=null){
        $this->load->model('m_patok');
        $patok=new M_patok();
      
        $foto = $this->m_patok->get_content_detail_patok($id_patok);
        for ($i=1; $i < 9; $i++) { 
            if($foto[0]['foto'.$i] != ""){
                $path ="./images/patok/";
                $name = $foto[0]['foto'.$i];
                unlink($path.$name);
                    
            }
        }

        $patok->delete_patok($id_patok);
        // $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('patok_');
   
    }

    function delete_detail_patok($id_detail_patok=null){
        $this->load->model('m_detail_patok');
        $foto = $this->m_detail_patok->get_content_detail_patok($id_detail_patok);
        $id = $foto[0]['id_patok'];
        // print_r($foto);
        for ($i=1; $i < 9; $i++) { 
            if($foto[0]['foto'.$i] != ""){
                $path ="./images/patok/";
                $name = $foto[0]['foto'.$i];
                if(unlink($path.$name)){
                    echo "a";
                }
                else{
                    echo "b";
                }
                echo 'swd-'.$foto[0]['id_patok']. '-' .$foto[0]['jenis_patok']. '-' . $i;
            }
        }

        $detail_patok=new M_detail_patok();
        $detail_patok->delete_detaiL_patok($id_detail_patok);
        // $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('patok_/detail_patok/'.$id);
   
    }

    function delete_photo($id_detail_patok = null, $field = null, $foto = null) {
        $path = "../images/patok/$foto";
        $detail_patok = new M_detail_patok();
        $detail_patok->where('id_detail_patok', $id_detail_patok);
        $detail_patok->update($field, '');
        unlink($path);
        // $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Foto berhasil dihapus</div>');
        redirect('patok_/edit_detail_patok/'.$id_detail_patok);
    }

}

?>
