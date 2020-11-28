<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Rekap</h1>
      <ol class="breadcrumb">
        <li><a href="index-2.html">Rekap</a></li>
        <li class="active">Rekap Infrastruktur Terbangun</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index-2.html" class="btn btn-light">Rekap Infrastruktur Terbangun</a>
        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->



 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">


  <!-- Start Row -->
  <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Rekap Infrastruktur Terbangun
        </div>
        <div class="panel-body table-responsive">
        <p><a href="<?php echo base_url('peta/export_excel') ?>" class="btn btn-success"><i class="fa fa-print"></i>Export ke Excel</a></p>
           <?php
             if($rekap_terbangun==true){
              $no=1;
              foreach ($rekap_terbangun as $tampil){
              
              $this->table->add_row($no,$tampil->nama_paket,$tampil->penyedia_jasa_konstruksi,$tampil->masa_konstruksi,$tampil->item_pekerjaan,$tampil->volume,$tampil->satuan,$tampil->latitude,$tampil->longitude,$tampil->keterangan,$tampil->penilaian_kinerja,$tampil->aknop,$tampil->tahun_data);
              $no++;
              }
              $tabel=$this->table->generate();
              echo $tabel;
             }else {
                echo "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
             }
            ?>


        </div>

      </div>
    </div>
    <!-- End Panel -->



   


  </div>
  <!-- End Row -->






</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2015 <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a>
  </div> 
</div>
<!-- End Footer -->


</div>