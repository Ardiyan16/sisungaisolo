<?php $this->load->view('admin/header') ?>
                <article class="content cards-page">
                    <div class="title-block">
                        <h3 class="title">
                        Detail Patok
                        </h3>
                        <p class="title-description"> Mengelola detail patok </p>
                        
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card card-default">
                                    
                                    <div class="card-block">
                                     <div id="toolbar" class="btn-group">
							                           <a href="<?=base_url('patok_/add_detail/'.$id_patok)?>" type="button" class="btn btn-primary" >
							                             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data
                                           </a>
							                       </div>
							                       <br>
                                <div class="table-responsive">
                                  <table class="table table-bordered" id="all_data_json" data-toggle="table" data-url="<?php echo base_url()?>patok_/get_json_detail_patok/<?php echo $id_patok ?>"  
                                         data-show-refresh="true" data-show-toggle="false" data-show-columns="true" data-search="true" 
                                         data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" 
                                         data-toolbar="#toolbar">
					                        <thead class="thead-inverse">
					                        <tr>
					                            <th data-formatter="numberFormatter" >No</th>
                                      <th data-field="jenis_patok" data-sortable="true">Jenis Patok</th>
					                            <th data-field="kondisi" data-sortable="true">Kondisi</th>
					                            <th data-field="konsep_penanganan" data-sortable="true">Konsep Penanganan</th>
                                      <th data-field="tingkat_resiko" data-sortable="true">Tingkat Resiko</th>
                                      <!-- <th data-field="foto1" data-formatter="imageEvent">Foto 1</th> -->
					                           
					                            <!-- <th data-field="konsep_penanganan" data-sortable="true" >Konsep Penanganan</th> -->
					                            <th data-field="id_detail_patok" data-formatter="action_bangunan" >Action</th>
					                           
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
                function imageEvent(value){

                  return'<img src="<?php echo base_url('images/patok'); ?>/'+value+'" width="60" />';

                }

                	function numberFormatter(value, row, index) {
					             return index+1;
					             }

      					 function action_bangunan(value){
      					       return'<div class="btn-group" role="group" aria-label="..."><a  href="<?=base_url()?>patok_/edit_detail_patok/'+value+'" type="button" class="btn btn-primary glyphicon glyphicon-edit" data-toggle="tooltip" title="Detail Foto"></a> </div> <a href="<?=base_url()?>patok_/delete_detail_patok/'+value+'" type="button" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus" onclick="javasciprt: return confirm(\'Apakah anda yakin?\')"></a>'
      					       }
              </script>             
<?php $this->load->view('admin/footer') ?>