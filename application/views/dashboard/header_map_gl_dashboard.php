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

  <link rel="stylesheet" href="<?=base_url()?>assets/css/lightbox.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/tambah.css" />


<style>


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


<script src="<?= base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>  
<script>
paceOptions = {
    ajax: true, // disabled
    document: true, // disabled
    eventLag: true, // 
    restartOnRequestAfter: true,
    restartOnPushState: true
};

</script> 
<script src="<?= base_url(); ?>assets/js/pace.min.js"></script>    
<script src="<?= base_url(); ?>assets/js/jquery-ui.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/lz-string/1.4.4/lz-string.min.js"></script>
<script>
    Pace.options = {
        ajax: true
    }
</script>
<!-- <script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFTimIhQoFCg8bF7PAMgDWi38QqqvaCx8">
</script> -->
<script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyAFTimIhQoFCg8bF7PAMgDWi38QqqvaCx8&callback"></script>

    <style>
    .marker {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%239F0500&icon=fa-wrench&color=%23FFFFFF&voffset=0&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

    .marker2 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23808900&icon=fa-building&color=%23FFFFFF&voffset=0&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

     .marker3 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FCDC00&icon=fa-industry&color=%23FFFFFF&voffset=0&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

     .marker4 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%230062B1&icon=fa-tv&color=%23FFFFFF&voffset=0&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

    .marker5 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%237B64FF&text=I&color=%23FFFFFF&voffset=2&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

    .marker6 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FA28FF&text=E&color=%23FFFFFF&voffset=2&hoffset=1&');
        background-size: cover;
        width: 33px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

     .marker7 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23653294&icon=fa-bookmark&color=%23FFFFFF&voffset=0&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

   .marker8 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FB9E00&icon=fa-map&color=%23FFFFFF&voffset=0&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

    .marker9 {
        background-image: url('https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23666666&icon=fa-bars&color=%23FFFFFF&voffset=0&hoffset=1&');
        background-size: cover;
        width: 46px;
        height: 53px;
        /* border-radius: 50%; */
        cursor: pointer;
    }

    canvas {
      position: absolute;
      width: 200%;
      height: 100%;
    }
    canvas .mapboxgl-canvas{
      width: 100px !important;
      height: 100px !important;
    }

    .pace {
        -webkit-pointer-events: none;
        pointer-events: none;
        -moz-user-select: none;
        -webkit-user-select: none;
        user-select: none;
    }

    .pace-inactive {
        display: none;
    }

    .pace .pace-progress {
        position: fixed;
        top: 0;
        right: 100%;
        z-index: 2000;
        width: 100%;
        height: 2px;
        background: #20a8d8;
    }

    /* This is a compiled file, you should be editing the file in the templates directory */
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.pace .pace-activity {
  display: block;
  position: fixed;
  z-index: 2000;
  top: 0;
  right: 0;
  width: 300px;
  height: 300px;
  background: #2299dd;
  -webkit-transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  -webkit-transform: translateX(100%) translateY(-100%) rotate(45deg);
  transform: translateX(100%) translateY(-100%) rotate(45deg);
  pointer-events: none;
}

.pace.pace-active .pace-activity {
  -webkit-transform: translateX(50%) translateY(-50%) rotate(45deg);
  transform: translateX(50%) translateY(-50%) rotate(45deg);
}

.pace .pace-activity::before,
.pace .pace-activity::after {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    bottom: 30px;
    left: 50%;
    display: block;
    border: 5px solid #fff;
    border-radius: 50%;
    content: '';
}

.pace .pace-activity::before {
    margin-left: -40px;
    width: 80px;
    height: 80px;
    border-right-color: rgba(0, 0, 0, .2);
    border-left-color: rgba(0, 0, 0, .2);
    -webkit-animation: pace-theme-corner-indicator-spin 3s linear infinite;
    animation: pace-theme-corner-indicator-spin 3s linear infinite;
}

.pace .pace-activity::after {
    bottom: 50px;
    margin-left: -20px;
    width: 40px;
    height: 40px;
    border-top-color: rgba(0, 0, 0, .2);
    border-bottom-color: rgba(0, 0, 0, .2);
    -webkit-animation: pace-theme-corner-indicator-spin 1s linear infinite;
    animation: pace-theme-corner-indicator-spin 1s linear infinite;
}

@-webkit-keyframes pace-theme-corner-indicator-spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(359deg); }
}
@keyframes pace-theme-corner-indicator-spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(359deg); }
}
    </style>  
</head>