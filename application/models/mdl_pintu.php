<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_pintu extends CI_Model {
	
	var $table = 'td_pintu';
	var $column_order = array('fn_idsungai','fv_kodelokasi','fv_desa','fv_kecamatan','fv_kabupaten','fv_provinsi','fv_lintang','fv_bujur','fv_identifikasi','fv_dokumentasi','fv_keterangan'); //set column field database for datatable orderable
	var $column_search = array('fn_idsungai','fv_kodelokasi','fv_desa','fv_kecamatan','fv_kabupaten','fv_provinsi','fv_lintang','fv_bujur','fv_identifikasi','fv_dokumentasi','fv_keterangan'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('fn_idsungai' => 'asc'); // default order

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

	function count_filtered() {
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all() {
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_datatables() {
		$this->_get_datatables_query();

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}
}	