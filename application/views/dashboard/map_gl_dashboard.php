<?php echo $this->load->view('dashboard/header_map_gl_dashboard');?>
<style>
.modal-primary .modal-header {
    color: #fff;
    background-color: #20a8d8;
}
</style>
<body>
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
  </div>  
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
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
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
    <li><a href="<?php echo base_url('peta_dashboard') ?>"><span class="icon color5"><i class="fa fa-tree"></i></span>Kembali ke Visitor</a></li>          
    <li><a href="<?php echo base_url('rekap_data/logout') ?>"><span class="icon color5"><i class="fa fa-power-off"></i></span>Logout</a></li>
    <div class="modal fade modal-primary modal-data" id="modelMataairDetail" tabindex="-1" role="dialog"
        aria-labelledby="modelMataairTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Infrastruktur Ongoing</h4>
                </div>
                <div class="modal-body">

                    <div id="fetched-data" style="display: none;"></div>
                </div>
            </div>
        </div>
  </div>

    <div class="modal fade modal-primary modal-data" id="modelTerbangunDetail" tabindex="-1" role="dialog"
        aria-labelledby="modelMataairTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Infrastruktur Terbangun</h4>
                </div>
                <div class="modal-body">

                    <div id="fetched-data2" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-primary modal-data" id="modelPintuDetail" tabindex="-1" role="dialog"
        aria-labelledby="modelMataairTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Pintu</h4>
                </div>
                <div class="modal-body">

                    <div id="fetched-data_pintu" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-primary modal-data" id="modelRevertmenDetail" tabindex="-1" role="dialog"
        aria-labelledby="modelMataairTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Revertmen</h4>
                </div>
                <div class="modal-body">

                    <div id="fetched-data_revertmen" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-primary modal-data" id="modelTebingDetail" tabindex="-1" role="dialog"
        aria-labelledby="modelMataairTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Tebing</h4>
                </div>
                <div class="modal-body">

                    <div id="fetched-data_tebing" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-primary modal-data" id="modelCekdamDetail" tabindex="-1" role="dialog"
        aria-labelledby="modelMataairTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Cekdam</h4>
                </div>
                <div class="modal-body">

                    <div id="fetched-data_cekdam" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modelTanggulDetail" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                       <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="modelBendungTitle">Detail Tanggul</h4>
                        </div>
                        <div class="modal-body">
                        <div id="fetched-data_tanggul" style="display: none;"></div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      </div>
                    </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

      <div class="modal fade" id="modelSungaiDetail" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Sungai</h4>
                 </div>
                  <div class="modal-body">
                    <div id="fetched-data_sungai" style="display: none;"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <div class="modal fade" id="modelUsulanInternal" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Usulan Internal</h4>
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
      <div class="modal fade" id="modelUsulanEksternal" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="modelBendungTitle">Detail Usulan Eksternal</h4>
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
  </ul>


</div>

</div>

