<?php

class Inventarisasi_sungai extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('ion_auth'));

        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }
    }

    function index() {
        $this->load->view('admin/inv_sungai');
    }


    
    function get_inv_sungai() {
        $tb_inv_sungai = new Tb_inventarisasi_sungai();
        $data = $tb_inv_sungai->get_json();
        echo json_encode($data);
    }

    //function edit($id){
    //	$tb_inv_sungai=new Tb_inventarisasi_sungai();
    //	$tb_inv_sungai->where('id_inventarisasi_sungai',$id);
    //	$data['inventarisasi_sungai']=$tb_inv_sungai->get();
    //	$this->load->view('admin/edit_inv_sungai',$data);
    //}

    function view_tambah() {
        $this->load->view('admin/tambah_inv_sungai');
    }

    function simpan_data() {
        $tb_inv_sungai = new Tb_inventarisasi_sungai();
        $tb_inv_sungai->nama_sungai = $this->input->post('nama_sungai');
        $tb_inv_sungai->no_patok = $this->input->post('no_patok');
        $tb_inv_sungai->desa = $this->input->post('desa');
        $tb_inv_sungai->kecamatan = $this->input->post('kecamatan');
        $tb_inv_sungai->kabupaten = $this->input->post('kabupaten');
        $tb_inv_sungai->sempadan_kiri = $this->input->post('sempadan_kiri');
        $tb_inv_sungai->lereng_luar_kiri = $this->input->post('lereng_luar_kiri');
        $tb_inv_sungai->jalan_inspeksi_kiri = $this->input->post('jalan_inspeksi_kiri');
        $tb_inv_sungai->lereng_dalam_kiri = $this->input->post('lereng_dalam_kiri');
        $tb_inv_sungai->dasar_sungai = $this->input->post('dasar_sungai');
        $tb_inv_sungai->lereng_dalam_kanan = $this->input->post('lereng_luar_kanan');
        $tb_inv_sungai->jalan_inspeksi_kanan = $this->input->post('jalan_inspeksi_kanan');
        $tb_inv_sungai->lereng_luar_kanan = $this->input->post('lereng_luar_kanan');
        $tb_inv_sungai->sempadan_kanan = $this->input->post('sempadan_kanan');
        $tb_inv_sungai->pekerjaan = $this->input->post('pekerjaan');
        $tb_inv_sungai->sket = basename($_FILES["sket"]["name"]);

        if ($this->upload_sket('sket')) {
            $tb_inv_sungai->save();
            $a = $tb_inv_sungai->select_max('id_inventarisasi_sungai')->get();
            $tb_gambar_inv_sungai = new Tb_gambar_inventarisasi_sungai();
            $foto = $this->multiple_upload_foto();
            for ($x = 0; $x < count($foto); $x++) {
                $tb_gambar_inv_sungai->id_inventarisasi_sungai = $a->id_inventarisasi_sungai;
                $tb_gambar_inv_sungai->gambar = $foto[$x];
                $tb_gambar_inv_sungai->save();
            }
            $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
            redirect('inventarisasi_sungai');
        }
        else{
             $this->session->set_flashdata('item', '<div class="alert alert-warning" role="alert">'.'Gambar Sket Terlalu Besar, max 5 MB dan format file sket harus jpg|png|gif|bmp'.'</div>');
            redirect('inventarisasi_sungai/view_tambah');
        }
    }

    function upload_sket($nama_post) {
        $valid_formats = array("jpg", "png", "gif", "bmp", "PNG", "JPG", "jpeg", "JPEG");
        $max_file_size = 1024 * 5000; //5 MB
        $path = "../image/sket/"; // Upload directory
        $target_file = $path . basename($_FILES["$nama_post"]["name"]);

        if ($_FILES["$nama_post"]["error"] == 0) {
            if ($_FILES["$nama_post"]["size"] > $max_file_size) {
                $message['pesan'] = "Ukuran Gambar Terlalu Besar, max 5 MB";
            } elseif (!in_array(pathinfo($_FILES["$nama_post"]["name"], PATHINFO_EXTENSION), $valid_formats)) {
                $message['pesan'] = "Format file tidak diizinkan, format harus jpg/png/gif/bmp/jpeg";
            } else {
                if (move_uploaded_file($_FILES["$nama_post"]["tmp_name"], $target_file)) {
                    return TRUE;
                }
            }
        }
    }

    function multiple_upload_foto() {
        $valid_formats = array("jpg", "png", "gif", "bmp", "PNG", "JPG", "jpeg", "JPEG");
        $max_file_size = 1024 * 5000; //5 MB
        $path = "../image/"; // Upload directory
        $message['pesan'] = "";
        $i = 0;
        // Loop $_FILES to exeicute all files
        foreach ($_FILES['foto']['name'] as $f => $name) {

            if ($_FILES['foto']['error'][$f] == 4) {
                break; // stop file if any error found
            }
            if ($_FILES['foto']['error'][$f] == 0) {
                $target_file = $path . basename($_FILES["foto"]["name"][$f]);
                $nama_file[$i] = basename($_FILES["foto"]["name"][$f]);
                if ($_FILES['foto']['size'][$f] > $max_file_size) {
                    $message['pesan'] .= "Ukuran $name Terlalu Besar, max 5 MB\n";
                    continue;
                } elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                    $message['pesan'] .= "$name format tak sesuai, format file harus jpg/png/gif/bmp \n";
                    continue;
                } else {

                    if (!move_uploaded_file($_FILES["foto"]["tmp_name"][$f], $target_file)) {
                        return FALSE;
                    }
                }
            }
            $i++;
        }
        return $nama_file;
    }

    function view_edit($id){
            $tb_Inventarisasi_Sungai=new Tb_inventarisasi_sungai();
            $tb_Inventarisasi_Sungai->where('id_inventarisasi_sungai',$id);
            $data['inv_sungai']=$tb_Inventarisasi_Sungai->get();
            $tb_gambar_inv_sungai = new Tb_gambar_inventarisasi_sungai();
            $tb_gambar_inv_sungai->where('id_inventarisasi_sungai',$id);
            $tb_gambar_inv_sungai->get();
            $i = 0;
            foreach($tb_gambar_inv_sungai as $a) {
                $data["gambar"][$i]= $a->gambar;
                $i++;
            }
            
            //echo empty($data['gambar1']);
            $this->load->view('admin/edit_inv_sungai',$data);
    }

    function simpan_edit() {
        
        if(basename($_FILES["sket"]["name"]) == NULL) {
            $sket = $this->input->post('file_sket');
            $kondisiUploadSket = FALSE;
        } else {
            $file_lama = $this->input->post('file_sket');
            $sket = basename($_FILES["sket"]["name"]);
            $kondisiUploadSket = $this->upload_sket('sket');
            unlink("../../image/sket/$file_lama");
        }
        $foto = $this->multiple_upload_foto();
        
        echo $kondisiUploadSket;
        echo $sket;
        $update = array(
            
            'nama_sungai'           =>  $this->input->post('nama_sungai'),
            'no_patok'              =>  $this->input->post('no_patok'),
            'desa'                  =>  $this->input->post('desa'),
            'kecamatan'             =>  $this->input->post('kecamatan'),
            'kabupaten'             =>  $this->input->post('kabupaten'),
            'sket'                  =>  $sket,
            'sempadan_kiri'         =>  $this->input->post('sempadan_kiri'),
            'lereng_luar_kiri'      =>  $this->input->post('lereng_luar_kiri'),
            'jalan_inspeksi_kiri'   =>  $this->input->post('jalan_inspeksi_kiri'),
            'lereng_dalam_kiri'     =>  $this->input->post('lereng_dalam_kiri'),
            'dasar_sungai'          =>  $this->input->post('dasar_sungai'),
            'lereng_dalam_kanan'    =>  $this->input->post('lereng_dalam_kanan'),
            'jalan_inspeksi_kanan'  =>  $this->input->post('jalan_inspeksi_kanan'),
            'lereng_luar_kanan'     =>  $this->input->post('lereng_luar_kanan'),
            'sempadan_kanan'        =>  $this->input->post('sempadan_kanan'),
            'pekerjaan'             =>  $this->input->post('pekerjaan')
        
        );
        
        $tb_Inventarisasi_Sungai=new Tb_inventarisasi_sungai();
        $tb_Inventarisasi_Sungai->where('id_inventarisasi_sungai',$this->input->post('id_inv_sungai'));
        $kondisiUpdate = $tb_Inventarisasi_Sungai->update($update);
        
        if(!empty($foto)) {
            $tb_gambar_inv_sungai = new Tb_gambar_inventarisasi_sungai();
            for ($x = 0; $x < count($foto); $x++) {
                $tb_gambar_inv_sungai->id_inventarisasi_sungai =$this->input->post('id_inv_sungai');
                $tb_gambar_inv_sungai->gambar = $foto[$x];
                $tb_gambar_inv_sungai->save();
            }
        }
        
        if($kondisiUpdate) {
            $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect('inventarisasi_sungai/view_edit/' . $this->input->post('id_inv_sungai'));
        }
        
    }

    function delete($id_inventarisasi_sungai=null){
        $tb_inv_sungai=new Tb_inventarisasi_sungai();
        $a = $tb_inv_sungai->delete($id_inventarisasi_sungai);
        
        $tb_gambar = new Tb_gambar_inventarisasi_sungai();
        $b = $tb_gambar->delete($id_inventarisasi_sungai);
        
        if($a && $b) {
            $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect('Inventarisasi_sungai');
        }
       
    }

    function delete_sket($id_inventarisasi_sungai = null, $sket = null, $foto = null) {
        $path = "../image/sket/$foto";
        $tb_inv_sungai = new Tb_inventarisasi_sungai();
        $tb_inv_sungai->where('id_inventarisasi_sungai', $id_inventarisasi_sungai);
        $tb_inv_sungai->update($sket, '');
        unlink($path);
        $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Foto berhasil dihapus</div>');
        //redirect('inventarisasi_sungai/edit/'.$id_inventarisasi_sungai);
    }

    function delete_photo($id_gambar_inventarisasi_sungai = null, $foto = null, $foto = null) {
        $path = "../../image/$foto";
        $bangunan = new Tb_gambar_inventarisasi_sungai();
        $bangunan->where('id_gambar_inventarisasi_sungai', $id_gambar_inventarisasi_sungai);
        $bangunan->update($foto, '');
        unlink($path);
        $this->session->set_flashdata('item', '<div class="alert alert-success" role="alert">Foto berhasil dihapus</div>');
        redirect('inventarisasi_sungai/edit/'.$id_gambar_inventarisasi_sungai);
    }

    function delete_foto($id_invent_sungai = null,$nama_foto = null) {
        $path = "../image/$nama_foto";
        $foto = new Tb_gambar_inventarisasi_sungai();
        if($foto->delete($id_invent_sungai)) {
            unlink($path);
            $this->session->set_flashdata('item', '<div class="alert alert-info" role="alert">Foto berhasil dihapus</div>');
            redirect('inventarisasi_sungai/view_edit/'.$id_invent_sungai);
        } else {
            $this->session->set_flashdata('item', '<div class="alert alert-danger" role="alert">Foto gagal dihapus</div>');
            redirect('inventarisasi_sungai/view_edit/'.$id_invent_sungai);
        }
        
    }
}

?>