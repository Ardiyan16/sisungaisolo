<!DOCTYPE html>
<html>
<head>
  <title>GIS PU ne</title>
  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?=base_url()?>assets/img/icon.png">
  <style>
   
     .modal-header
     {
       color : #fff;
       background-color: #20a8d8;
     }
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css">
  <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css">
  <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/app.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/leaflet.css" />

  <link rel="stylesheet" href="<?=base_url()?>assets/css/lightbox.css" />

  <link rel="stylesheet" href="<?=base_url()?>assets/pancontrol/L.Control.Pan.css" />

  <link href="<?= base_url(); ?>assets/sweetalert/sweetalert.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/autocomplate/dist/easy-autocomplete.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>/assets/autocomplate/dist/easy-autocomplete.themes.css" rel="stylesheet" type="text/css">
  
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
    
    .navbar-light .navbar-nav .open > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.open, .navbar-light .navbar-nav .nav-item.active .nav-link {
        border-bottom: rgb(252, 242, 4) solid 2px;
        /* color: rgb(252, 242, 4); */
    }
    
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
   
  </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height: 8%;">
      <div class="container-fluid">
        <div class="navbar-header">
          <div class="navbar-icon-container">
            <a href="#" class="navbar-icon pull-right visible-xs" id="nav-btn"><i class="fa fa-bars fa-lg white"></i></a>
            <a href="#" class="navbar-icon pull-right visible-xs" id="sidebar-toggle-btn"><i class="fa fa-search fa-lg white"></i></a>
          </div>
          <a class="navbar-brand" href="#"><img src="<?=base_url()?>/assets/img/logo_new.jpg" style="width: 200px;height: 41px;margin-top: -6%;"></a>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav">
           <li class="dropdown">
              <a id="toolsDrop" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe white"></i>&nbsp;&nbsp;LAYER <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="full-extent-btn">Sungai</a></li>
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="legend-btn">Infrastruktur Terbangun</a></li>
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="legend-btn">Infrastruktur Ongoing</a></li>
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="legend-btn">Usulan Eksternal</a></li>
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="legend-btn">Usulan Internal</a></li>
              </ul>
            </li>  
            <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="usulan-btn"><i class="fa fa-question-circle white"></i>&nbsp;&nbsp;KIRIM USULAN</a></li>
            
            <li class="hidden-xs"><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="list-btn"><i class="fa fa-list white"></i>&nbsp;&nbsp;REKAP DATA</a></li>

            <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="rekap-btn"><i class="fa fa-picture-o"></i>&nbsp;&nbsp;TENTANG SISUNGAI</a></li>
            
            
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
</div>
<div id="container">
<div id="sidebar">
        <div class="sidebar-wrapper">
          <div class="panel panel-default" id="features">
             <ul class="nav nav-pills nav-stacked">
               <li class="nav-item active">     
               <form class="navbar-form navbar-right" role="search">
                <div class="form-group has-feedback">
                    <input type="text" id="square" placeholder="Search" class="form-control" style="width: 99%;">
                    <span id="searchicon" class="fa fa-search form-control-feedback"></span>
                </div>
               </form>
               </li>
              
            </ul>
            <div class="panel-heading">
              <h3 class="panel-title">Rekap Data
              <button type="button" class="btn btn-xs btn-default pull-right" id="sidebar-hide-btn"><i class="fa fa-chevron-left"></i></button></h3>
            </div>
                <ul class="nav nav-pills nav-stacked">
                     <li class="nav-item active"><a target="_blank" href="<?php echo base_url('peta/dashboard') ?>">Dashboard</a></li>
                     <li class="nav-item active"><a target="_blank" href="<?php echo base_url('peta/rekap_sungai') ?>">Rekap Sungai</a></li>
                    <li class="nav-item active"><a target="_blank" href="<?php echo base_url('peta/rekap_terbangun') ?>">Rekap Infrastruktur Terbangun</a></li>
                    <li class="nav-item active"><a target="_blank" href="<?php echo base_url('peta/rekap_ongoing') ?>">Rekap Infrastruktur On Going </a></li>
                    
                </ul>
                <ul class="nav nav-pills nav-stacked">
                    <li class="nav-item active"><a target="_blank" href="<?php echo base_url('peta/rekap_eksternal') ?>">Rekap Usulan Eksternal</a></li>
                    <li class="nav-item active"><a target="_blank" href="<?php echo base_url('peta/rekap_internal') ?>">Rekap Usulan Internal</a></li>
                </ul>    
          </div>
        </div>
      </div>   
