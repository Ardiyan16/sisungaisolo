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
          
        <table id="examplene" class="display responsive nowrap" cellspacing="0" width="100%">

          <thead>

              <tr>
                  <th></th>
                  <th>No.</th>

                  <th>Nama Paket / Bangunan</th>

                  <th>Penyedia Jasa Konstruksi</th>

                  <th>Tahun Selesai</th>

                  <th>Item Pekerjaan</th>
                  <th>Volume</th>

                  <th>Satuan</th>

                  <th>Latitude</th>

                  <th>Longitude</th>

                  <th>Keterangan</th>

                  <th>Penilaian Kinerja</th>

                  <th>AKNOP</th>

                  <th>Tahun Data</th>
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

  $(document).ready(function() {

    table = $('#examplene').DataTable({ 



        "processing": true, //Feature control the processing indicator.

        "serverSide": true, 

        "order": [], //Initial no order.



        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('rekap_data/ajax_list_terbangun')?>",

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
</script>  