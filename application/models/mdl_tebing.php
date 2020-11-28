<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_tebing extends CI_Model {
	

	var $table = 'td_tebing';
	var $column_order = array('id_tebing','nama_sungai','desa','nama_kecamatan','nama_kabupaten','longitude','latitude','jenis_bangunan','id_kecamatan'); //set column field database for datatable orderable
	var $column_search = array('id_tebing','nama_sungai','desa','nama_kecamatan','nama_kabupaten','latitude','longitude','jenis_bangunan'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_tebing' => 'asc'); // default order

	private function _get_datatables_query() {

		$this->db->from($this->table);

		$this->db->join('kecamatan','kecamatan.id_kecamatan=td_tebing.id_kecamatan');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=td_tebing.id_kabupaten');
		$this->db->join('sungai','sungai.id_sungai=td_tebing.id_sungai');
		$this->db->order_by('id_tebing','asc');
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
                	$this->db->or_like('id_tebing',$_POST['search']['value']);
                	$this->db->or_like('nama_sungai',$_POST['search']['value']);
                	$this->db->or_like('desa',$_POST['search']['value']);
                	$this->db->or_like('nama_kecamatan',$_POST['search']['value']);
                	$this->db->or_like('nama_kabupaten',$_POST['search']['value']);
                	$this->db->or_like('latitude',$_POST['search']['value']);
                	$this->db->or_like('longitude',$_POST['search']['value']);
                	$this->db->or_like('jenis_bangunan',$_POST['search']['value']);
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