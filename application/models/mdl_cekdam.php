<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_cekdam extends CI_Model {
	

	var $table = 'cekdam';
	var $column_order = array('id_cekdam','nama_cekdam','nama_sungai','nama_kabupaten','nama_kecamatan','nama_prop','latitude','longitude','fv_identifikasi','fv_n_kondisi'); //set column field database for datatable orderable
	var $column_search = array('id_cekdam','nama_cekdam','nama_sungai','id_kecamatan','id_kabupaten','id_prop','latitude','longitude','fv_identifikasi','fv_n_kondisi','fv_kondisi','fv_fungsi','fv_kerja_op','fv_kinerja_op','fv_tindakan','nama_kabupaten', 'nama_kecamatan','nama_prop'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_cekdam' => 'asc'); // default order

	private function _get_datatables_query() {

		$this->db->from($this->table);

		$this->db->join('kecamatan','kecamatan.id_kecamatan=cekdam.id_kecamatan','left outer');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=cekdam.id_kabupaten','left outer');
		$this->db->join('prop','prop.id_prop=cekdam.id_prop','left outer');
		$this->db->join('sungai','sungai.id_sungai=cekdam.id_sungai','left outer');
		$this->db->order_by('id_cekdam','asc');
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

                	$this->db->or_like('id_cekdam',$_POST['search']['value']);
                	$this->db->or_like('nama_cekdam',$_POST['search']['value']);
                	$this->db->or_like('nama_sungai',$_POST['search']['value']);
                	$this->db->or_like('latitude',$_POST['search']['value']);
                	$this->db->or_like('longitude',$_POST['search']['value']);
                	$this->db->or_like('fv_identifikasi',$_POST['search']['value']);
                	$this->db->or_like('fv_n_kondisi',$_POST['search']['value']);
                	$this->db->or_like('fv_kondisi',$_POST['search']['value']);
                	$this->db->or_like('fv_fungsi',$_POST['search']['value']);
                	$this->db->or_like('fv_kerja_op',$_POST['search']['value']);
                	$this->db->or_like('fv_kinerja_op',$_POST['search']['value']);
                	$this->db->or_like('fv_tindakan',$_POST['search']['value']);
    				$this->db->or_like('nama_kabupaten', $_POST['search']['value']);
    				$this->db->or_like('nama_kecamatan', $_POST['search']['value']);
    				$this->db->or_like('nama_prop', $_POST['search']['value']);
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
