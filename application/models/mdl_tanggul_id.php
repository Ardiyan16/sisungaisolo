<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_tanggul_id extends CI_Model
{
	var $table = 'detail_tanggul';
	var $column_order = array('id_detail_tanggul', 'fn_idtanggul', 'tahun', 'bulan', 'tjenis_bgn	',	'tbagian_bgn', 'tkerusakan', 'tusulan_pbk', 'tpanjang	',	'tlebar	', 'ttinggi', 'tvolume', 'tket', 'tn_kinerja', 'tkinerja', 'ttindakan', 'id_petugas	', null); //set column field database for datatable orderable
	var $column_search = array('id_detail_tanggul', 'fn_idtanggul', 'tahun', 'bulan', 'tjenis_bgn	',	'tbagian_bgn', 'tkerusakan', 'tusulan_pbk', 'tpanjang	',	'tlebar	', 'ttinggi', 'tvolume', 'tket', 'tn_kinerja', 'tkinerja', 'ttindakan', 'id_petugas'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_detail_tanggul' => 'asc'); // default order

	private function _get_datatables_query()
	{
		//$this->db->select('detail_tanggul.id_detail_tanggul', 'detail_tanggul.fn_idtanggul', 'detail_tanggul.tahun', 'detail_tanggul.bulan', 'detail_tanggul.tjenis_bgn', 'detail_tanggul.tbagian_bgn', 'detail_tanggul.tkerusakan', 'detail_tanggul.tusul_pbk', 'detail_tanggul.tpanjang', 'detail_tanggul.tlebar', 'detail_tanggul.ttinggi', 'detail_tanggul.tvolume', 'detail_tanggul.tket', 'detail_tanggul.tn_kinerja', 'detail_tanggul.tkinerja', 'detail_tanggul.ttindakan', 'detail_tanggul.id_petugas', 'petugas.nama_petugas');
		$this->db->from('detail_tanggul', 'petugas');
		$i = 0;
		foreach ($this->column_search as $item) {
			if ($_POST['search']['value']) // if datatable send POST for search
			{

				if ($i === 0) // first loop
				{
					// $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i); //last loop
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

	function count_filtered($kode)
	{
		$this->_get_datatables_query();
		//$this->db->join('petugas', 'petugas.id_petugas=detail_tanggul.id_petugas');
		$this->db->where('fn_idtanggul', $kode);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all($kode)
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_datatables($kode)
	{
		$this->_get_datatables_query();
		$this->db->join('petugas', 'petugas.id_petugas=detail_tanggul.id_petugas', 'left outer');
		$this->db->where('fn_idtanggul', $kode);
		$this->db->limit(1);
		$this->db->order_by('bulan,tahun', 'desc');
		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}
}
