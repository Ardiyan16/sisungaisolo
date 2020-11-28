<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sungai extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_sungai');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}
	
	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "admin_view/moduls/sungai";
        $this->load->view('admin_view/admin',$data);
    }
	
	public function ajax_list() {
		$list = $this->Mdl_sungai->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $sungai) {
			if($sungai->foto_1==''){ $cover = 'no_image.jpg'; }else{ $cover = $sungai->foto_1; }
			if($sungai->foto_2==''){ $cover2 = 'no_image.jpg'; }else{ $cover2 = $sungai->foto_2; }
			if($sungai->foto_3==''){ $cover3 = 'no_image.jpg'; }else{ $cover3 = $sungai->foto_3; }
			if($sungai->foto_4==''){ $cover4 = 'no_image.jpg'; }else{ $cover4 = $sungai->foto_4; }
			$row2 = '<img src="'.base_url().'data/img/bangunan/'.$cover.'" style="height: 500px; width: 600px;">';
			$row3 = '<img src="'.base_url().'data/img/bangunan/'.$cover2.'" style="height: 500px; width: 600px;">';
			$row4 = '<img src="'.base_url().'data/img/bangunan/'.$cover3.'" style="height: 500px; width: 600px;">';
			$row5 = '<img src="'.base_url().'data/img/bangunan/'.$cover4.'" style="height: 500px; width: 600px;">';
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $sungai->nama_sungai;
			$row[] = $sungai->orde_sungai;
			$row[] = $sungai->panjang_sungai;
			$row[] = '
					  <a href="#modal-table'.$sungai->id_sungai.'" data-toggle="modal" class="tooltip-success" data-rel="tooltip" title="Edit">
						<span class="green">
							<i class="ace-icon fa fa-eye bigger-120"></i>
						</span>
					  </a>
					  <div id="modal-table'.$sungai->id_sungai.'" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
									Gambar
									</div>
								</div>

								<div class="modal-body no-padding">
								<div align="center">
									'.$row2.'
								</div>		
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div>	
					 ';
			$row[] = '
					  <a href="#modal-table'.$sungai->id_sungai.'" data-toggle="modal" class="tooltip-success" data-rel="tooltip" title="Edit">
						<span class="green">
							<i class="ace-icon fa fa-eye bigger-120"></i>
						</span>
					  </a>
					  <div id="modal-table'.$sungai->id_sungai.'" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
									Gambar
									</div>
								</div>

								<div class="modal-body no-padding">
								<div align="center">
									'.$row3.'
								</div>		
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div>	
					 ';	
			$row[] = '
					  <a href="#modal-table'.$sungai->id_sungai.'" data-toggle="modal" class="tooltip-success" data-rel="tooltip" title="Edit">
						<span class="green">
							<i class="ace-icon fa fa-eye bigger-120"></i>
						</span>
					  </a>
					  <div id="modal-table'.$sungai->id_sungai.'" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
									Gambar
									</div>
								</div>

								<div class="modal-body no-padding">
								<div align="center">
									'.$row4.'
								</div>		
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div>	
					 ';		
			$row[] = '
					  <a href="#modal-table'.$sungai->id_sungai.'" data-toggle="modal" class="tooltip-success" data-rel="tooltip" title="Edit">
						<span class="green">
							<i class="ace-icon fa fa-eye bigger-120"></i>
						</span>
					  </a>
					  <div id="modal-table'.$sungai->id_sungai.'" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
									Gambar
									</div>
								</div>

								<div class="modal-body no-padding">
								<div align="center">
									'.$row5.'
								</div>		
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div>	
					 ';		
			$row[] = $sungai->video;
					   	 
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$sungai->id_sungai."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$sungai->id_sungai."'".')">Delete</a></li>
							
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_sungai->count_all(),
						"recordsFiltered" => $this->Mdl_sungai->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function add(){
		$data['view_file']    = "admin_view/moduls/sungai_add";
        $this->load->view('admin_view/admin',$data);
	}

	
}	