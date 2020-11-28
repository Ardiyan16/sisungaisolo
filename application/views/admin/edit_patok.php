<?php $this->load->view('admin/header') ?>
<article class="content cards-page">
    <div class="title-block">
        <h3 class="title">
            Edit Bangunan
        </h3>
        	<p class="title-description">&nbsp;Memperbarui Data Bangunan</p>
    </div>
    <section class="section">
        <div class="row">
            
            <div class="col-xl-12">
                <div class="card card-default">
                    <!--div class="card-header">
                        <div class="header-block">
                            <p class="title">Edit Bangunan </p>
                        </div>
                    </div-->
                    <div class="card-block">
                        <form class="form-horizontal" method="POST" action="<?= base_url() ?>patok_/save_edit" enctype="multipart/form-data">
                            <input type="hidden" name="id_patok"  value="<?= $patok->id_patok ?>" >

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Daerah</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="id_daerah">
                                                    <option value="1" <?php if ($patok->id_derah==1) {
                                            echo 'selected';
                                            } ?> >SWD 1</option>
                                         <option value="2" <?php if ($patok->id_daerah==2) {
                                            echo 'selected';
                                            } ?> >SWD 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Ruas Sungai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ruas_sungai"  value="<?= $patok->ruas_sungai ?>" required="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Kapasitas Sungai</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="kapasitas_sungai"  value="<?= $patok->kapasitas_sungai ?>" required="" >
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Lattitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lat_patok"  value="<?= $patok->lat_patok ?>" required="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Longitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="long_patok"  value="<?= $patok->long_patok ?>" required="" >
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


<!-- Modal -->
<div class="modal fade" id="confirm_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a id="link_delete" href="" type="button" class="btn btn-primary">Lanjutkan</a>
            </div>
        </div>
    </div>
</div>
<script>
    function confirm_delete(id_bangunan, field, foto) {
        console.log(id_bangunan);
        console.log(field);
        console.log(foto);
        var url = "<?= base_url() ?>bangunan/delete_photo/" + id_bangunan + "/" + field + "/" + foto;
        $("#link_delete").attr("href", url);
        $("#confirm_delete").modal('show');
    }

</script>

 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal_sungai">
  <div class="modal-dialog modal-lg" role="document" style="width: 90%;">
    <div class="modal-content">
     <div class="modal-body">
         <table class="table table-bordered" id="all_data_json" data-toggle="table" data-url="<?=base_url( 'saluran/get_json_saluran' )?>"  
         data-show-refresh="true" data-show-toggle="false" data-show-columns="true" data-search="true" 
         data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" data-toolbar="#toolbar">
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


                
                    <th data-field="id_inventarisasi_sungai | no_patok" data-formatter="action_on" data-sortable="true" data-width="200" > 	</th>
                          
                                                   
                                              
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