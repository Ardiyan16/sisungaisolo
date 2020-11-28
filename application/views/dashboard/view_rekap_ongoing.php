<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Rekap</h1>
      <ol class="breadcrumb">
        <li><a href="index-2.html">Rekap</a></li>
        <li class="active">Rekap Infrastruktur Ongoing</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index-2.html" class="btn btn-light">Rekap Infrastruktur Ongoing</a>
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
          Rekap Infrastruktur Ongoing
        </div>
        <div class="panel-body table-responsive">
        <p><a href="<?php echo base_url('peta/export_excel_ongoing') ?>" class="btn btn-success"><i class="fa fa-print"></i>Export ke Excel</a></p>
           <?php
             if($rekap_ongoing==true){
              $no=1;
              foreach ($rekap_ongoing as $tampil){
              
              $this->table->add_row($no,$tampil->no_reg,$tampil->nama_paket,$tampil->penyedia_jasa_konstruksi,$tampil->masa_konstruksi,'<a href="javascript:void(0)" class="btn btn-default" onclick="detail_paket('."'".$tampil->id_infrastruktur_ongoing."'".')">Klik Untuk Detail</a>',$tampil->jenis_pekerjaan,$tampil->keterangan,$tampil->tahun_data);
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Detail Infrastruktur Ongoing</h4>
          </div>
          <div class="modal-body">
           <div id="fetched-data" style="display: none;"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
<script type="text/javascript">
    var link = "<?php echo site_url('rekap_data')?>";

  function detail_paket(id) {
    $('#myModal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_ongoing = id;
      // var id_koordinat = id2;
      // var sungai = document.getElementById("nama_sungai");
      // sungai.innerHTML = 'Data '+nama_sungai;
      // sungai.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_ongoing/"+id_ongoing,
          data :  'id_ongoing='+ id_ongoing,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }
</script>