<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_detail_tebing extends CI_Model {
	

	var $table = 'detail_tebing';
	var $column_order = array('id_tebing','tanggal_inspeksi','tjenis_bgn','tbagian_bgn','tkerusakan','tusulan_pbk','tpanjang','tlebar','ttinggi','tvolume','tket','tn_kinerja'); //set column field database for datatable orderable
	var $column_search = array('id_tebing','tanggal_inspeksi','tjenis_bgn','tbagian_bgn','tkerusakan','tusulan_pbk','tpanjang','tlebar','ttinggi','tvolume','tket','tn_kinerja'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_detail_tebing' => 'asc'); // default order

	private function _get_datatables_query() {

		$this->db->from($this->table);
		$i = 0;
		foreach ($this->column_search as $item) {
			if($_POST['search']['value']) 
            {
                if($i===0)
                {
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                	$this->db->or_like('id_detail_tebing',$_POST['search']['value']);
                	$this->db->or_like('id_tebing',$_POST['search']['value']);
                	$this->db->or_like('tanggal_inspeksi',$_POST['search']['value']);
                	$this->db->or_like('tjenis_bgn',$_POST['search']['value']);
                	$this->db->or_like('tbagian_bgn',$_POST['search']['value']);
                	$this->db->or_like('tkerusakan',$_POST['search']['value']);
                	$this->db->or_like('tusulan_pbk',$_POST['search']['value']);
                    $this->db->or_like('tpanjang',$_POST['search']['value']);
                    $this->db->or_like('ttinggi',$_POST['search']['value']);
                    $this->db->or_like('tvolume',$_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i); 
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