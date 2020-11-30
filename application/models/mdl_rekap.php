<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_rekap extends CI_Model
{

	var $table = 'sungai';
	var $column_order = array('id_sungai', 'nama_sungai', 'orde_sungai', 'panjang_sungai', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'video', 'tahun_data', null); //set column field database for datatable orderable
	var $column_search = array('id_sungai', 'nama_sungai', 'orde_sungai', 'panjang_sungai', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'video', 'tahun_data'); //set column field database for datatable searchable just title , author , category are searchable
	var $order = array('id_sungai' => 'asc'); // default order

	var $table2 = 'sungai';
	var $column_orderid = array('id_sungai', 'nama_sungai', 'orde_sungai', 'panjang_sungai', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'video', 'tahun_data', null); //set column field database for datatable orderable
	var $column_searchid = array('id_sungai', 'nama_sungai', 'orde_sungai', 'panjang_sungai', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'video', 'tahun_data');
	var $orderid = array('id_sungai' => 'asc');

	private function _get_datatables_query()
	{
		$this->db->from($this->table);
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

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_datatables()
	{
		$this->_get_datatables_query();

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}

	public function get_panjang($id_blok = "")
	{
		$this->db->select_sum('panjang_sungai');
		if ($id_blok != "") {
			$this->db->where("orde_sungai", $id_blok);
		}
		$query = $this->db->get('sungai');
		return $query->row();
	}

	public function get_datatablesid($id_blok = "")
	{
		$this->_get_datatables_queryid($id_blok);
		//	$this->db->where('orde_sungai',$id);

		if ($_REQUEST['length'] != -1) {
			$this->db->limit($_REQUEST['length'], $_REQUEST['start']);
		}

		$query = $this->db->get();
		return $query->result();
	}

	private function _get_datatables_queryid($id_blok = "")
	{
		$this->db->from($this->table2);
		if ($id_blok != "") {
			$this->db->where("orde_sungai", $id_blok);
		}
		$i = 0;


		foreach ($this->column_searchid as $item) {
			if ($_POST['search']['value']) // if datatable send POST for search
			{

				if ($i === 0) // first loop
				{
					// $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_searchid) - 1 == $i); //last loop
				// $this->db->group_end(); //close bracket


			}

			$i++;
		}

		if (isset($_REQUEST['order'])) {
			$this->db->order_by($this->column_orderid[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
		} else if (isset($this->orderid)) {
			$order = $this->orderid;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function count_filteredid($id_blok = "")
	{
		$this->_get_datatables_queryid($id_blok);
		//$this->db->where('orde_sungai',$id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function count_allid($id_blok = "")
	{
		$this->db->from($this->table2);
		return $this->db->count_all_results();
	}

	public function grafik_lokal()
	{
		$this->db->select('bulan');
		$this->db->select('nilai');
		$this->db->where('kode', '0');
		$this->db->where('tahun', date('Y'));
		$query = $this->db->get('grafik');
		return $query->result_array();
	}

	public function grafik_internal()
	{
		$sql = "select pengirim_usulan as hasil, count(*) as total from usulan group by hasil";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function grafik_terbangun()
	{
		$sql = "select nama_paket as paket, count(*) as total from infrastruktur_terbangun group by paket";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function grafik_usulan()
	{
		$sql = "select tindak_lanjut as hasil, count(*) as total from usulan where tindak_lanjut='pending' or tindak_lanjut='ditolak' or tindak_lanjut='on going' group by hasil";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function grafik_lanjut()
	{
		$sql = "select tindak_lanjut as hasil, count(*) as total from usulan where tindak_lanjut='pending' or tindak_lanjut='sudah di survei' or tindak_lanjut='sudah dibangun' or tindak_lanjut='sudah masuk usulan dipa' group by hasil";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function parapet()
	{
		$this->db->select('count(volume) as volumene,satuan, nama_paket');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('nama_paket', 'Parepet');
		$query = $this->db->get();
		return $query->row();
	}

	public function revetment()
	{
		$this->db->select('count(volume) as volumea,satuan,nama_paket');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('nama_paket', 'Revetmen Beton');
		$query = $this->db->get();
		return $query->row();
	}

	public function tanggul_tanah()
	{
		$this->db->select('count(volume) as volumene,satuan,nama_paket');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('nama_paket', 'Tanggul Tanah');
		$query = $this->db->get();
		return $query->row();
	}

	public function bendung()
	{
		$this->db->select('count(volume) as volumene,satuan,nama_paket');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('nama_paket', 'Bendung');
		$query = $this->db->get();
		return $query->row();
	}

	public function cekdam()
	{
		$this->db->select('count(volume) as volumene,satuan,nama_paket');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('nama_paket', 'Grandsill/Cekdam');
		$query = $this->db->get();
		return $query->row();
	}


	public function pompa_air()
	{
		$this->db->select('count(volume) as volumene,satuan,nama_paket');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('nama_paket', 'Pompa Air');
		$query = $this->db->get();
		return $query->row();
	}

	public function pintu_air()
	{
		$this->db->select('count(volume) as volumene,satuan,nama_paket');
		$this->db->from('infrastruktur_terbangun');
		$this->db->where('nama_paket', 'Pintu Air');
		$query = $this->db->get();
		return $query->row();
	}

	public function count_orde_1()
	{
		$this->db->select('count(orde_sungai) as orde_1, orde_sungai');
		$this->db->from('sungai');
		$this->db->where('orde_sungai', '1');
		$query = $this->db->get();
		return $query->row();
	}

	public function count_orde_2()
	{
		$this->db->select('count(orde_sungai) as orde_2, id_sungai, orde_sungai');
		$this->db->from('sungai');
		$this->db->where('orde_sungai', '2');
		$query = $this->db->get();
		return $query->row();
	}

	public function count_orde_3()
	{
		$this->db->select('count(orde_sungai) as orde_3, orde_sungai');
		$this->db->from('sungai');
		$this->db->where('orde_sungai', '3');
		$query = $this->db->get();
		return $query->row();
	}

	public function count_terbangun()
	{
		$this->db->select('count(id_infrastuktur) as id');
		$this->db->from('infrastruktur_terbangun');
		$query = $this->db->get();
		return $query->row();
	}

	public function count_ongoing()
	{
		$this->db->select('count(id_infrastruktur_ongoing) as id2');
		$this->db->from('infrastruktur_ongoing');
		$query = $this->db->get();
		return $query->row();
	}

	public function count_usulan()
	{
		$this->db->select('count(id_usulan) as id3');
		$this->db->from('usulan');
		$query = $this->db->get();
		return $query->row();
	}

	function detail_item_ongoing($id)
	{
		$this->db->select('a.*, b.*');
		$this->db->from('infrastruktur_ongoing a');
		$this->db->join('detail_ongoing b', 'b.id_infrastruktur_ongoing=a.id_infrastruktur_ongoing', 'left outer');
		$this->db->where('b.id_infrastruktur_ongoing', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function getAllData()
	{
		$tanggul;

		$tanggul = $this->getAssetTanggul();

		$newObj = array();
		foreach ($tanggul as $s) {
			if ($s->fn_idtanggul != null) {
				$kor = $this->getDetTanggul($s->fn_idtanggul);
				//  print_r($this->db->last_query());
				$s = (array) $s;
				$s['kor'] = $kor;
				$s = (object) $s;
			} else {
				$s = (array) $s;
				$s['kor'] = null;
				$s = (object) $s;
			}
			$newObj[] = $s;
		}

		return $newObj;
	}

	function getDetTanggul($id)
	{
		$this->db->select('*');
		$this->db->from('detail_tanggul');
		$this->db->join('petugas', 'petugas.id_petugas=detail_tanggul.id_petugas');
		$this->db->where('fn_idtanggul', $id);
		$this->db->limit(1);
		$this->db->order_by('bulan', 'desc');
		$this->db->order_by('tahun', 'desc');
		return $this->db->get()->result();
	}

	public function getAssetTanggul()
	{
		$this->db->select('*');
		$this->db->from('td_tanggul');
		$data = $this->db->get()->result();
		return $data;
	}

	function getDetTanggul2($id)
	{
		$this->db->select('*')->where('fn_idtanggul', $id)->limit(1)->order_by('bulan,tahun', 'desc');
		return $this->db->get('detail_tanggul')->row();
	}

	public function getAssetTanggul2()
	{
		$this->db->select('*');
		$this->db->from('td_tanggul');
		//$this->db->join('detail_tanggul','td_tanggul.fn_idtanggul=detail_tanggul.fn_idtanggul', 'left outer');
		$data = $this->db->get()->row();
		return $data;
	}

	public function getAllDataRevertmen()
	{
		$revertmen;

		$revertmen = $this->getAssetRevertmen();

		$newObj = array();
		foreach ($revertmen as $s) {
			if ($s->fn_id_rivertmen != null) {
				$kor = $this->getDetRevertmen($s->fn_id_rivertmen);
				// print_r($this->db->last_query());
				$s = (array) $s;
				$s['kor'] = $kor;
				$s = (object) $s;
			} else {
				$s = (array) $s;
				$s['kor'] = null;
				$s = (object) $s;
			}
			$newObj[] = $s;
		}

		return $newObj;
	}

	function getAssetRevertmen()
	{
		$this->db->select('*');
		$this->db->from('td_rivertmen');
		$data = $this->db->get()->result();
		return $data;
	}

	function getDetRevertmen($id)
	{
		$this->db->select('*');
		$this->db->from('detail_revertment');
		$this->db->join('petugas', 'petugas.id_petugas=detail_revertmen.id_petugas');
		$this->db->where('fn_id_rivertmen', $id);
		$this->db->limit(1);
		$this->db->order_by('bulan', 'desc');
		$this->db->order_by('tahun', 'desc');
		return $this->db->get()->result();
	}

	public function getAllDataPintu()
	{

		$pintu;

		$pintu = $this->getAssetPintu();

		$newObj = array();
		foreach ($pintu as $s) {
			if ($s->fv_idpintu != null) {
				$kor = $this->getDetPintu($s->fv_idpintu);
				$s = (array) $s;
				$s['kor'] = $kor;
				$s = (object) $s;
			} else {
				$s = (array) $s;
				$s['kor'] = null;
				$s = (object) $s;
			}
			$newObj[] = $s;
		}

		return $newObj;
	}

	function getAssetPintu()
	{
		$this->db->select('*');
		$this->db->from('td_pintu');
		$data = $this->db->get()->result();
		return $data;
	}

	function getDetPintu($id)
	{
		$this->db->select('*');
		$this->db->from('detail_pintu');
		$this->db->join('petugas', 'petugas.id_petugas=detail_pintu.id_petugas');
		$this->db->where('fv_idpintu', $id);
		$this->db->limit(1);
		$this->db->order_by('bulan', 'desc');
		$this->db->order_by('tahun', 'desc');
		return $this->db->get()->result();
	}

	public function getAllDataCekdam()
	{
		$cekdam;
		$cekdam = $this->getAssetCekdam();
		//print_r($this->db->last_query());
		$newObj = array();
		foreach ($cekdam as $s) {
			if ($s->id_cekdam != null) {
				$kor = $this->getDetCekdam($s->id_cekdam);
				//print_r($this->db->last_query());
				$s = (array) $s;
				$s['kor'] = $kor;
				$s = (object) $s;
			} else {
				$s = (array) $s;
				$s['kor'] = null;
				$s = (object) $s;
			}
			$newObj[] = $s;
		}

		return $newObj;
	}

	function getAssetCekdam()
	{
		$this->db->select('*');
		$this->db->from('cekdam');
		$this->db->join('detail_cekdam', 'detail_cekdam.id_cekdam=cekdam.id_cekdam', 'left outer');
		$this->db->join('kecamatan', 'kecamatan.id_kecamatan=cekdam.id_kecamatan', 'left outer');
		$this->db->join('kabupaten', 'kabupaten.id_kabupaten=cekdam.id_kabupaten', 'left outer');
		$this->db->join('prop', 'prop.id_prop=cekdam.id_prop', 'left outer');
		$data = $this->db->get()->result();
		return $data;
	}

	public function getDetCekdam($id)
	{
		$this->db->select('*');
		$this->db->from('detail_cekdam');
		$this->db->where('id_cekdam', $id);
		$this->db->limit(1);
		$this->db->order_by('bulan', 'desc');
		$this->db->order_by('tahun', 'desc');
		return $this->db->get()->result();
	}

	public function getAllDataTebing()
	{
		$tebing = $this->getAssetTebing();
		//print_r($this->db->last_query());
		$newObj = array();
		foreach ($tebing as $s) {
			if ($s->id_tebing != null) {
				$kor = $this->getDetTebing($s->id_tebing);
				//print_r($this->db->last_query());
				$s = (array) $s;
				$s['kor'] = $kor;
				$s = (object) $s;
			} else {
				$s = (array) $s;
				$s['kor'] = null;
				$s = (object) $s;
			}
			$newObj[] = $s;
		}

		return $newObj;
	}

	public function getAssetTebing()
	{
		$this->db->select('*');
		$this->db->from('td_tebing');
		$this->db->join('sungai', 'td_tebing.id_sungai=sungai.id_sungai', 'left outer');
		$this->db->join('detail_tebing', 'detail_tebing.id_tebing=td_tebing.id_tebing', 'left outer');
		$this->db->join('kecamatan', 'kecamatan.id_kecamatan=td_tebing.id_kecamatan', 'left outer');
		$this->db->join('kabupaten', 'kabupaten.id_kabupaten=td_tebing.id_kabupaten', 'left outer');
		$data = $this->db->get()->result();
		// echo json_encode($data);
		return $data;
	}

	public function getDetTebing($id)
	{
		$this->db->select('*')->where('id_tebing', $id)->limit(1)->order_by('bulan,tahun', 'desc');
		return $this->db->get('detail_tebing')->result();
	}

	public function getAssetData($tanggul = false, $kec = false, $tanah = false, $bangunan = false)
	{
		// $now = date('Y-m-d');
		$this->db->select('*');
		$this->db->from('td_tanggul');
		$this->db->join('detail_tanggul', 'detail_tanggul.fn_idtanggul=td_tanggul.fn_idtanggul', 'left outer');
		// if ($upt) {
		//     $this->db->where('upt.fv_nama_upt', $tanggul);
		// } else if ($kec) {
		//     $this->db->where('kec.fv_namakec', $kec);
		// } else if ($tanah) {
		//     $this->db->where('ass.fv_tipe_bangunan', '');
		// } else if ($bangunan) {
		//     $this->db->where('ass.fv_peruntukan_tanah', '');
		// }
		// $this->db->order_by('ass.fn_kdasset','asc');
		$data = $this->db->get()->result();
		// echo json_encode($data);
		return $data;
	}
}
