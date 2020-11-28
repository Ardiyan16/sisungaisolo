<?php
class M_peta_coba extends CI_Model {

	 public function get_data()
    {
        $query = $this->db->get("koordinat_sungai");
        return $query->result();
    }

    function detail_peta($id){
		$this->db->select('*');
		$this->db->from('koordinat_sungai a');
		$this->db->join('sungai b','b.id_sungai=a.id_sungai','left outer');
		$this->db->where('a.id_sungai', $id);
		$query = $this->db->get();
		return $query;
	}
	
	function get_study($id){
		$this->db->select('a.*,b.*');
		$this->db->from('data_study a');
		$this->db->order_by('a.tahun_study', 'DESC');
		$this->db->join('detail_study b','b.id_study=a.id_study','left outer');
		$this->db->where('b.id_sungai',$id);
		$query = $this->db->get();
		return $query;
	}

	function get_al_sungai(){
		$query = $this->db->get('sungai');
		return $query->result_array();
	}
}	