<div id="map" ></div>
<div id="map2" ></div>  

</div> 

<div class="modal fade" id="usulanModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Form Kirim Usulan</h4>
          </div>
          <div class="modal-body">
          <form action="" id="form" name="form">
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Usulan</label>
            <input type="date" class="form-control" name="tanggal_usulan" aria-describedby="emailHelp" placeholder="Enter email">
            <span class="help-block"></span>
          </div>
          <div class="form-group">
             <label for="exampleInputEmail1">Pengirim Usulan</label> 
          </div>
          <div class="form-group">
             <label class="checkbox-inline">
              <input class="fakeRadio" type="radio" name="pengirim_usulan" value="internal" checked>Internal
             </label>
             <label class="checkbox-inline">
              <input class="fakeRadio" type="radio" name="pengirim_usulan" value="eksternal">Eksternal
             </label>
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">Detail Usulan</label>
             <textarea class="form-control" name="detail_usulan" rows="3"></textarea>
             <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Koordinat Latitude</label>
            <input type="text" class="form-control" name="latitude" aria-describedby="emailHelp" placeholder="Koordinat Latitude">
            <span class="help-block"></span>
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Koordinat Longitude</label>
            <input type="text" class="form-control" name="longitude" aria-describedby="emailHelp" placeholder="Koordinat Longitude">
            <span class="help-block"></span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Keterangan</label>
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

