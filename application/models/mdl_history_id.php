<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_history_id extends CI_Model {	
	var $table = 'tindak_lanjut';
	var $column_order = array('id_tindaklanjut','id_sungai','STA','kodetitikawal','kodetitikakhir','panjang','panjangkerusakan','desa','nama_kecamatan','nama_kabupaten','nama_prop','latitude_awal','longitude_awal','latitude_akhir','longitude_akhir','identifikasi','kondisi','fungsi','kinerja','operasi_rp','rutin_rp','berkala_rp','total_rp','rencana','dokumentasi ','dokumentasi2','b_kondisi_kinerja','b_panjang','cb_kondisi_kinerja','cb_panjang','r_kondisi_kinerja','r_panjang','tindaklanjut','letak',null); //set column field database for datatable orderable
	var $column_search = array('id_tindaklanjut','id_sungai','STA','kodetitikawal','kodetitikakhir','panjang','panjangkerusakan','desa','nama_kecamatan','nama_kabupaten','nama_prop','latitude_awal','longitude_awal','latitude_akhir','longitude_akhir','identifikasi','kondisi','fungsi','kinerja','operasi_rp','rutin_rp','berkala_rp','total_rp','rencana','dokumentasi ','dokumentasi2','b_kondisi_kinerja','b_panjang','cb_kondisi_kinerja','cb_panjang','r_kondisi_kinerja','r_panjang','tindaklanjut','letak'); //set column field database for datatable searchable just title , 
	var $order = array('id_tindaklanjut' => 'asc'); // default order



	private function _get_datatables_query() {

		$this->db->from($this->table);
		$this->db->join('kecamatan','kecamatan.id_kecamatan=tindak_lanjut.id_kecamatan');
		$this->db->join('kabupaten','kabupaten.id_kabupaten=tindak_lanjut.id_kabupaten');
		$this->db->join('prop','prop.id_prop=tindak_lanjut.id_propinsi');
		//$this->db->where('id_sungai',$kode);
		$this->db->order_by('id_tindaklanjut','ASC');
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
		$this->db->where('id_sungai', $kode);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all($kode) {
		$this->db->from($this->table);
		$this->db->where('id_sungai', $kode);
		return $this->db->count_all_results();
	}

	public function get_datatables($kode) {
		$this->_get_datatables_query();
		$this->db->where('id_sungai', $kode);
		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}
}	