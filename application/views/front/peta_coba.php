<htnl>
  <head>
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
   <link rel="shortcut icon" href="<?=base_url()?>assets/img/icon.png">
  <title>SISUNGAI BBWS Bengawan Solo</title>

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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
  <link href="<?php echo base_url(); ?>/assets/autocomplate/dist/easy-autocomplete.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>/assets/autocomplate/dist/easy-autocomplete.themes.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/lightbox.css" />

      <style type="text/css">
        #mapid { height: 586px; }
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
    <script src="<?php echo base_url().'assets_new/'; ?>js/datatables/datatables.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/plugins.js"></script>



    <!-- ================================================
    Data Tables
    ================================================ -->
    <script src="<?php echo base_url().'assets_new/'; ?>js/datatables/datatables.min.js"></script>
    
    <script src="<?php echo base_url(); ?>/assets/autocomplate/dist/jquery.easy-autocomplete.min.js" type="text/javascript" ></script> 

    <script src="<?= base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>    
  </head>
  <body>
    <!--  <div class="loading"><img src="<?php echo base_url(); ?>/assets_new/img/loading.gif" alt="loading-img"></div> -->
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
  <li><a href="<?php echo base_url('peta/rekap_data') ?>"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <li><a href="<?php echo base_url('peta_dashboard') ?>"><span class="icon color5"><i class="fa fa-tree"></i></span>Peta</a></li>
  <li><a href="#" data-toggle="modal" data-target="#usulanModal">
   
  <span class="icon color5"><i class="fa fa-newspaper-o"></i></span>Kirim Usulan

  </a>
  <div class="modal fade" id="usulanModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Form Kirim Usulan</h4>
            </div>
            <div class="modal-body">
            <form action="" id="form" name="form">
            <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">Tanggal Usulan</label>
              <input type="date" class="form-control" name="tanggal_usulan" aria-describedby="emailHelp" placeholder="Enter email">
              <span class="help-block"></span>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1" style="color: #000;">Pengirim Usulan</label> 
            </div>
            <div class="form-group">
               <label class="checkbox-inline">
                <input class="fakeRadio" type="radio" name="pengirim_usulan" value="internal" checked><p style="color: #000;">Internal</p>
               </label>
               <label class="checkbox-inline">
                <input class="fakeRadio" type="radio" name="pengirim_usulan" value="eksternal"><p style="color: #000;">Eksternal</p>
               </label>
            </div> 
            <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">Detail Usulan</label>
               <textarea class="form-control" name="detail_usulan" rows="3"></textarea>
               <span class="help-block"></span>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">Koordinat Latitude</label>
              <input type="text" class="form-control" name="latitude" aria-describedby="emailHelp" placeholder="Koordinat Latitude">
              <span class="help-block"></span>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">Koordinat Longitude</label>
              <input type="text" class="form-control" name="longitude" aria-describedby="emailHelp" placeholder="Koordinat Longitude">
              <span class="help-block"></span>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">Nama Pengirim</label>
              <input type="text" class="form-control" name="nama_pengirim" aria-describedby="emailHelp" placeholder="Nama Pengirim">
              <span class="help-block"></span>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">Email Pengirim</label>
              <input type="text" class="form-control" name="email_pengirim" aria-describedby="emailHelp" placeholder="Email Pengirim">
              <span class="help-block"></span>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">No Hp Pengirim</label>
              <input type="text" class="form-control" name="no_hp" aria-describedby="emailHelp" placeholder="No HP Pengirim">
              <span class="help-block"></span>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" style="color: #000;">Keterangan</label>
             <textarea class="form-control" name="keterangan" rows="3"></textarea>
             <span class="help-block"></span>
            </div>
           <div class="form-group">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
                <button type="button" id="btn_close" class="btn btn-default hide" data-dismiss="modal">Close</button>
           </div>      
           </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  </li>
  <li><a href="<?php echo base_url('peta/rekap_data') ?>"><span class="icon color6"><i class="fa fa-th"></i></span>Rekap Data</a></li>
  <li><a href="#"><span class="icon color6"><i class="fa fa-download"></i></span>Petunjuk Penggunaan</a></li>
  <li><a href="#" data-toggle="modal" data-target="#rekapModal"><span class="icon color6"><i class="fa fa-info"></i></span>Tentang SISUNGAI</a>
    
  </li>
   <div class="modal fade" id="rekapModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog " >
                <div class="modal-content">
                  <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">TENTANG SISUNGAI</h4>
                  </div>
                  <div class="modal-body" >
                        <div style="text-align:center;">
                            <img src="<?=base_url()?>/assets/img/logo_new2.jpg" style="width: 26%;">
                        </div><br />
                        <div style="text-align:center;">
                            <p style="color: #000;">SISUNGAI merupakan Sistem Informasi yang mengintegrasikan data sungai di BBWS Bengawan Solo .sehingga memudahkan ( EASIER) penyusunan rencana usulan kegiatan yang lebih tepat sasaran dan data sungai yang lebih akurat (BETTER) dan ditayangkan secara online pada website .BBWS Bengawan Solo agar data dapat diakses dengan cepat (FASTER) sehingga memberikan informasi kondisi secara aktual,up to date dan lebih efisien ( CHEAPER).</p>
                        </div>   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
   <div id="mapid"></div>
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

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->