<div class="modal fade" id="rekapModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" >
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
                    <p>SISUNGAI merupakan Sistem Informasi yang mengintegrasikan data sungai di BBWS Bengawan Solo .sehingga memudahkan ( EASIER) penyusunan rencana usulan kegiatan yang lebih tepat sasaran dan data sungai yang lebih akurat (BETTER) dan ditayangkan secara online pada website .BBWS Bengawan Solo agar data dapat diakses dengan cepat (FASTER) sehingga memberikan informasi kondisi secara aktual,up to date dan lebih efisien ( CHEAPER).</p>
                </div>   
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="rekapTerbangunModal" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg" style="width:99%;">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Rekap Infrastruktur Terbangun</h4>
          </div>
          <div class="modal-body" style="overflow-x: auto;background-color:#fff;">
             <p><a href="<?php echo base_url('peta/export_excel') ?>"><button type="button" class="btn btn-success">Export ke Excel</button></a></p>      
           <table class="table table-hover">
                                <thead>
                                    <th>
                                        No.
                                    </th>
                                  <th>
                                    Nama Paket / Bangunan
                                  </th>
                                  <th>
                                    Penyedia Jasa Konstruksi
                                  </th>
                                  <th>
                                    Tahun Selesai
                                  </th>
                                  <th>
                                    Item Pekerjaan
                                  </th>
                                  <th>
                                      Volume
                                  </th>
                                   <th>
                                   Satuan
                                  </th>
                                  <th>
                                    Latitude
                                  </th>
                                  <th>
                                    Longitude
                                  </th>
                                  <th>
                                      Keterangan
                                  </th>
                                  <th>
                                      Penilaian Kinerja
                                  </th>
                                  <th>
                                      AKNOP
                                  </th>
                                  <th>
                                      Tahun Data
                                  </th>
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_terbangun==true){
                                  $no=1;
                                  foreach($rekap_terbangun as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->nama_paket;?></td>
                                        <td>
                                          <?php echo $study->penyedia_jasa_konstruksi;?>
                                        </td>
                                        <td><?php echo $study->masa_konstruksi;?></td>
                                         <td><?php echo $study->item_pekerjaan;?></td>
                                        <td>
                                          <?php echo $study->volume;?>
                                        </td>
                                        <td><?php echo $study->satuan;?></td>
                                        <td><?php echo $study->latitude;?></td>
                                        <td>
                                          <?php echo $study->longitude;?>
                                        </td>
                                        <td><?php echo $study->keterangan;?></td>
                                        <td><?php echo $study->penilaian_kinerja;?></td>
                                        <td>
                                          <?php echo $study->aknop;?>
                                        </td>
                                        <td>
                                          <?php echo $study->tahun_data;?>
                                        </td>
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>
          </div>
          <div class="modal-footer" style="background-color:#fff;">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="rekapSungaiModal" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg" style="width:99%;">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Rekap Sungai</h4>
          </div>
          <div class="modal-body" style="overflow-x: auto;background-color:#fff;">
             <p><a href="<?php echo base_url('peta/export_excel_sungai') ?>"><button type="button" class="btn btn-success">Export ke Excel</button></a></p>      
           <table class="table table-hover">
                                <thead>
                                    <th>
                                        No.
                                    </th>
                                  <th>
                                    Nama Sungai
                                  </th>
                                  <th>
                                    Orde Sungai
                                  </th>
                                  <th>
                                    Panjang Sungai
                                  </th>
                                  
                                   <th>
                                    Tahun Data
                                  </th>
                                  <th>
                                     Wilayah Administrasi
                                  </th>
                                  
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_sungai==true){
                                  $no=1;
                                  foreach($rekap_sungai as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->nama_sungai;?></td>
                                        <td>
                                          <?php echo $study->orde_sungai;?>
                                        </td>
                                        <td><?php echo $study->panjang_sungai;?></td>
                                         
                                        <td><?php echo $study->tahun_data;?></td>
                                        <td><?php echo $study->wilayah_administrasi;?></td>
                                        
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>
          </div>
          <div class="modal-footer" style="background-color:#fff;">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="rekapOngoingModal" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg" style="width:99%;">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Rekap Infrastruktur Ongoing</h4>
          </div>
          <div class="modal-body" style="overflow-x: auto;background-color:#fff;">
              <p><a href="<?php echo base_url('peta/export_excel_ongoing') ?>"><button type="button" class="btn btn-success">Export ke Excel</button></a></p>
              <table class="table table-hover">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                  <th>
                                    Nama Paket / Bangunan
                                  </th>
                                  <th>
                                    Penyedia Jasa Konstruksi
                                  </th>
                                  <th>
                                    Tahun Selesai
                                  </th>
                                  <th>
                                    Item Pekerjaan
                                  </th>
                                  <th>
                                      Volume
                                  </th>
                                   <th>
                                   Satuan
                                  </th>
                                  <th>
                                    Latitude
                                  </th>
                                  <th>
                                    Longitude
                                  </th>
                                  <th>
                                      Keterangan
                                  </th>
                                  <th>
                                      Tahun Data
                                  </th>
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_ongoing==true){
                                     $no=1;
                                  foreach($rekap_ongoing as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->nama_paket;?></td>
                                        <td>
                                          <?php echo $study->penyedia_jasa_konstruksi;?>
                                        </td>
                                        <td><?php echo $study->masa_konstruksi;?></td>
                                         <td><?php echo $study->item_pekerjaan;?></td>
                                        <td>
                                          <?php echo $study->volume;?>
                                        </td>
                                        <td><?php echo $study->satuan;?></td>
                                        <td><?php echo $study->latitude;?></td>
                                        <td>
                                          <?php echo $study->longitude;?>
                                        </td>
                                        <td><?php echo $study->keterangan;?></td>
                                        <td><?php echo $study->tahun_data;?></td>
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>
          </div>
          <div class="modal-footer" style="background-color:#fff;">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="rekapEksternalModal" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Rekap Usulan Eksternal</h4>
          </div>
          <div class="modal-body" style="overflow-x: auto;background-color:#fff;">
               <p><a href="<?php echo base_url('peta/export_excel_eksternal') ?>"><button type="button" class="btn btn-success">Export ke Excel</button></a></p>  
              <table class="table table-hover">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                  <th>
                                    Tanggal Usulan
                                  </th>
                                  <th>
                                    Pengirim Usulan
                                  </th>
                                  <th>
                                    Detail Usulan
                                  </th>
                                  <th>
                                    Koordinat Latitude
                                  </th>
                                  <th>
                                    Koordinat Longitude
                                  </th>
                                   <th>
                                   Keterangan
                                  </th>
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_eksternal==true){
                                     $no=1;
                                  foreach($rekap_eksternal as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->tanggal_usulan;?></td>
                                        <td>
                                          <?php echo $study->pengirim_usulan;?>
                                        </td>
                                        <td><?php echo $study->detail_usulan;?></td>
                                         <td><?php echo $study->latitude;?></td>
                                        <td>
                                          <?php echo $study->longitude;?>
                                        </td>
                                        <td><?php echo $study->keterangan;?></td>
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>
          </div>
          <div class="modal-footer" style="background-color:#fff;">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="rekapInternalModal" tabindex="-1" role="dialog" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Rekap Usulan Eksternal</h4>
          </div>
          <div class="modal-body" style="overflow-x: auto;background-color:#fff;">
               <p><a href="<?php echo base_url('peta/export_excel_internal') ?>"><button type="button" class="btn btn-success">Export ke Excel</button></a></p>  
              <table class="table table-hover">
                                <thead>
                                    <th>
                                        No
                                    </th>
                                  <th>
                                    Tanggal Usulan
                                  </th>
                                  <th>
                                    Pengirim Usulan
                                  </th>
                                  <th>
                                    Detail Usulan
                                  </th>
                                  <th>
                                    Koordinat Latitude
                                  </th>
                                  <th>
                                    Koordinat Longitude
                                  </th>
                                   <th>
                                   Keterangan
                                  </th>
                                </thead>
                                <tbody>

                                <?php 
                                 if($rekap_internal==true){
                                     $no=1;
                                  foreach($rekap_internal as $study){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $study->tanggal_usulan;?></td>
                                        <td>
                                          <?php echo $study->pengirim_usulan;?>
                                        </td>
                                        <td><?php echo $study->detail_usulan;?></td>
                                         <td><?php echo $study->latitude;?></td>
                                        <td>
                                          <?php echo $study->longitude;?>
                                        </td>
                                        <td><?php echo $study->keterangan;?></td>
                                    </tr>
                                    
                                <?php }}else{?> 
                                  <div class='alert alert-danger'>Data Tidak Ditemukan</div>
                                <?php }?>  
                                </tbody>
                  </table>
          </div>
          <div class="modal-footer" style="background-color:#fff;">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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

<script src="<?=base_url()?>assets/js/jquery-2.1.4.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/leaflet.js"></script>
  <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>
  <script src="<?=base_url()?>assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.5/typeahead.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
 
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
    <script src="<?=base_url()?>assets/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.js"></script>
  <script src="<?=base_url()?>assets/pancontrol/L.Control.Pan.js" ></script>
  <script src="<?= base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>

  <!--<script src="<?php echo base_url(); ?>/assets/autocomplate/lib/jquery-1.11.2.min.js"></script>-->
  <script src="<?php echo base_url(); ?>/assets/autocomplate/dist/jquery.easy-autocomplete.min.js" type="text/javascript" ></script> 
    
  <script>
  $("#usulan-btn").click(function() {
   $("#usulanModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  });
  
  $("#rekap-btn").click(function() {
   $("#rekapModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  });
  
  function rekap_terbangun_btn() {
   $("#rekapTerbangunModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  function rekap_sungai_btn() {
   $("#rekapSungaiModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  
  function rekap_ongoing_btn() {
   $("#rekapOngoingModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  function rekap_eksternal_btn() {
   $("#rekapEksternalModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  function rekap_internal_btn() {
   $("#rekapInternalModal").modal("show");
   $(".navbar-collapse.in").collapse("hide");
   return false;
  };
  
  $(".fakeRadio").click(function(){
    $(".fakeRadio").prop( "checked", false );
    $(this).prop( "checked", true );
  });
  
//   $(document).ready(function(){
//         $("input").change(function(){
//         $(this).parent().parent().removeClass('has-error');
//         $(this).next().empty();
//         });
//         $("textarea").change(function(){
//             $(this).parent().parent().removeClass('has-error');
//             $(this).next().empty();
//         });
//         $("select").change(function(){
//             $(this).parent().parent().removeClass('has-error');
//             $(this).next().empty();
//         });
//      });  
  
  function swal_berhasil() { swal({ title:"SUCCESS", text:"Berhasil", type: "success", closeOnConfirm: true}); }
  function swal_error(msg) { swal({ title:"ERROR", text: msg, type: "warning", closeOnConfirm: true});  }
  
   function save() {
        var url;
        url = "<?= site_url()?>peta/simpan/";
        //tinyMCE.triggerSave();
        $('#btnSave').text('saving...'); $('#btnSave').attr('disabled',true);

        $.ajax({
            url : url, type: "POST", dataType: "JSON", data: $('#form').serialize(),
            success: function(data) {
                    setTimeout(function(){
    							$('#btn_close').click();
    						}, 1000);
                    swal_berhasil();
                    $('#form')[0].reset();
               
                $('#btnSave').text('save'); $('#btnSave').attr('disabled',false);
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
          url : link+"/create_load/"+id_sungai+"/"+id_koordinat,
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
      infrastruktur.innerHTML = 'Data '+nama_infrastruktur+'Konstruksi Terbangun';
      infrastruktur.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_bangunan/"+id_infrastruktur,
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
      ongoing.innerHTML = 'Data '+nama_paket+'Konstruksi Ongoing';
      ongoing.style.display = "block";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
          type : 'post',
          url : link+"/create_load_ongoing/"+id_infrastruktur_ongoing,
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
      usulan.innerHTML = 'Data '+nama_usulan+'Usulan Eksternal';
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
      usulan.innerHTML = 'Data '+detail_usulan+'Usulan Internal';
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

 <?php foreach($bangunan as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: swd2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_bangunan(<?php echo $key->id_infrastuktur.',\\\''.$key->nama_paket.'\\\''; ?>)"><?= $key->nama_paket;?></a><h5>').addTo(bangunan);
<?php } ?> 

<?php foreach($ongoing as $key){ ?>
     
        L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: pat2}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="infrastruktur_ongoing(<?php echo $key->id_infrastruktur_ongoing.',\\\''.$key->nama_paket.'\\\''; ?>)"><?=$key->nama_paket;?></a><h5>').addTo(ongoing);
<?php } ?> 

// <?php foreach($internal as $key){ ?>
     
//         L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: rehabilitatif}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="usulan_internal(<?php echo $key->id_usulan.',\\\''.$key->detail_usulan.'\\\''; ?>)">Usulan Internal</a><h5>').addTo(internal);
// <?php } ?> 


// <?php foreach($eksternal as $key){ ?>
     
//         L.marker([<?=$key->latitude?>, <?=$key->longitude?>], {icon: unguIcon}).bindPopup('<h5 style="text-align:center;"><b>Klik Untuk Lihat Detail Data</b></h5><h5 style="text-align:center;"><a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="usulan_eksternal(<?php echo $key->id_usulan.',\\\''.$key->detail_usulan.'\\\''; ?>)">Usulan Eksternal</a><h5>').addTo(eksternal);
// <?php } ?> 


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
                "popupContent": '<center><img src="<?php echo base_url().'data/img/bangunan/'.$key->foto_1; ?>" width="120"></center><center><br/> <a href="#" class="btn btn-default btn-small" id="custId" data-toggle="modal" onclick="kalipepe(<?php echo $key->id_sungai.','.$key->id_koordinat.',\\\''.$key->nama_sungai.'\\\''; ?>)"><?php echo $key->nama_sungai; ?></a></center>',
                "underConstruction": false,
            },
            "id": 1
        },
      <?php } ?>
    ]
};

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
            '<div class="card-header"><strong><small class="card-title"><i class="fa fa-window-restore fa-fw" aria-hidden="true"></i> Legend</small></strong> </div><table class="table table-bordered table-sm table-legend"> <tbody><tr><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/marker-green.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td><td>Infrastruktur Terbangun</td><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/coklat_emas.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td><td>Infrastruktur Ongoing</td></tr><tr><td class="ket-center"> <img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/ungu.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td> <td>Usulan Eksternal</td><td class="ket-center"><img class="tags-legend" src="<?=base_url()?>assets/img/leaflet/rehabilitatif.png" style="position: relative;height: 27px;width: 23px;margin-left: 11px;"></td> <td>Usulan Internal</td> </tr></tbody></table>';
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




</body>
</html>
