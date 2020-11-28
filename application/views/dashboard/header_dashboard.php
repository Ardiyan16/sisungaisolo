
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

  <link href="<?php echo base_url().'assets_new/'; ?>css/bar.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets_new/'; ?>css/style_chart.css" rel="stylesheet">
  <script src="<?php echo base_url()?>/assets_new/js/Chart.js"></script>

  <script type="text/javascript" src="<?php echo base_url().'assets_new/'; ?>js/jquery.min.js"></script>

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

    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
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
  <li><a href="<?php echo base_url('rekap_data/dashboard2') ?>"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <li><a href="<?php echo base_url('rekap_data/peta_dashboard') ?>"><span class="icon color5"><i class="fa fa-tree"></i></span>Peta</a></li>
 
  <?php

        $id_level=$this->session->userdata('admin_level');
        $main_menu=$this->db->join('mainmenu','mainmenu.idmenu=tab_akses_mainmenu.id_menu')
                  ->where('tab_akses_mainmenu.id_level',$id_level)
                  ->where('tab_akses_mainmenu.r','1')
                  ->where('tab_akses_mainmenu.status','user')
                  ->order_by('mainmenu.idmenu','asc')
                  ->get('tab_akses_mainmenu')
                  ->result();
        foreach ($main_menu as $rs) {
        ?>
        <?php
        $row = $this->db->where('mainmenu_idmenu',$rs->idmenu)->get('submenu')->num_rows();
          if($row>0){
            $sub_menu=$this->db->join('submenu','submenu.id_sub=tab_akses_submenu.id_sub_menu')
                       ->where('submenu.mainmenu_idmenu',$rs->idmenu)
                       ->where('tab_akses_submenu.id_level',$id_level)
                       ->where('tab_akses_submenu.r','1')
                       ->where('tab_akses_submenu.status','user')
                       ->get('tab_akses_submenu')
                       ->result();
  ?>
  <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span><?=$rs->nama_menu?><span class="caret"></span></a>
    <?php
            echo "<ul>";
            foreach ($sub_menu as $rsub){
     ?>
      <li><a href="<?=base_url().$rsub->link_sub?>"><?=$rsub->nama_sub?></a></li>
      <?php
            }
              echo "</ul>";
            }else{ 
      ?>
  </li>
  <li><a href="<?=base_url().$rs->link_menu?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span><?=$rs->nama_menu?></a></li>
 <?php
            }
            }
            ?>
            <?php
              if ($id_level==1){?>
          
            <?php
            }
            ?>

  <!-- <li><a href="<?php echo base_url('rekap_data/history') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Rekap Pemeriksan Berkala</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_tanggul') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Data Tanggul</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_rever') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Data Rivertmen</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_pintu') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Data Pintu</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_cekdam') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Data Cekdam</a></li>
  <li><a href="<?php echo base_url('rekap_data/rekap_tebing') ?>"><span class="icon color5"><i class="fa fa-check-square-o"></i></span>Data Tebing</a></li> -->
  <li><a href="<?php echo base_url('peta_dashboard') ?>"><span class="icon color5"><i class="fa fa-tree"></i></span>Kembali ke Visitor</a></li>          
  <li><a href="<?php echo base_url('rekap_data/logout') ?>"><span class="icon color5"><i class="fa fa-power-off"></i></span>Logout</a></li>

</ul>
</div>

</div>