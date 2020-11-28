<?php

class Saluran_ extends CI_Controller {

    function __construct() {

        parent::__construct();
        
      
    }

    function index() {


        $this->load->view('front/foto_bangunan');
        // redirect(site_url().'search/all');
    }

    function foto($id_bangunan=null){
        $foto_saluran=new Tb_gambar_inventarisasi_sungai();
    	$bangunan = new M_bangunan();
    	$bangunan->where('id_bangunan',$id_bangunan);
        $data['menu_aktif']='foto_saluran';
        $data['id_bangunan']=$id_bangunan;
    	$data_bangunan=$bangunan->get();
        $foto_saluran->where('id_inventarisasi_sungai',$data_bangunan->id_inventarisasi_sungai);
        $data['saluran']=$foto_saluran->get();
    	$this->load->view('front/foto_saluran',$data);
    }

    function detail($id_bangunan=null){
        $saluran=new M_saluran();
        $bangunan=new M_bangunan();
        $bangunan->where('id_bangunan',$id_bangunan);
        $data_bangunan=$bangunan->get();
        $saluran->where('id_inventarisasi_sungai',$data_bangunan->id_inventarisasi_sungai);
        $data['saluran']=$saluran->get();
        $data['id_bangunan']=$id_bangunan;
        $data['menu_aktif']='detail_saluran';
        $this->load->view('front/detail_saluran',$data);
    }

    

    function get_json_bangunan() {
        $bangunan = new M_bangunan();
        echo json_encode($bangunan->get_json());
    }

    function add() {
        $this->load->view('admin/add_bangunan');
    }

    function edit($id) {
        $bangunan = new M_bangunan();
        $bangunan->where('id_bangunan', $id);
        $data['bangunan'] = $bangunan->get();
        $saluran=new M_saluran();
        $saluran->where('id_inventarisasi_sungai',$data['bangunan']->id_inventarisasi_sungai);
        $data['saluran']=$saluran->get();
        $this->load->view('admin/edit_bangunan', $data);
    }

    function save_edit() {

        $update = array(
            'nama_bangunan' => $this->input->post('nama_bangunan'),
            'koordinat_x_bangunan' => $this->input->post('koordinat_x_bangunan'),
            'koordinat_y_bangunan' => $this->input->post('koordinat_y_bangunan'),
            'kondisi_ada' => $this->input->post('kondisi_ada'),
            'konsep_penanganan' => $this->input->post('konsep_penanganan'),
            'id_lokasi' => $this->input->post('id_lokasi'),
            'id_inventarisasi_sungai'=> $this->input->post('id_saluran'),
        );

        $bangunan = new M_bangunan();
        $bangunan->where('id_bangunan', $this->input->post('id_bangunan'));


        for ($x = 1; $x < 5; $x++) {
            $field = "foto" . $x;
            if (isset($_FILES[$field])) {
                if ($_FILES[$field] != '') {
                    $name = $_FILES[$field]['name'];
                    $tmp = $_FILES[$field]['tmp_name'];
                    $new_name = 'swd' . $this->input->post('id_lokasi') . '-' . rand(0, 999) . date('YmdHis') . $name;
                    if (move_uploaded_file($tmp, "../image/" . $new_name)) {
                        $update[$field] = $new_name;
                    }
                    ;
                }
            }
        }
        $bangunan->update($update);
       $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil diperbarui</div>');
       redirect('bangunan/edit/' . $this->input->post('id_bangunan'));
    }

    function save_add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_patok', 'no_patok', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('item', '<div class="alert alert-danger" role="alert">Gagal menambahkan, Sepertinya Masih ada yang kosong</div>');
            redirect("bangunan/add");
        }
        $bangunan = new M_bangunan();
        $j = 1;
        foreach ($_FILES['gambar']['name'] as $key => $val) {
            $name = $_FILES['gambar']['name'][$key];
            $tmp = $_FILES['gambar']['tmp_name'][$key];

            $tmp_file = "";
            if (trim($name) != '') {
                $cek = true;
                $new_name = 'swd' . $this->input->post('id_lokasi') . '-' . rand(0, 999) . date('YmdHis') . $name;
                if (move_uploaded_file($tmp, "../image/" . $new_name)) {
                    $tmp_file = $new_name;
                } else {
                    $tmp_file = '';
                }
            }

            $data_foto[$j] = $tmp_file;
            $j++;
        }

        $bangunan->nama_bangunan = $this->input->post('nama_bangunan');
        $bangunan->koordinat_x_bangunan = $this->input->post('koordinat_x_bangunan');
        $bangunan->koordinat_y_bangunan = $this->input->post('koordinat_y_bangunan');
        $bangunan->kondisi_ada = $this->input->post('kondisi_ada');
        $bangunan->konsep_penanganan = $this->input->post('konsep_penanganan');
        $bangunan->id_lokasi = $this->input->post('id_lokasi');
        $bangunan->id_inventarisasi_sungai = $this->input->post('id_saluran');
        $bangunan->foto1 = $data_foto[1];
        $bangunan->foto2 = $data_foto[2];
        $bangunan->foto3 = $data_foto[3];
        $bangunan->foto4 = $data_foto[4];



        if ($bangunan->save()) {
            $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect('bangunan');
        }
    }

    function delete_photo($id_bangunan = null, $field = null, $foto = null) {
        $path = "../image/$foto";
        $bangunan = new M_bangunan();
        $bangunan->where('id_bangunan', $id_bangunan);
        $bangunan->update($field, '');
        unlink($path);
        $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Foto berhasil dihapus</div>');
        redirect('bangunan/edit/'.$id_bangunan);
    }

    function delete($id_bangunan=null){
        $bangunan=new M_bangunan();
        $bangunan->delete_bangunan($id_bangunan);
        $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('bangunan');
   
    }

}

?>
