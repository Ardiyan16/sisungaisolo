<?php $this->load->view('admin/header') ?>
                <article class="content cards-page">
                    <div class="title-block">
                        <h3 class="title">
					        Tambah Patok
					    </h3>
                       <p class="title-description"> &nbsp;Menambah Data Patok</p>
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
                                        <form class="form-horizontal" method="POST"  action="<?=base_url()?>patok_/save_add" enctype="multipart/form-data">
                                     	<div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Daerah</label>
										    <div class="col-sm-10">
										      <select class="form-control" name="id_daerah" required="" >
										      	<option value="">-Silahkan Pilih-</option>
										      	<?php 
										      		foreach ($data as $d) {
										      			?>
										      		<option value="<?php echo $d['id_daerah'] ?>"><?php echo $d['nama_daerah'] ?></option>
										      			<?php
										      		}
										      	 ?>
										      	<!-- <option value="1" >SWD 1</option>
										      	<option value="2" >SWD 2</option> -->
										      </select>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Ruas Sungai</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="ruas_sungai"  required="" >
										    </div>
										  </div>

										   <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Kapasitas Sungai</label>
										    <div class="col-sm-10">
										      <input type="number" class="form-control" name="kapasitas_sungai"  required="" >
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Lattitude</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="lat_patok"   required="" >
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Longitude</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" name="long_patok"  required="" >
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

 
<!-- <script >
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

</script> -->
<?php $this->load->view('admin/footer') ?>