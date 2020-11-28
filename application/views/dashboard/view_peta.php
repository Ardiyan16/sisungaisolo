
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from egemem.com/theme/kode/v1.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jun 2018 08:04:18 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
   <link rel="shortcut icon" href="<?=base_url()?>assets/img/icon.png">
  <title>user-sSISUNGAI BBWS Bengawan Solo </title>

  <!-- ========== Css Files ========== -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/style.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/responsive.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/shortcuts.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/bootstrap-select/bootstrap-select.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/summernote/summernote.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/summernote/summernote-bs3.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/sweetalert/sweetalert.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/datatables/datatables.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/chartist/chartist.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/rickshaw.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/detail.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/graph.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/legend.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/date-range-picker/daterangepicker-bs3.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/fullcalendar/fullcalendar.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/leaflet.css" />
  <link href="<?php echo base_url(); ?>/assets/autocomplate/dist/easy-autocomplete.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>/assets/autocomplate/dist/easy-autocomplete.themes.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/lightbox.css" />



   
   <style type="text/css">
    .legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }.info { background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; }.info h4 { margin: 0 0 5px; color: #777; }

    .table-bordered {
        border: 1px solid #eceeef;
    }
    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
    }
    .table {
        border-collapse: collapse;
        background-color: transparent;
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: #f7f7f9;
        border-bottom: 1px solid rgba(0,0,0,.125);
    }
    
 /*   .navbar-light .navbar-nav .open > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.open, .navbar-light .navbar-nav .nav-item.active .nav-link {
        border-bottom: rgb(252, 242, 4) solid 2px;
        /* color: rgb(252, 242, 4); */
    }*/
    
    #floating-panel {
         position: absolute;
        
          right: 1%;
          z-index: 5;

          padding: 0;

          text-align: center;
          font-family: 'Roboto','sans-serif';
          line-height: 30px;
          padding-left: 0px;
          border-radius: 2px 2px 0 0;
          box-shadow: 0 2px 4px rgba(0,0,0,0.2), 0 -1px 0px rgba(0,0,0,0.02);
          background-color: #fff;
          width: 258px;


       }

   .topnav {
  background-color: #399bff;
}

.topnav a {
    display: inline-block;
    color: #333;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    background-color: #399bff;
}

.topnav a:hover {
  background-color: #399bff;
  color: black;
}

.active {
  background-color: #399bff;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
   
  </style>
  <script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/jquery.min.js"></script>

    <!-- ================================================
    Bootstrap Core JavaScript File
    ================================================ -->
    <script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/bootstrap/bootstrap.min.js"></script>

    <!-- ================================================
    Plugin.js - Some Specific JS codes for Plugin Settings
    ================================================ -->
    <script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/plugins.js"></script>



    <!-- ================================================
    Data Tables
    ================================================ -->
    <script src="<?php echo base_url().'assets_new/'; ?>js/datatables/datatables.min.js"></script>

    <script src="<?=base_url()?>assets/js/leaflet.js"></script>

    <script src="<?php echo base_url(); ?>/assets/autocomplate/dist/jquery.easy-autocomplete.min.js" type="text/javascript" ></script> 

    <script src="<?= base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>

  </head>
  <body >
  <!-- Start Page Loading -->
  <div class="loading"><img src="<?php echo base_url(); ?>/assets_new/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
     <a href="#" class="logo"><img src="<?=base_url()?>/assets/img/logo_new.jpg" style="width: 200px;height: 41px;margin-top: -4%;"></a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    
    <!-- End Searchbox -->

    <!-- Start Top Menu -->
     <ul class="topmenu">
        
      <!-- <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">My Files <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Videos</a></li>
          <li><a href="#">Pictures</a></li>
          <li><a href="#">Blog Posts</a></li>
        </ul>
      </li> -->
      


  
    </ul>
    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
   <div class="topnav" id="myTopnav">
      <a href="#">Cari Sungai</a>
      <a href="#"><input type="text" id="square" placeholder="Cari Sungai.." style="margin: -6px;"></a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-search"></i>
      </a>
    </div>
    <!-- End Sidepanel Show-Hide Button -->

    <!-- Start Top Right -->
   

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix" >

<ul class="sidebar-panel nav">
 
  <li class="sidetitle">MAIN</li>
  <li><a href="<?php echo base_url('rekap_data/dashboard2') ?>"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <li><a href="<?php echo base_url('peta/peta2') ?>"><span class="icon color5"><i class="fa fa-tree"></i></span>Peta</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_sungai') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Rekap Sungai</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_terbangun') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Rekap Infrastruktur Terbangun</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_ongoing') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Rekap Infrastruktur Ongoing</a></li>
   <li><a href="<?php echo base_url('rekap_data/rekap_internal') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Rekap Usulan Internal</a></li>

   <li><a href="<?php echo base_url('rekap_data/rekap_eksternal') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Rekap Usulan Eksternal</a></li> 
   <li><a href="<?php echo base_url('rekap_data/rekap_dipa') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Rekap Usulan DIPA</a></li> 
  <li><a href="<?php echo base_url('peta/dashboard') ?>"><span class="icon color5"><i class="fa fa-tree"></i></span>Kembali ke Visitor</a></li>          
  <li><a href="<?php echo base_url('rekap_data/logout') ?>"><span class="icon color5"><i class="fa fa-power-off"></i></span>Logout</a></li>

