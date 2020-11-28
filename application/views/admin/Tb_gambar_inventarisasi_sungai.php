<?php
class Tb_gambar_inventarisasi_sungai extends DataMapper {
	var $table = 'tb_gambar_inventarisasi_sungai';

	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	function get_json(){
		$this->db->order_by("id_inventarisasi_sungai", "desc");
		$query = $this->db->get('tb_inventarisasi_sungai');
		return $query->result_array();
	}	
	
	function delete($id_inv){
		$this->db->where('id_inventarisasi_sungai', $id_inv);
		$this->db->delete('tb_gambar_inventarisasi_sungai');
		return true;
	}
}


?>