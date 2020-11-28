
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from egemem.com/theme/kode/v1.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jun 2018 08:04:13 GMT -->
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
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/sweet-alert/sweet-alert.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/datatables/datatables.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/chartist/chartist.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/rickshaw.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/detail.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/graph.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/rickshaw/legend.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/date-range-picker/daterangepicker-bs3.css" rel="stylesheet">

  <link href="<?php echo base_url().'assets_new/'; ?>css/plugin/fullcalendar/fullcalendar.css" rel="stylesheet">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/leaflet.css" />

  <link rel="stylesheet" href="<?=base_url()?>assets/css/lightbox.css" />

  <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css">
  <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css">
  <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/app.css">

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
  </style>  

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="<?php echo base_url().'assets_new/'; ?>img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index-2.html" class="logo"><img src="<?=base_url()?>/assets/img/logo_new.jpg" style="width: 200px;height: 41px;margin-top: -6%;"></a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Menu -->

    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
    <!-- End Sidepanel Show-Hide Button -->

    
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN</li>
  <li><a href="<?php echo base_url('peta/dashboard') ?>"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <li><a href="<?php echo base_url('peta/rekap_sungai') ?>"><span class="icon color6"><i class="fa fa-th"></i></span>Rekap Sungai</a></li>
  <li><a href="<?php echo base_url('peta/rekap_terbangun') ?>"><span class="icon color6"><i class="fa fa-th"></i></span>Rekap Infrastruktur Terbangun</a></li>
  <li><a href="<?php echo base_url('peta/rekap_ongoing') ?>"><span class="icon color6"><i class="fa fa-th"></i></span>Rekap Infrastruktur Ongoing</a></li>
  <li><a href="<?php echo base_url('peta/rekap_eksternal') ?>"><span class="icon color6"><i class="fa fa-th"></i></span>Rekap Usulan Eksternal</a></li>
  <li><a href="<?php echo base_url('peta/rekap_internal') ?>"><span class="icon color6"><i class="fa fa-th"></i></span>Rekap Usulan Internal</a></li>
  <!-- <li><a href="#"><span class="icon color7"><i class="fa fa-flask"></i></span>UI Elements<span class="caret"></span></a>
    <ul>
      <li><a href="icons.html">Icons</a></li>
      <li><a href="tabs.html">Tabs</a></li>
      <li><a href="buttons.html">Buttons</a></li>
      <li><a href="panels.html">Panels</a></li>
      <li><a href="notifications.html">Notifications</a></li>
      <li><a href="modal-boxes.html">Modal Boxes</a></li>
      <li><a href="progress-bars.html">Progress Bars</a></li>
      <li><a href="others.html">Others<span class="label label-danger">NEW</span></a></li>
    </ul>
  </li>
  <li><a href="charts.html"><span class="icon color8"><i class="fa fa-bar-chart"></i></span>Charts</a></li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>Tables<span class="caret"></span></a>
    <ul>
      <li><a href="basic-table.html">Basic Tables</a></li>
      <li><a href="data-table.html">Data Tables</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Forms<span class="caret"></span></a>
    <ul>
      <li><a href="form-elements.html">Form Elements</a></li>
      <li><a href="layouts.html">Form Layouts</a></li>
      <li><a href="text-editors.html">Text Editors</a></li>
    </ul>
  </li>
  <li><a href="widgets.html"><span class="icon color11"><i class="fa fa-diamond"></i></span>Widgets</a></li>
  <li><a href="calendar.html"><span class="icon color8"><i class="fa fa-calendar-o"></i></span>Calendar<span class="label label-danger">NEW</span></a></li>
  <li><a href="typography.html"><span class="icon color12"><i class="fa fa-font"></i></span>Typography</a></li>
  <li><a href="#"><span class="icon color14"><i class="fa fa-paper-plane-o"></i></span>Extra Pages<span class="caret"></span></a>
    <ul>
      <li><a href="social-profile.html">Social Profile</a></li>
      <li><a href="invoice.html">Invoice<span class="label label-danger">NEW</span></a></li>
      <li><a href="login.html">Login Page</a></li>
      <li><a href="register.html">Register</a></li>
      <li><a href="forgot-password.html">Forgot Password</a></li>
      <li><a href="lockscreen.html">Lockscreen</a></li>
      <li><a href="blank.html">Blank Page</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a target="_blank" href="Landing/index.html">Front-end Template</a></li>
      <li><a href="404.html">404 Page</a></li>
      <li><a href="500.html">500 Page</a></li>
    </ul>
  </li> -->
</ul>


</div>

</div>