</ul>


</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->

  <!-- End Page Header -->

  <!-- Start Presentation -->
  <div class="row presentation">
    <div id="map" style="height: 586px"></div>


  </div>  
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><div id="nama_sungai"></div></h4>
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

  <div class="modal fade" id="Modal_bangunan" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><div id="nama_infrastruktur"></h4>
          </div>
          <div class="modal-body">
           <div id="fetched-data2" style="display: none;"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="Modal_ongoing" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><div id="nama_ongoing"></h4>
          </div>
          <div class="modal-body">
           <div id="fetched-data3" style="display: none;"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="Modal_eksternal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><div id="nama_usulan"></h4>
          </div>
          <div class="modal-body">
           <div id="fetched-data4" style="display: none;"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="Modal_internal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><div id="detail_usulan"></h4>
          </div>
          <div class="modal-body">
           <div id="fetched-data5" style="display: none;"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- End Presentation -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->

<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->

<!-- End Footer -->


</div>

<script>

  // $("#usulan-btn").click(function() {
  //     $('#form')[0].reset();
  //    $("#usulanModal").modal("show");
    
  //    $(".navbar-collapse.in").collapse("hide");
  //    return false;
  // });

  function swal_berhasil() { swal({ title:"SUCCESS", text:"Berhasil", type: "success", closeOnConfirm: true}); }
  function swal_error(msg) { swal({ title:"ERROR", text: msg, type: "warning", closeOnConfirm: true});  }
  
   function save() {
        var url;
        url = "<?= site_url()?>peta/simpan/";
        //tinyMCE.triggerSave();
        //$('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true);

        $.ajax({
            url : url, type: "POST", dataType: "JSON", data: $('#form').serialize(),
            success: function(data) {
                    setTimeout(function(){
                  $('#btn_close').click();
                }, 1000);
                    swal_berhasil();
                    $('#form')[0].reset();
               
               // $('#btnSave').text('save'); $('#btnSave').attr('disabled',false);
            },
            error: function (jqXHR, textStatus, errorThrown) {
               swal_error(response.error);
            }
        });
    }

     var link = "<?php echo site_url('peta')?>";
  function kalipepe(id, id2, nama_sungai) {
    $('#myModal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_sungai = id;
      var id_koordinat = id2;
      var sungai = document.getElementById("nama_sungai");
      sungai.innerHTML = 'Data '+nama_sungai;
      sungai.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_sungai/"+id_sungai+"/"+id_koordinat,
          data :  'id_sungai='+ id_sungai,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }
     
  function infrastruktur_bangunan(id, nama_infrastruktur) {
    $('#Modal_bangunan').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_infrastruktur = id;
      // var id_koordinat = id2;
      var infrastruktur = document.getElementById("nama_infrastruktur");
      infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'&nbsp;Konstruksi Terbangun';
      infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_bangunan2/"+id_infrastruktur,
          data :  'id_infrastruktur='+ id_infrastruktur,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data2");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }

  function infrastruktur_ongoing(id, nama_paket) {
    $('#Modal_ongoing').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_infrastruktur_ongoing = id;
      // var id_koordinat = id2;
      var ongoing = document.getElementById("nama_ongoing");
      ongoing.innerHTML = 'Data '+nama_paket+'&nbsp;Konstruksi Ongoing';
      ongoing.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_ongoing2/"+id_infrastruktur_ongoing,
          data :  'id_infrastruktur_ongoing='+ id_infrastruktur_ongoing,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data3");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }
  
  function usulan_eksternal(id, nama_usulan) {
    $('#Modal_eksternal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_usulan = id;
      // var id_koordinat = id2;
      var usulan = document.getElementById("nama_usulan");
      usulan.innerHTML = 'Data '+nama_usulan+'&nbsp;Usulan Eksternal';
      usulan.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_eksternal/"+id_usulan,
          data :  'id_usulan='+ id_usulan,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data4");
          a.innerHTML= data;
          a.style.display="block";
          }
      });
  }
  
  function usulan_internal(id, detail_usulan) {
    $('#Modal_internal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_usulan = id;
      // var id_koordinat = id2;
      var usulan = document.getElementById("detail_usulan");
      usulan.innerHTML = 'Data '+detail_usulan+'&nbsp;Usulan Internal';
      usulan.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_internal/"+id_usulan,
          data :  'id_usulan='+ id_usulan,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data5");
          a.innerHTML= data;
          a.style.display="block";
          }
      });
  }

    var options = {
      data: [<?php
      $jj=0;
            foreach ($sungai as $value) { 
              echo '{"id_sungai":';
              echo '"'.  $value['nama_sungai'] .'", ';
              echo '"data_index":';
              echo '"'.  $jj .'" ';
              echo '},';
              $jj++;
            }
            ?>
            ],
            getValue: "id_sungai",
      data_marker:[
         
          <?php
            foreach ($sungai as $value) { ?>
              [
          "<?php echo $value['id_sungai']; ?>",
          "<?php echo base_url('detail/index/lokasi/'.$value['id_sungai']); ?>",
          "<?php echo $value['latitude_awal']; ?>",
          "<?php echo $value['longitude_awal']; ?>",
          "<?php echo $value['nama_sungai']; ?>",
           "<?php echo base_url('detail/print_data_sisda/'.$value['id_sungai']); ?>"
          ],
            <?php }


          ?>
       
        ],
      list: {
        maxNumberOfElements: <?php echo $jj+1; ?>,
        match: {
          enabled: true
        },
        onClickEvent: function() {
       
            var value = $("#square").getSelectedItemData().data_index;
            open_mark(value);
        },
        onChooseEvent: function() {
          var value = $("#square").getSelectedItemData().data_index;
            open_mark(value);
        }
      }


    };
   
    $("#square").easyAutocomplete(options);
    
    var markers = [];
    console.log(options.data_marker);
    var data_point=options.data_marker;
    var bangunan = new L.LayerGroup();
    var patok_swd1=new L.LayerGroup();
    var ongoing=new L.LayerGroup();
    var eksternal=new L.LayerGroup();
    var internal=new L.LayerGroup();
    var legend = L.control({position: 'bottomleft'});
    var LeafIcon = L.Icon.extend({
      options: {
        shadowUrl: '<?=base_url()?>assets/img/leaflet/marker-shadow.png',
        iconSize:     [25, 40],
        shadowSize:   [50, 64],
        iconAnchor:   [15, 47],
        shadowAnchor: [18, 68],
        popupAnchor:  [-3, -76]
      }
    });

    var swd1 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/marker-icon-2x.png'}),
      swd2 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/marker-green.png'}),
      pat1 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/ungu.png'}),
      pat2 = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/coklat_emas.png'}),
      rutin = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/rutin.png'}),
      preventif = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/preventif.png'}),
      rehabilitatif = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/rehabilitatif.png'}),
      korektif = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/korektif.png'}),
      orangeIcon = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/leaf-orange.png'});
      
      unguIcon = new LeafIcon({iconUrl: '<?=base_url()?>assets/img/leaflet/ungu.png'});

 <?php foreach($bangunan as $key){ ?>
        <?php
         if($key->foto_1==''){ $cover = 'no_image.jpg'; }else{ $cover = $key->foto_1; }
        ?>
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: swd2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$cover; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_bangunan(<?php echo $key->id_infrastuktur.',\\\''.$key->nama_paket.'\\\''; ?>)"><?= $key->nama_paket;?></a><h5>').addTo(bangunan);
<?php } ?> 

