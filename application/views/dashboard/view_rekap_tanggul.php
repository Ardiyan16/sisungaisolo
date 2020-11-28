<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

 <style type="text/css">
  
  td.details-control {
      background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_open.png') no-repeat center center;
      cursor: pointer;
  }
  tr.shown td.details-control {
      background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_close.png') no-repeat center center;
  }
 </style>
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Rekap</h1>
      <ol class="breadcrumb">
        <li><a href="index-2.html">Rekap</a></li>
        <li class="active">Rekap Tanggul</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="#" class="btn btn-light">Rekap Tanggul</a>
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
          Rekap Tanggul
        </div>
        <div class="panel-body table-responsive">
        <p><a href="#" onclick="printTanggul()"  class="btn btn-success"><i class="fa fa-print"></i>Export ke Excel</a></p>
        <table id="examplene" class="display responsive nowrap" cellspacing="0" width="100%">
          <thead>

              <tr>
                  <th></th>
                  <th>No.</th>

                  <th>STA</th>

                  <th>Kode Titik Awal</th>

                  <th>Kode Titik Akhir</th>

                  <th>Panjang (Km)</th>

                  <th>Panjang Kerusakan (Km)</th>

                  <th>Desa</th>

                  <th>Kecamatan</th>

                  <th>Kabupaten</th>

                  <th>Provinsi</th>

                  <th>Latitude</th>

                  <th>Longitude</th>

                  <th>Kinerja</th>

              </tr>

          </thead>

          <tbody></tbody>

      </table>

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
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times</button>
            <h4 class="modal-title">Detail Kinerja Tanggul</h4>
          </div>
          <div class="modal-body">
           <table id="examplene2" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th></th>

                  <th>No.</th>
                  <th>Tahun Inspeksi</th>
                  <th>Bulan Inspeksi</th>
                  <th>Jenis Bangunan </th>
                  <th>Bagian Bangunan</th>
                  <th>Kerusakan</th>
                  <th>Usulan Perbaikan</th>
                  <th>Panjang </th>
                  <th>Lebar</th>
                  <th>Tinggi</th>
                  <th>Volume</th>
                  <th>Keterangan</th>
                  <th>Nilai Kinerja</th>
                  <th>Kinerja</th>
                  <th>Tindakan</th>
              </tr>

          </thead>

          <tbody></tbody>

      </table> 
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

<script>

  var save_method;

  var link = "<?php echo site_url('rekap_data')?>";

  var table;
  
   var ling = "<?= base_url() ?>";

  $(document).ready(function() {

    table = $('#examplene').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_tanggul')?>",

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    });

  

  });

  

  function reload_table() {

      table.ajax.reload(null, false);

  }
  
   function detail_kinerja_tanggul(id) {
     $('#myModal').modal('show');
  
      var id_tebing = id;
     

       table2 = $('#examplene2').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "bDestroy": true,

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_tanggul_id')?>/"+id,

            "type": "POST"

        },



        //Set column definition initialisation properties.

       responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]



    }).fnDestroy()
  }
  
  
function printTanggul(){
    let uniq = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    let goto = `${ling}rekap_data/getSheet?tanggul=tanggul&uniq=${uniq}`;
    window.open(goto,'_blank'); 
}
</script>  