<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->

<!-- End Footer -->


</div>
    
  </body>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
   <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>
   <script src="<?php echo base_url()?>assets/js/leaflet.ajax.js"></script>
   <script type="text/javascript">
     var link = "<?php echo site_url('peta_dashboard')?>";
     var link2 = "<?php echo site_url('peta')?>";
  //  var mymap = L.map('mapid').setView([ -7.575649348606957 ,110.838812048054209], 12);
//     L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
//     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
//     maxZoom: 18,
//     id: 'mapbox.streets',
//     accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
// }).addTo(mymap);
    // 
    
    var markers = [];
    //console.log(options.data_marker);
    //var data_point=options.data_marker;
    var bangunan = new L.LayerGroup();
    var patok_swd1=new L.LayerGroup();
    var ongoing=new L.LayerGroup();
    var legend = L.control({position: 'bottomright'});
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
 var mbAttr = '',
      mbUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';


var googlestreet = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
         }),

    googlesatellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 18,
    subdomains:['mt0','mt1','mt2','mt3']
});


    var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
      streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

    var mymap = L.map('mapid', {
      center: [-7.576951248, 110.84393439],
      zoom:10,
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
      // "Usulan Internal": internal,
      // "Usulan Eksternal": eksternal
    };

    L.control.layers(baseMaps, overlays).addTo(mymap);


var myStyle = {
    "color": "#0000FF",
    "weight": 5,
    "opacity": 0.65
};
    
function popUp(f,l){
    var out = [];
    if (f.properties){
        // for(key in f.properties){
        //     console.log(key);
        //     out.push(key+": "+f.properties[key]);
        // }
        var sungai = f.properties['ID_SUNGAI'];
        var foto = f.properties['FOTO'];
        console.log(sungai);
        out.push('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan'; ?>/'+foto+'" width="120"></center><br /><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" style="color: #ffffff" onclick="kalipepe('+sungai+')">'+f.properties['NAMA_SUNGAI']+'</a></h5>');
        l.bindPopup(out.join("<br />"));
    }
}

<?php foreach ($sungaine as $value) {?>
var jsonTest = new L.GeoJSON.AJAX(["assets/geojson/<?php echo $value['file_geojson']?>"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);
<?php } ?>

function kalipepe(id) {
    $('#myModal').modal('show');
    // $('#myModal').on('show.bs.modal', function (e) {
    //      });
   // console.log("data");
      var id_sungai = id;
  //    var id_koordinat = id2;
      var sungai = document.getElementById("nama_sungai");
      sungai.innerHTML = 'Data Sungai';
      sungai.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load/"+id_sungai,
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
          url : link2+"/create_load_bangunan/"+id_infrastruktur,
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
          url : link2+"/create_load_ongoing/"+id_infrastruktur_ongoing,
          data :  'id_infrastruktur_ongoing='+ id_infrastruktur_ongoing,
          success : function(data){
            //console.log(data);
            var a = document.getElementById("fetched-data3");
          a.innerHTML= data;//menampilkan data ke dalam modal
          a.style.display="block";
          }
      });
  }

<?php foreach($bangunan as $key){ ?>
        <?php
         if($key->foto_1==''){ $cover = 'no_image.jpg'; }else{ $cover = $key->foto_1; }
        ?>
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: swd2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$cover; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" style="color: #fff;" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_bangunan(<?php echo $key->id_infrastuktur.',\\\''.$key->nama_paket.'\\\''; ?>)"><?= $key->nama_paket;?></a><h5>').addTo(bangunan);
<?php } ?> 

<?php foreach($ongoing as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: pat2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" style="color: #fff;" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_ongoing(<?php echo $key->id_infrastruktur_ongoing.',\\\''.$key->nama_paket.'\\\''; ?>)"><?=$key->nama_paket;?></a><h5>').addTo(ongoing);
<?php } ?> 


  legend.onAdd = function (map) {

  var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 10, 20, 50, 100, 200, 500, 1000],
        labels = [];

   
        div.innerHTML +=
            '<div class="card-header"><strong><small class="card-title"><i class="fa fa-window-restore fa-fw" aria-hidden="true"></i> Legend</small></strong> </div><table class="table table-bordered table-sm table-legend"> <tbody><tr><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/marker-green.png" style="position: relative;height: 30px;width: 21px;margin-left: 0px;"></td><td style="font-size: 12px;">Infrastruktur Terbangun</td><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/coklat_emas.png" style="position: relative;height: 30px;width: 21px;margin-left: 0px;"></td><td style="font-size: 12px;">Infrastruktur Ongoing</td></tr><tr><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/ungu.png" style="position: relative;height: 30px;width: 21px;margin-left: 0px;"></td> <td style="font-size: 12px;">Usulan Eksternal</td><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/rehabilitatif.png" style="position: relative;height: 27px;height: 30px;width: 21px;"></td> <td style="font-size: 12px;">Usulan Internal</td> </tr></tbody></table>';
    return div;
  };

  legend.addTo(mymap); 

 
   </script>
</htnl>