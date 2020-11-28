<?php $this->load->view('admin/header') ?>
 <article class="content cards-page">
                    <div class="title-block">
                        <h3 class="title">
							Inventaris Sungai
						</h3>
                        <p class="title-description">Mengelola Inventaris Sungai</p>
                    </div>
                    <section class="section">
                        <div class="row">
							<?php echo $this->session->flashdata('item'); ?>
                            <div class="col-xl-12">
                                <div class="card card-default">
                                 <div class="card-block">
                                    <div id="toolbar" class="btn-group">
										<a href="<?php echo base_url('inventarisasi_sungai/view_tambah')?>">
											<button type="submit" name="btn_add_product" class="btn btn-primary">
                                             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</button>
										</a>
                                        </div>
                                        <div class="table-responsive">
											<table class="table table-bordered" id="all_data_json" data-toggle="table" data-url="<?php echo base_url(); ?>inventarisasi_sungai/get_inv_sungai"  
                                                    data-show-refresh="true" data-show-toggle="false" data-show-columns="true" data-search="true" 
                                                    data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" 
                                                    data-sort-order="desc" data-toolbar="#toolbar">
											<thead class="thead-inverse">
											<tr>
												<th data-formatter="numberFormatter">No</th>
												<th data-field="nama_sungai" data-sortable="true">Nama Sungai</th>
												<th data-field="no_patok" data-sortable="true">Patok</th>
												<th data-field="kabupaten" data-formatter="lokasi" data-sortable="true">Lokasi</th>
												<th data-field="sket" data-formatter="imageFormatter" >Sket</th>
												<th data-field="id_inventarisasi_sungai" data-formatter="action_sungai" >Action</th>
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
						
						 function imageFormatter(value){
													return'<img src="../../gis/images/sket/'+value+'" width="60" />';
												}

                    function action_sungai(value){
                        return'<div class="btn-group" role="group" aria-label="...">  <a  href="<?=base_url()?>inventarisasi_sungai/view_edit/'+value+'" type="button" class="btn btn-primary glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit"></a></div> <a href="<?=base_url()?>inventarisasi_sungai/delete/'+value+'" type="button" class="btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" title="Hapus" onclick="javascript: return confirm(\'Apakah anda yakin?\')"></a>'
                       }
                </script>
<?php $this->load->view('admin/footer') ?>