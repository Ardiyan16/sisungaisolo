<?php
class Tb_inventarisasi_sungai extends DataMapper {
	var $table = 'tb_inventarisasi_sungai';

	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	function get_json(){
		$this->db->order_by("id_inventarisasi_sungai", "desc");
		$query = $this->db->get('tb_inventarisasi_sungai');
		return $query->result_array();
	}	
	
	function delete($id){
		$this->db->where('id_inventarisasi_sungai', $id);
		$this->db->delete('tb_inventarisasi_sungai');
		return true;
	}
	
}


?>