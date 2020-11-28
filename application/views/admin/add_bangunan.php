<?php $this->load->view('admin/header') ?>
                <article class="content cards-page">
                    <div class="title-block">
                        <h3 class="title">
					        Tambah Bangunan
					    </h3>
                       <p class="title-description"> &nbsp;Menambah Data Bangunan</p>
                    </div>
                    <section class="section">
                        <div class="row">
                           <?php echo $this->session->flashdata('item'); ?>
                            <div class="col-xl-12">
                                <div class="card card-default">
                                    <!--div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Tambah Bangunan </p>
                                        </div>
                                    </div-->
                                    <div class="card-block">
                                        <form class="form-horizontal" method="POST" action="<?=base_url()?>bangunan/save_add" enctype="multipart/form-data">
                                     
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Nama Bangunan</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="nama_bangunan" required="" >
										    </div>
										  </div>
										   <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Lokasi</label>
										    <div class="col-sm-10">
										      <select class="form-control" name="id_lokasi" required="" >
										      	<option value="">-Silahkan Pilih-</option>
										      	<option value="1" >SWD 1</option>
										      	<option value="2" >SWD 2</option>
										      </select>
										    </div>
										  </div>
										   <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Koordinat X</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="koordinat_x_bangunan"   required="" >
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Koordinat Y</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="koordinat_y_bangunan"  required="" >
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Kondisi</label>
										    <div class="col-sm-10">
										      <textarea class="form-control" name="kondisi_ada"   required=""></textarea> 
										    </div>
										  </div>

										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Konsep Penanganan</label>
										    <div class="col-sm-10">
										    <textarea class="form-control" name="konsep_penanganan"  required=""></textarea>
										     
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Upload Foto Bangunan</label>
										    <div class="col-sm-10">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										     
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="no_patok" class="col-sm-2 control-label">No patok aliran sungai</label>
										    <div class="col-sm-10">
										    <div class="input-group">
											  
											   <span class="input-group-btn">
										        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal_sungai">
										        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
										        </button>
										      </span>
										      <input type="text" class="form-control" readonly="" aria-describedby="basic-addon1" style="corsor:pointer;height:38px;" id="no_patok" name="no_patok" required="">
											</div>

										     
										    </div>
										    <input type="hidden" name="id_saluran" id="id_saluran">
										  </div>

										<hr>
										  <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
										    </div>
										  </div>
										</form>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                           
                            <!-- /.col-xl-4 -->
                        </div>
                       
                        <!-- /.row -->
                    </section>
                    
                </article>

 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal_sungai">
  <div class="modal-dialog modal-lg" role="document" style="width: 90%;">
    <div class="modal-content">
     <div class="modal-body">
         <table class="table table-bordered" id="all_data_json" data-toggle="table" data-url="<?=base_url( 'saluran/get_json_saluran' )?>"  
         data-show-refresh="true" data-show-toggle="false" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" 
         data-pagination="true" data-sort-name="name" data-sort-order="desc" data-toolbar="#toolbar">
	         <thead class="thead-inverse">
	             <tr>
	                <th data-field="no_patok" data-sortable="true">No Patok</th>
	                <th data-field="nama_sungai" >Nama Sungai</th>
					<th data-field="desa | kecamatan | kabupaten"  data-formatter="wilayah" data-sortable="true">wilayah</th>
					<!--th data-field="sempadan_kiri" data-sortable="true" >Sempadan Kiri</th>
					<th data-field="lereng_luar_kiri" data-sortable="true" >Lereng luar Kiri</th>
					<th data-field="jalan_inspeksi_kiri" data-sortable="true" >Jalan inspeksi Kiri</th>
					<th data-field="lereng_dalam_kiri" data-sortable="true" >Lereng dalam Kiri</th>
					<th data-field="dasar_sungai" data-sortable="true" >Dasar Sungai</th>
					<th data-field="lereng_dalam_kanan" data-sortable="true" >Lereng dalam kanan</th>
					<th data-field="jalan_inspeksi_kanan" data-sortable="true" >Jakan inspeksi kanan</th>
					<th data-field="lereng_luar_kanan" data-sortable="true" >Lereng luar kanan</th>
					<th data-field="sempadan_kanan" data-sortable="true" >Sempadan kanan</th-->


				
					<th data-field="id_inventarisasi_sungai | no_patok" data-formatter="action_on" data-sortable="true" data-width="200" ></th>
					      
						                           
					                          
				</tr>
			</thead>
		</table>
      </div>

    </div>
  </div>
</div>
<script >
	function wilayah(value, row, index){
		return row.desa+' '+row.kecamatan+' '+row.kabupaten;
	}
	function action_on(value, row, index){
		return '<button type="button" onclick="set_saluran('+"'"+row.no_patok+"',"+row.id_inventarisasi_sungai+')" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"> Pilih</span></button>';
	}
	function set_saluran(no_patok,id_saluran){
		$("#no_patok").val(no_patok);
		$("#id_saluran").val(id_saluran);
		$("#modal_sungai").modal('hide');
		console.log(id_saluran);
	}

</script>
<?php $this->load->view('admin/footer') ?>