<?php foreach($ongoing as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: pat2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_ongoing(<?php echo $key->id_infrastruktur_ongoing.',\\\''.$key->nama_paket.'\\\''; ?>)"><?=$key->nama_paket;?></a><h5>').addTo(ongoing);
<?php } ?> 

<?php foreach($internal as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: rehabilitatif}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="usulan_internal(<?php echo $key->id_usulan.',\\\''.$key->detail_usulan.'\\\''; ?>)">Usulan Internal</a><h5>').addTo(internal);
<?php } ?> 


<?php foreach($eksternal as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: unguIcon}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="usulan_eksternal(<?php echo $key->id_usulan.',\\\''.$key->detail_usulan.'\\\''; ?>)">Usulan Eksternal</a><h5>').addTo(eksternal);
<?php } ?> 


var polylinePoints = [
  <?php $i=0; ?>
  <?php foreach($line_patok_new as $key){ ?>


      new L.LatLng(<?php echo $key->latitude_awal; ?>, <?php echo $key->longitude_awal; ?>),
 
  <?php $i++; } ?>


];

function info_window(id) {
    
     L.marker([data_point[id][2], data_point[id][3]],{icon: korektif}).addTo(map)
    .bindPopup(data_point[id][4])
    .openPopup();
    
}

//untuk line looping garis
var patok_geoJson = {
    "type": "FeatureCollection",
    "features": [
      <?php foreach ($line_patok_new as $key) { ?>
        <?php
         if($key->foto_1==''){ $cover = 'no_image.jpg'; }else{ $cover = $key->foto_1; }
        ?>

        {
            "type": "Feature",
            "geometry": {
                "type": "LineString",
                "coordinates": [

                  [<?php echo $key->longitude_awal; ?>, <?php echo $key->latitude_awal; ?>],
                  [<?php echo $key->longitude_akhir; ?>, <?php echo $key->latitude_akhir; ?>]


                ]
            },
            "properties": {
                // "popupContent": '<center><a href="#myModal" class="btn btn-default btn-small" id="custId" data-toggle="modal" data-id="<?php echo $key->id_sungai; ?>"><?php echo $key->nama_sungai; ?></a></center>',
                "popupContent": '<center><img src="<?php echo base_url().'data/img/bangunan/'.$cover; ?>" width="120"></center><center><br/> <a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="kalipepe(<?php echo $key->id_sungai.','.$key->id_koordinat.',\\\''.$key->nama_sungai.'\\\''; ?>)"><?php echo $key->nama_sungai; ?></a></center>',
                "underConstruction": false,
            },
            "id": 1
        },
      <?php } ?>
    ]
};

 var flag = 0;
  $(document).ready(function() {
      $.ajax({
        type: "GET",
        url: "<?php echo site_url('peta/getPatokJson')?>",
        data: {
        'offset': 0,
        'limit': 1000
        },
        success: function(data){
          var data = JSON.parse(data);
          mapData(data);
          flag += 1000;
          if(data.length > 0){
             timeout();
          }
        }
      });
  });

  function mapData(data) {
    var geojson = {
      "type": "FeatureCollection",
      "features": []
    };

    data.forEach(function(value){
        if(value.foto_1==''){ cover = 'no_image.jpg'; }else{ cover =value.foto_1; }
      var feature = {
        "type": "Feature",
        "geometry": {
          "type": "LineString",
          "coordinates": []
        },
        "properties": {
            "popupContent": '<center><img src="<?php echo base_url().'data/img/bangunan/'?>'+cover+'" width="120"></center><center><br/> <a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="kalipepe('+value.id_sungai+','+value.id_koordinat+','+value.id_koordinat+')" id="custId" data-toggle="modal" >'+value.nama_sungai+'('+value.id_koordinat+')</a></center>',
                "underConstruction": false,
        },
        "id": 1
      };
      var koordinat1 = [value.longitude_awal, value.latitude_awal];
      var koordinat2 = [value.longitude_akhir, value.latitude_akhir];
      feature.geometry.coordinates.push(koordinat1, koordinat2);
      geojson.features.push(feature);
    });

    var vektor_patok=  L.geoJSON(geojson, {
       style: style_garis,
       filter: function (feature, layer) {
         if (feature.properties) {
           // If the property "underConstruction" exists and is true, return false (don't render features under construction) oyi
           return feature.properties.underConstruction !== undefined ? !feature.properties.underConstruction : true;
         }
         return false;
       },

       onEachFeature: onEachFeature,

     }).addTo(patok_swd1);

    console.log(geojson);

  }

  function timeout(){
    setTimeout(function(){
    $.ajax({
      type: "GET",
      url: "<?php echo site_url('peta/getPatokJson')?>",  
      data: {
        'offset': flag,
        'limit': 1000
      },
      success: function(data){
        var data = JSON.parse(data);
        mapData(data);
        flag += 1000;
        if(data.length > 0){
          timeout();
        }
      }
    });
  }, 1000);
  }

