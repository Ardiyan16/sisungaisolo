<<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
        <li class="active">Rekap Sungai</li>
      </ol>

      <!-- Start Page Header Right Div -->
      <div class="right">
        <div class="btn-group" role="group" aria-label="...">
          <a href="index-2.html" class="btn btn-light">Rekap Sungai</a>
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
        <div class="panel panel-default">
          <div class="panel-title">Pilih Orde Sungai</div>
          <div class="panel-body">

            <form>
              <div class="controls">

                <select name="orde" id="orde" class="form-control" onchange="Fblok()">
                  <option value="0" data-tokens="Semua Sungai">Semua Sungai</option>
                  <?php
                  $query = $this->db->query('SELECT * FROM sungai group by orde_sungai');
                  foreach ($query->result() as $hasil) { ?>

                    <option value="<?php echo $hasil->orde_sungai ?>" data-tokens="<?php echo $hasil->orde_sungai ?>"><?php echo $hasil->orde_sungai ?></option>
                  <?php }
                  ?>
                </select>

              </div>
            </form>

          </div>
        </div>
        <span id="cetak"></span><br />
        <table id="example1" class="display responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th></th>
              <th>No</th>
              <th>Nama Sungai</th>
              <th>Orde Sungai</th>
              <th>Panjang Sungai</th>
              <th>Tahun Data</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
              <th></th>
              <th>No</th>
              <th>Nama Sungai</th>
              <th>Orde Sungai</th>
              <th>Panjang Sungai</th>
              <th>Tahun Data</th>
            </tr>
          </tfoot>

          <tbody>

          </tbody>
        </table>
        <br /><br />
        <div class="panel panel-primary">

          <div class="panel-title">

          </div>

          <!-- <div class="panel-heading">Jumlah Panjang Sungai : <?php echo number_format($panjang, 2); ?>&nbsp;KM</div> -->

          <div class="panel-heading">Jumlah Panjang Sungai : <span id="panjang"></span> KM</div>



        </div>


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
    var zonk = ''
    var save_method;
    var table;
    var link = "<?php echo site_url('rekap_data') ?>";
    $(document).ready(function() {
      orde1(0);
      panjang_sungai(0);
      cetak(0);
    });

    function Fblok() {
      $("#example1").dataTable().fnDestroy();
      orde1($('#orde').val());
      panjang_sungai($('#orde').val());
      cetak($('#orde').val());
    }

    function panjang_sungai(id_blok) {
      $('#panjang').load("<?php echo base_url(); ?>rekap_data/load_panjang/" + id_blok);
    }

    function cetak(id_blok) {
      $('#cetak').load("<?php echo base_url(); ?>rekap_data/load_cetak/" + id_blok);
    }

    function orde1(id_blok) {
      console.log("orde1: " + id_blok);
      table = $('#example1').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": link + "/ajax_listall/" + id_blok,
          "type": "POST"
        },

        //Set column definition initialisation properties.
        responsive: {
          details: {
            type: 'column'
          }
        },
        columnDefs: [{
          className: 'control',
          orderable: false,
          targets: 0
        }],
        order: [1, 'asc']

      });
      table.ajax.reload();

    };
  </script>