<?php
class M_line_patok extends CI_Model {

	//var $table = 'line_patok';

	function __construct()
	{
		parent::__construct();
	}

	// function get_json(){
	// 	//$this->db->order_by("id_artikel", "desc");
	// 	$this->db->select("patok.*");
	// 	$this->db->select("tb_daerah.nama_daerah as nama_daerah");
	// 	$this->db->from("patok")->join("tb_daerah","patok.id_daerah=tb_daerah.id_daerah");
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }

	// function get_json_detail_patok($id_patok){
	// 	//$this->db->order_by("id_artikel", "desc");
	// 	$this->db->select("*");
	// 	$this->db->from("detail_patok");
	// 	$this->db->where('id_patok' , $id_patok);
	// 	$query = $this->db->get();
	// 	return $query->result_array();
	// }

	// // function delete_bangunan($id){
	// // 	$this->db->where('id_bangunan', $id);
	// // 	$this->db->delete('tb_bangunan');
	// // 	return true;
	// // }

	// function get_detail_patok($id_detail_patok){
	// 	$this->db->select("*");
	// 	$this->db->from("detail_patok");
	// 	$this->db->where('id_detail_patok' , $id_detail_patok);
	// 	return $this->db->get();

	// }

	// function get_daerah(){
	// 	$this->db->select("*");
	// 	$this->db->from("tb_daerah");
	// 	$data = $this->db->get();
	// 	return $data->result_array();
	// }

	// function get_last_patok(){
	// 	$this->db->select("id_patok");
	// 	$this->db->from("patok");
	// 	$this->db->order_by("id_patok","desc");
	// 	$this->db->limit(1);
	// 	$data = $this->db->get();
	// 	return $data->result_array();
	// }

	// function get_content_detail_patok($id_patok){
	// 	$this->db->select("*");
	// 	$this->db->from("detail_patok");
	// 	$this->db->where('id_patok' , $id_patok);
	// 	$data = $this->db->get();
	// 	return $data->result_array();
	// }

	// function delete_patok($id){
	// 	$this->db->where('id_patok', $id);
	// 	$this->db->delete('patok');

	// 	$this->db->where('id_patok', $id);
	// 	$this->db->delete('detail_patok');
	// 	return true;
	// }

	function get_peta($limit, $offset){
		$this->db->select('a.*,b.*');
		$this->db->from('koordinat_sungai a');
		$this->db->join('sungai b','b.id_sungai=a.id_sungai','left outer');
		$this->db->where('b.id_sungai !=', 3);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	
	function ambil_peta(){
	    $this->db->select('a.*,b.*');
		$this->db->from('koordinat_sungai a');
		$this->db->join('sungai b','b.id_sungai=a.id_sungai','left outer');
		$this->db->group_by('b.nama_sungai');
		$query = $this->db->get();
		return $query->result_array();
	}
	

	function ambil_sungai(){
		$this->db->where('file_geojson !=','');
		$query = $this->db->get('sungai');
		return $query->result_array();
	}

	function get_beng_solo($limit, $offset){
	    $this->db->select('a.*,b.*');
		$this->db->from('koordinat_sungai a');
		$this->db->join('sungai b','b.id_sungai=a.id_sungai','left outer');
		$this->db->where('b.id_sungai', 3);
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}

	function detail_peta($id){
		$this->db->select('b.*');
		$this->db->from('sungai b');
		//$this->db->join('sungai b','b.id_sungai=a.id_sungai','left outer');
		$this->db->where('b.id_sungai', $id);
		$query = $this->db->get();
		return $query;
	}

	// function detail_peta($id){
	// 	$this->db->select('a.*,b.*');
	// 	$this->db->from('koordinat_sungai a');
	// 	$this->db->join('sungai b','b.id_sungai=a.id_sungai','left outer');
	// 	$this->db->where('b.id_sungai', $id);
	// 	$query = $this->db->get();
	// 	return $query;
	// }

	function get_study($id){
		$this->db->select('a.*,b.*');
		$this->db->from('data_study a');
		$this->db->order_by('a.tahun_study', 'DESC');
		$this->db->join('detail_study b','b.id_study=a.id_study','left outer');
		$this->db->where('b.id_sungai',$id);
		$query = $this->db->get();
		return $query;
	}

	function get_infrastruktur(){
		$query = $this->db->get('infrastruktur_terbangun');
		return $query->result();

	}

	function get_infrastruktur_ongoing(){
		$query = $this->db->get('infrastruktur_ongoing');
		return $query->result();

	}

	function get_dtanggul(){
		$query = $this->db->get('td_tanggul');
		return $query->result();

	}
	function get_dpintu(){
		$query = $this->db->get('td_pintu');
		return $query->result();

	}

	function get_drever(){
		$query = $this->db->get('td_rivertmen');
		return $query->result();

	}
	//
	function get_dtebing(){
		$query = $this->db->get('td_tebing');
		return $query->result();

	}
	//
	function get_dcekdam(){
		$query = $this->db->get('cekdam');
		return $query->result();

	}
	
    function rekap_terbangun(){
		$query = $this->db->get('infrastruktur_terbangun');
		return $query->result();

	}

	function detail_bangunan($id){
		$this->db->select('*');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('id_infrastuktur', $id);
		$query = $this->db->get();
		return $query;
	}

	function detail_ongoing($id){
		$this->db->select('*');
		$this->db->from('infrastruktur_ongoing');
		$this->db->where('id_infrastruktur_ongoing', $id);
		$query = $this->db->get();
		return $query;
	}

	function detail_tanggul($id){
		$this->db->select('*');
		$this->db->from('td_tanggul');
		$this->db->where('fn_idtanggul', $id);
		$query = $this->db->get();
		return $query;
	}

	function detail_pintu($id){
		$this->db->select('*');
		$this->db->from('td_pintu');
		$this->db->where('fv_idpintu', $id);
		$query = $this->db->get();
		return $query;
	}

	function detail_revertmen($id){
		$this->db->select('*');
		$this->db->from('td_rivertmen');
		$this->db->where('fn_id_rivertmen', $id);
		$query = $this->db->get();
		return $query;
	}

	function detail_tebing($id){
		$this->db->select('*');
		$this->db->from('td_tebing');
		$this->db->join('kecamatan','kecamatan.id_kecamatan=td_tebing.id_kecamatan', 'left outer');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=td_tebing.id_kabupaten', 'left outer');
		$this->db->join('sungai','td_tebing.id_sungai=sungai.id_sungai', 'left outer');
		$this->db->where('id_tebing', $id); 
		$query = $this->db->get();
		return $query;
	}

	function detail_cekdam($id){
		$this->db->select('*');
		$this->db->from('cekdam');
		$this->db->join('kecamatan','kecamatan.id_kecamatan=cekdam.id_kecamatan', 'left outer');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=cekdam.id_kabupaten', 'left outer');
		$this->db->join('prop','prop.id_prop=cekdam.id_prop', 'left outer');
		$this->db->where('id_cekdam', $id); 
		$query = $this->db->get();
		return $query;
	}
	
	public function add($data) {
		$this->db->insert('usulan', $data);
		return $this->db->insert_id();
	}

    public function get_usulan(){
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->where('tindak_lanjut !=','pending');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_dipa(){
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->where('tindak_lanjut','on going');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_tanggul($id){
        $this->db->from('td_tanggul');
        $this->db->where('fn_idtanggul',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_internal(){
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->where('pengirim_usulan','internal');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_eksternal(){
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->where('pengirim_usulan','eksternal');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_history(){
    	$this->db->from('tindak_lanjut');
		$this->db->join('kecamatan','kecamatan.id_kecamatan=tindak_lanjut.id_kecamatan', 'left outer');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=tindak_lanjut.id_kabupaten', 'left outer');
		$this->db->join('prop','prop.id_prop=tindak_lanjut.id_propinsi', 'left outer');
		$this->db->join('sungai','sungai.id_sungai=tindak_lanjut.id_sungai', 'left outer');
		$this->db->order_by('id_tindaklanjut','ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
     public function get_sungai(){
        $this->db->select('sungai.*, koordinat_sungai.*');
        $this->db->from('sungai');
        $this->db->join('koordinat_sungai','koordinat_sungai.id_sungai=sungai.id_sungai','left outer');
        $this->db->group_by('koordinat_sungai.id_sungai');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_sungai_eksel($id=""){
        $this->db->select('sungai.*, koordinat_sungai.*');
        $this->db->from('sungai');
        $this->db->join('koordinat_sungai','koordinat_sungai.id_sungai=sungai.id_sungai','left outer');
        if ($id!="") {
            $this->db->where("orde_sungai",$id);
        }
        $this->db->group_by('koordinat_sungai.id_sungai');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function detail_eksternal($id){
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->where('pengirim_usulan','eksternal');
        $this->db->where('id_usulan', $id);
        $query = $this->db->get();
        return $query;
    }
    
     public function detail_internal($id){
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->where('pengirim_usulan','internal');
        $this->db->where('id_usulan', $id);
        $query = $this->db->get();
        return $query;
    }

    function data_orde2($id){
    	$this->db->select('*');
    	$this->db->from('sungai');
    	$this->db->where('orde_sungai', $id);
    	 $query = $this->db->get();
        return $query->result();
    }

    function data_orde3($id){
    	$this->db->select('*');
    	$this->db->from('sungai');
    	$this->db->where('orde_sungai', $id);
    	 $query = $this->db->get();
        return $query->result();
    }
     function data_terbangun(){
    	$this->db->select('*');
    	$this->db->from('infrastruktur_terbangun');
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();

	}

	function data_ongoing(){
    	$this->db->select('*');
    	$this->db->from('infrastruktur_ongoing');
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();

	}
	function data_usulan(){
    	$this->db->select('*');
    	$this->db->from('usulan');
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();

	}

	function get_detail_ongoing(){
		$this->db->select('*');
    	$this->db->from('detail_ongoing');
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();
	}

	function get_detail_tebing(){
		$this->db->select('*');
    	$this->db->from('detail_tebing');
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();
	}

	function detail_item_ongoing($id){
		$this->db->select('a.*, b.*');
		$this->db->from('infrastruktur_ongoing a');
		$this->db->join('detail_ongoing b','b.id_infrastruktur_ongoing=a.id_infrastruktur_ongoing', 'left outer');
		$this->db->where('b.id_infrastruktur_ongoing', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function detail_item_tebing($id){
		$this->db->select('*');
    	$this->db->from('td_tebing');
    	$this->db->join('detail_tebing','detail_tebing.id_tebing=td_tebing.id_tebing', 'left outer');
		$this->db->where('td_tebing.id_tebing', $id);
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();
	}

	function detail_item_tanggul($id){
		$this->db->select('*');
    	$this->db->from('td_tanggul');
    	$this->db->join('detail_tanggul','td_tanggul.fn_idtanggul=detail_tanggul.fn_idtanggul', 'left outer');
		$this->db->where('td_tanggul.fn_idtanggul', $id);
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();
	}

	function detail_item_cekdam($id){
		$this->db->select('*');
    	$this->db->from('cekdam');
    	$this->db->join('detail_cekdam','cekdam.id_cekdam=detail_cekdam.id_cekdam', 'left outer');
		$this->db->where('detail_cekdam.id_cekdam', $id);
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();
	}

	function detail_item_revertmen($id){
		$this->db->select('*');
    	$this->db->from('td_rivertmen');
    	$this->db->join('detail_revertmen','td_rivertmen.fn_id_rivertmen=detail_revertmen.fn_id_rivertmen', 'left outer');
		$this->db->where('detail_revertmen.fn_id_rivertmen', $id);
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();
	}

	function detail_item_pintu($id){
		$this->db->select('*');
    	$this->db->from('td_pintu');
    	$this->db->join('detail_pintu','td_pintu.fv_idpintu=detail_pintu.fv_idpintu', 'left outer');
		$this->db->where('detail_pintu.fv_idpintu', $id);
    	$query = $this->db->get();
		// $query = $this->db->get('infrastruktur_terbangun');
		return $query->result();
	}

	function get_koordinat_tanggul(){
		$this->db->join('td_tanggul','td_tanggul.fn_idtanggul=td_koordinat_tanggul.fn_idtanggul','left outer');
		$query = $this->db->get('td_koordinat_tanggul');
		return $query->result();
	}

	function get_api_infrastruktur_ongoing(){
    	$query = $this->db->get('infrastruktur_ongoing');
    	return $query;
	}
	
	function get_api_infrastruktur_terbangun(){
		$query = $this->db->get('infrastruktur_terbangun');
    	return $query;
	}

	function get_api_tanggul(){
		$query = $this->db->get('td_tanggul');
    	return $query;
	}

	function get_api_pintu(){
		$query = $this->db->get('td_pintu');
    	return $query;
	}

	function get_api_revertmen(){
		$query = $this->db->get('td_rivertmen');
    	return $query;
	}

	function get_api_tebing(){
		$query = $this->db->get('td_tebing');
    	return $query;
	}

	function get_api_cekdam(){
		$query = $this->db->get('cekdam');
    	return $query;
	}

	function get_api_koordinat_tanggul(){
		$this->db->join('td_tanggul','td_tanggul.fn_idtanggul=td_koordinat_tanggul.fn_idtanggul','left outer');
		$this->db->join('sungai','sungai.id_sungai=td_tanggul.id_sungai','left outer');
		$query = $this->db->get('td_koordinat_tanggul');
    	return $query;
	}

	function get_api_koordinat_sungai(){
		$this->db->join('sungai','sungai.id_sungai=koordinat_sungai.id_sungai','left outer');
		$query = $this->db->get('koordinat_sungai');
    	return $query;
	}

	function get_api_usulan_internal(){
		$this->db->where('pengirim_usulan','internal');
		$query = $this->db->get('usulan');
    	return $query;
	}

	function get_api_usulan_eksternal(){
		$this->db->where('pengirim_usulan','eksternal');
		$query = $this->db->get('usulan');
    	return $query;
	}

}