var patok_geoJson_kanan = {
    "type": "FeatureCollection",
    "features": [
      <?php foreach ($line_patok_beng as $key) { ?>
        {
            "type": "Feature",
            "geometry": {
                "type": "LineString",
                "coordinates": [

         [<?php echo $key->longitude_awal; ?>, <?php echo $key->latitude_awal; ?>],
                  [<?php echo $key->longitude_akhir; ?>, <?php echo $key->latitude_akhir; ?>]


                ]
            },
            "properties": {
                "popupContent": '',
                "underConstruction": false,
            },
            "id": 1
        },
      <?php } ?>
    ]
};

var flage = 0;
  $(document).ready(function() {
      $.ajax({
        type: "GET",
        url: "<?php echo site_url('peta/getPatokSolo')?>",
        data: {
        'offset': 0,
        'limit': 1000
        },
        success: function(data){
          var data = JSON.parse(data);
          mapDataSolo(data);
          flage += 1000;
          if(data.length > 0){
             timeoutSolo();
          }
        }
      });
  });

  function mapDataSolo(data) {
    var geojson2 = {
      "type": "FeatureCollection",
      "features": []
    };

    data.forEach(function(value){
        if(value.foto_1==''){ cover = 'no_image.jpg'; }else{ cover =value.foto_1; }
      var feature = {
        "type": "Feature",
        "geometry": {
          "type": "LineString",
          "coordinates": []
        },
        "properties": {
            "popupContent": '<center><img src="<?php echo base_url().'data/img/bangunan/'?>'+cover+'" width="120"></center><center><br/> <a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" >'+value.nama_sungai+'('+value.id_koordinat+')</a></center>',
                "underConstruction": false,
        },
        "id": 1
      };
      var koordinat1 = [value.longitude_awal, value.latitude_awal];
      var koordinat2 = [value.longitude_akhir, value.latitude_akhir];
      feature.geometry.coordinates.push(koordinat1, koordinat2);
      geojson2.features.push(feature);
    });

    var vektor_patok_beng_solo=  L.geoJSON(geojson2, {
       style: style_garis,
       filter: function (feature, layer) {
         if (feature.properties) {
           // If the property "underConstruction" exists and is true, return false (don't render features under construction) oyi
           return feature.properties.underConstruction !== undefined ? !feature.properties.underConstruction : true;
         }
         return false;
       },

       onEachFeature: onEachFeature2,

     }).addTo(patok_swd1);

    console.log(geojson2);

  }

  function timeoutSolo(){
    setTimeout(function(){
    $.ajax({
      type: "GET",
      url: "<?php echo site_url('peta/getPatokSolo')?>",  
      data: {
        'offset': flage,
        'limit': 1000
      },
      success: function(data){
        var data = JSON.parse(data);
        mapDataSolo(data);
        flage += 1000;
        if(data.length > 0){
          timeoutSolo();
        }
      }
    });
  }, 1000);
  }

    function onEachFeature(feature, layer) {
       var popupContent = "<h4><center>Klik Untuk Lihat Detail Data</center></h4>" ;

       if (feature.properties && feature.properties.popupContent) {
         popupContent += feature.properties.popupContent;
       }

       layer.bindPopup(popupContent);
       layer.on({
          mouseover: highlightFeature,
          mouseout: resetHighlight,

        });
     }
     
     function onEachFeature2(feature, layer) {
      var popupContent = "<h4><center>Sungai Bengawan Solo</center></h4>" ;

      if (feature.properties && feature.properties.popupContent) {
         popupContent += feature.properties.popupContent;
      }

      layer.bindPopup(popupContent);
       layer.on({
          mouseover: highlightFeature,
          mouseout: resetHighlight,

        });
     }
     
    var style_patok_line = {
        "color": "#aa55ff",
        "weight": 5,
        "opacity": 0.8
    };