<div class="content">

  <!-- Start Page Header -->

  <!-- End Page Header -->

  <!-- Start Presentation -->
  <div class="row presentation">
   <!-- <nav id='filter-group' class='filter-group'></nav> -->
   <div class="card card-default toolbar-map" id="daftar_layer" style="width: 23rem;">
            <div class="card-header" data-toggle="collapse" data-target="#daftar-layer-content">
                <span>
                    <i class="fa fa-window-maximize fa-fw" aria-hidden="true"></i>
                </span> Data Layer
            </div>
            <div class="card-block collapse" id="daftar-layer-content">
                <div class="form-group form-check">
                   
                    <div class="form-child">
                        <div class="form-check">
                        <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="mataair" id="mataair" value="mataair" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                     Infrastruktur Ongoing</span>
                            </label>
                        </div>
                        <div class="form-check">
                        <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="infrastruktur_terbangun" id="infrastruktur_terbangun" value="infrastruktur_terbangun" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                     Infrastruktur Terbangun</span>
                            </label>
                        </div>

                        <div class="form-check">
                        <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="usulan_internal" id="usulan_internal" value="usulan_internal" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                     Usulan Internal</span>
                            </label>
                        </div>

                        <div class="form-check">
                        <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="usulan_eksternal" id="usulan_eksternal" value="usulan_eksternal" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                     Usulan Eksternal</span>
                            </label>
                        </div>

                        <div class="form-check">
                           <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="tanggul" id="tanggul" value="tanggul" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                    Tanggul</span>
                            </label>
                        </div>
                        <div class="form-check">
                           <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="pintu" id="pintu" value="pintu" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                    Pintu</span>
                            </label>
                        </div>
                        <div class="form-check">
                           <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="revertmen" id="revertmen" value="revertmen" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                    Revertmen</span>
                            </label>
                        </div>
                        <div class="form-check">
                           <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="tebing" id="tebing" value="tebing" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                    Tebing</span>
                            </label>
                        </div>
                        <div class="form-check">
                           <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="cekdam" id="cekdam" value="cekdam" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                    Cekdam</span>
                            </label>
                        </div>
                        <div class="form-check">
                           <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="sungai" id="sungai" value="sungai" style="margin: -5px 0 0;">
                                
                                <span class="custom-control-description" style="margin-left: 15px;">
                                    Sungai</span>
                            </label>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="card card-default toolbar-map" id="search_layer" style="width: 19rem;">
            <div class="card-header" style="padding:8px;">
                <div class="input-group">
                    <input type="search" class="form-control form-control-sm" name="search" id="search"
                        data-toggle="collapse" data-target="#search-layer-content" placeholder="Search Layer">

                    <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm" id="btn-search" style="height: 33px;margin-top: 1px;">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div class="card-block collapse" id="search-layer-content">
                <div class="form-group">
                    <label for="layer">Pilih Data</label>
                    <select class="custom-select form-control form-control-sm" name="layer" id="layer">
                        <option value="none" selected>--Pilih Data--</option>
                        <option value="ws">Infrastruktur Ongoing</option>
                    </select>
                </div>

            </div>
        </div> -->

    <div id='map'></div>
    <div id='state-legend' class='legend'>
      <h4><a href="#" data-toggle="modal" data-target="#legend">Legend</a></h4>
    </div>
    <div class="modal fade" id="legend" tabindex="1" role="dialog" style="">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Legend</h4>
          </div>
          <div class="modal-body">
           <table class="table table-bordered table-sm table-legend">
            <tbody>

              <tr>
                <td class="ket-center">
                  <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%239F0500&icon=fa-wrench&color=%23FFFFFF&voffset=0&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                </td>
                <td><center style="font-size: 11px;">Infrastruktur On Going</td>
                  <td class="ket-center">
                    <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=140&background=%23808900&icon=fa-building&color=%23FFFFFF&voffset=0&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                  </td>
                  <td><center style="font-size: 11px;">Infrastruktur Terbangun</td>
                  </tr>
                  <tr>
                    <td class="ket-center">
                      <center><div style='border-left: 6px solid black;height:19px;'></div></center>
                    </td>
                    <td><center style="font-size: 11px;">Tanggul</td>
                      <td class="ket-center">
                        <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%230062B1&icon=fa-tv&color=%23FFFFFF&voffset=0&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                      </td>
                      <td><center style="font-size: 11px;">Pintu</td>
                      </tr>
                      <tr>
                        <td class="ket-center">
                          <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23653294&icon=fa-bookmark&color=%23FFFFFF&voffset=0&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                        </td>
                        <td><center style="font-size: 11px;">Revertmen</td>
                          <td class="ket-center">
                            <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FCDC00&icon=fa-industry&color=%23FFFFFF&voffset=0&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                          </td>
                          <td><center style="font-size: 11px;">Tebing</td>
                          </tr>
                           <tr>
                            <td class="ket-center">
                              <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%237B64FF&text=I&color=%23FFFFFF&voffset=2&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                            </td>
                            <td><center style="font-size: 11px;">Usulan Internal</td>
                              <td class="ket-center">
                                <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FA28FF&text=E&color=%23FFFFFF&voffset=2&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                              </td>
                              <td><center style="font-size: 11px;">Usulan Eksternal</td>
                          </tr>
                          <tr>
                            <td class="ket-center">
                              <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FB9E00&icon=fa-map&color=%23FFFFFF&voffset=0&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                            </td>
                            <td><center style="font-size: 11px;">Cekdam</td>
                            </tr>
                            <tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
    <!-- <nav id='filter-group' class='filter-group'></nav> -->
    <!-- <div id='state-legend' class='legend'>
      <h4><a href="#" data-toggle="modal" data-target="#legend">Legend</a></h4>
    </div> -->
    
    </div>


  </div>


</div>                 

                <?php echo $this->load->view('dashboard/footer_map_gl_dashboard');?>