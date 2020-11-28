<?php $this->load->view('admin/header') ?>
                <article class="content cards-page">
                    <div class="title-block">
                        <h3 class="title">
                        Patok
                        </h3>
                        <p class="title-description"> Mengelola data patok </p>
                        
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card card-default">
                                    
                                    <div class="card-block">
                                     <div id="toolbar" class="btn-group">
							                           <a href="<?=base_url('patok_/add')?>" type="button" class="btn btn-primary" >
							                             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data
                                           </a>
							                       </div>
							                       <br>
                                <div class="table-responsive">
                                  <table class="table table-bordered" id="all_data_json" data-toggle="table" data-url="<?=base_url( 'patok_/get_json_patok' )?>"  
                                         data-show-refresh="true" data-show-toggle="false" data-show-columns="true" data-search="true" 
                                         data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" 
                                         data-toolbar="#toolbar">
					                        <thead class="thead-inverse">
					                        <tr>
					                            <th data-formatter="numberFormatter" >No</th>
                                      <th data-field="nama_daerah" data-sortable="true">Nama Daerah</th>
					                            <th data-field="ruas_sungai" data-sortable="true">ruas_sungai</th>
					                            <th data-field="kapasitas_sungai" data-sortable="true">kapasitas_sungai</th>
					                            <th data-field="lat_patok" data-sortable="true">Lattitude</th>
					                            <th data-field="long_patok" data-sortable="true" >Longitude</th>
					                            <!-- <th data-field="konsep_penanganan" data-sortable="true" >Konsep Penanganan</th> -->
					                            <th data-field="id_patok" data-formatter="action_bangunan" >Action</th>
					                           
					                            <!-- <th data-field="id_produk | url " data-formatter="product_action" data-sortable="true"></th> -->
                					                            
					                        </tr>
					                        </thead>
					                    </table>
                                </div> 
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                           
                            <!-- /.col-xl-4 -->
                        </div>
                       
                        <!-- /.row -->
                    </section>
                    
                </article>
                <script>
                	function numberFormatter(value, row, index) {
					             return index+1;
					             }

      					 function action_bangunan(value){
      					       return'<div class="btn-group" role="group" aria-label="...">  <a  href="<?=base_url()?>patok_/edit/'+value+'" type="button" class="btn btn-primary glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit"></a> </div> <a  href="<?=base_url()?>patok_/detail_patok/'+value+'" type="button" class="btn btn-primary glyphicon glyphicon-list" data-toggle="tooltip" title="Detail"></a> <a href="<?=base_url()?>patok_/delete/'+value+'" type="button" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus" onclick="javasciprt: return confirm(\'Apakah anda yakin?\')"></a>'
      					       }
              </script>             
<?php $this->load->view('admin/footer') ?>