function highlightFeature(e) {
  var layer = e.target;

  layer.setStyle({
    weight: 7,
    color: '#3f51b5',
    dashArray: '',
    fillOpacity: 1.0
  });

}

function resetHighlight(e) {
  vektor_patok.resetStyle(e.target);
}


  var vektor_patok=  L.geoJSON(patok_geoJson, {
       style: style_garis,
       filter: function (feature, layer) {
         if (feature.properties) {
           // If the property "underConstruction" exists and is true, return false (don't render features under construction) oyi
           return feature.properties.underConstruction !== undefined ? !feature.properties.underConstruction : true;
         }
         return false;
       },

       onEachFeature: onEachFeature,

     }).addTo(patok_swd1);


      var vektor_patok_beng_solo=  L.geoJSON(patok_geoJson_kanan, {
          style: style_garis,
          filter: function (feature, layer) {
            if (feature.properties) {
              // If the property "underConstruction" exists and is true, return false (don't render features under construction) oyi
              return feature.properties.underConstruction !== undefined ? !feature.properties.underConstruction : true;
            }
            return false;
          },

          onEachFeature: onEachFeature2,

        }).addTo(patok_swd1);

     function style_garis(feature){
       if (feature){
         switch (feature.properties.pemeliharaan) {
          case 'Rehabilitatif':
            return {
              color: '#ed3237',
              weight: '2.2',

              opacity: '0.8',
            };
            break;
          case 'Korektif':
            return {
              color: '#fff212',
              weight: '2.2',

              opacity: '0.8',
            };
            break;
          case 'Preventif':
            return {
              color: '#00a859',
              weight: '2.2',

              opacity: '0.8',
            };
            break;
          case 'Rutin':
              return {
                color: '#00afef',
                weight: '2.2',

                opacity: '0.8',
              };
             break;
        }
       }

    }


    var mbAttr = '',
      mbUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';


