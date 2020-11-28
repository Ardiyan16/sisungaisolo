<?php $this->load->view('admin/header') ?>
                <article class="content cards-page">
                    <div class="title-block">
                        <h3 class="title">
					        Tambah Detail Patok
					    </h3>
                       <p class="title-description"> &nbsp;Menambah Detail Patok</p>
                    </div>
                    <section class="section">
                        <div class="row">
          
                            <div class="col-xl-12">
                                <div class="card card-default">
                                    <!--div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Tambah Bangunan </p>
                                        </div>
                                    </div-->
                                    <div class="card-block">
                                        <form class="form-horizontal" method="POST" action="<?=base_url()?>patok_/save_add_detail" enctype="multipart/form-data">
                                     	<div class="form-group">
                                     		<input type="hidden" name="id_patok" value="<?php echo $id_patok ?>">
										    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Patok</label>
										    <div class="col-sm-10">
										      <select class="form-control" name="jenis_patok" required="" >
										      	<option value="">-Silahkan Pilih-</option>
										      	<?php 
										      	foreach ($jenis_patok as $j) {
										      	?>
										      	<option value="<?php echo $j ?>"><?php echo $j ?></option>
										      	<?php
										      	}
										      	 ?>
										      </select>
										    </div>
										</div>
										<div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Kondisi</label>
										    <div class="col-sm-10">
										      <textarea  name="kondisi"   class="form-control" rows="10"> </textarea>
										    </div>
										</div>

										<div class="form-group">
                                			<label for="inputEmail3" class="col-sm-2 control-label">Konsep Penanganan</label>
                                			<div class="col-sm-10">
                                    			<textarea  name="konsep_penanganan"   class="form-control" rows="10"></textarea>
                                			</div>
                            			</div>
										<div class="form-group">
                                			<label for="inputEmail3" class="col-sm-2 control-label">Tingkat Resiko</label>
                                			<div class="col-sm-10">
                                    			<input type="text" class="form-control" name="tingkat_resiko">
                                			</div>
                            			</div>
										  
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Upload Foto Patok</label>
										    <div class="col-sm-10">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										   		<input type="file" class="form-control" name="gambar[]">
										     
										    </div>
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


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
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