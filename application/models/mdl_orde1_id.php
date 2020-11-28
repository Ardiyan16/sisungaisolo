<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_orde1_id extends CI_Model {
	
	var $table = 'sungai';
	var $column_order = array('id_sungai','nama_sungai','orde_sungai','panjang_sungai','foto_1','foto_2','foto_3','foto_4','video','tahun_data',null); //set column field database for datatable orderable
	var $column_search = array('id_sungai','nama_sungai','orde_sungai','panjang_sungai','foto_1','foto_2','foto_3','foto_4','video','tahun_data'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_sungai' => 'asc'); // default order

	private function _get_datatables_query() {

		$this->db->from($this->table);
		$i = 0;
		foreach ($this->column_search as $item) {
			if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    // $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i); //last loop
                    // $this->db->group_end(); //close bracket


            }

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_order[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function count_filtered($kode) {
		$this->_get_datatables_query();
		$this->db->where('orde_sungai', $kode);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all($kode) {
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_datatables($kode) {
		$this->_get_datatables_query();
		$this->db->where('orde_sungai', $kode);
		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}
}	