var googlestreet = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 18
         }),

    googlesatellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 18,
    subdomains:['mt0','mt1','mt2','mt3']
});


    var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
      streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

    var map = L.map('map', {
      center: [-7.576951248, 110.84393439],
      zoom: 12,
      layers: [googlestreet, patok_swd1]
    });

     
var baseMaps = {
    "Google Street Map": googlestreet,
    "Google Satellite Map": googlesatellite
};


    var baseLayers = {

    };

    var overlays = {
      'Sungai':patok_swd1,
      "Infranstruktur Terbangun": bangunan,
      "Infranstruktur Ongoing": ongoing,
      "Usulan Internal": internal,
      "Usulan Eksternal": eksternal
    };

    L.control.layers(baseMaps, overlays).addTo(map);
var baseMaps = {
    "<span style='color: gray'>Google Street Map</span>": googlestreet,
    "Google Satellite Map": googlesatellite
};

var polylineOptions = {
      color: 'blue',
      weight: 3,
      opacity: 0.9
    };

var polyline = new L.Polyline(polylinePoints, polylineOptions);
             
function getColor(d) {
    return d > 1000 ? '#800026' :
           d > 500  ? '#BD0026' :
           d > 200  ? '#E31A1C' :
           d > 100  ? '#FC4E2A' :
           d > 50   ? '#FD8D3C' :
           d > 20   ? '#FEB24C' :
           d > 10   ? '#FED976' :
                      '#FFEDA0';
}

function style(feature) {
    return {
      weight: 2,
      opacity: 1,
      color: 'white',
      dashArray: '3',
      fillOpacity: 0.7,
      fillColor: getColor(feature.properties.density)
    };
  }

 legend.onAdd = function (map) {

      var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 10, 20, 50, 100, 200, 500, 1000],
        labels = [];

   
        div.innerHTML +=
            '<div class="card-header"><strong><small class="card-title"><i class="fa fa-window-restore fa-fw" aria-hidden="true"></i> Legend</small></strong> </div><table class="table table-bordered table-sm table-legend"> <tbody><tr><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/marker-green.png" style="position: relative;height: 30px;width: 21px;margin-left: 0px;"></td><td style="font-size: 12px;">Infrastruktur Terbangun</td><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/coklat_emas.png" style="position: relative;height: 30px;width: 21px;margin-left: 0px;"></td><td style="font-size: 12px;">Infrastruktur Ongoing</td></tr><tr><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/ungu.png" style="position: relative;height: 30px;width: 21px;margin-left: 0px;"></td> <td style="font-size: 12px;">Usulan Eksternal</td><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/rehabilitatif.png" style="position: relative;height: 27px;height: 30px;width: 21px;"></td> <td style="font-size: 12px;">Usulan Internal</td> </tr></tbody></table>';
    return div;
};

legend.addTo(map);     
  
    function open_mark(id) {

       // infowindow.close();
        
        console.log(id);

        for (var i = 0; i < data_point.length; i++) {
            // gmarkers[locations[i][0]] =
            // createMarker(new google.maps.LatLng(locations[i][2], locations[i][3]), locations[i][0] + "<br>" + locations[i][1]);

            if (i==id) {

             //new L.LatLng([-7.576951248, 110.8439344]);
           //  map.setCenter( new L.LatLng(-7.571994177, 110.836189));
             map.panTo(new L.LatLng(data_point[i][2],data_point[i][3]));
              
            //   var latlng = new google.maps.LatLng(-7.576951248, 110.8439344);
            //   map.setCenter(latlng);
        

           //   map.panTo(markers[i].getPosition());
              map.setZoom(13);
              //infowindow.close();
             // show_mark(i);
              info_window(i);



            }


        }

      }

      
      function show_mark(id) {
        markers[id].setVisible(true);
      }    
  </script>  

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script> 
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEPANEL -->

<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 



<!-- ================================================
jQuery Library
================================================ -->


</body>

<!-- Mirrored from egemem.com/theme/kode/v1.1/layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jun 2018 08:04:18 GMT -->
</html>