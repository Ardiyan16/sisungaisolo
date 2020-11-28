<?php echo $this->load->view('front/header_map_gl');?>
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
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>

    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
 <!--   <div class="topnav" id="myTopnav">
      <a href="#">Cari Sungai</a>
      <a href="#"><input type="text" id="square" placeholder="Cari Sungai.." style="margin: -6px;"></a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-search"></i>
      </a>
    </div> -->
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
      <li><a href="<?php echo base_url('peta_dashboard/map') ?>"><span class="icon color5"><i class="fa fa-tree"></i></span>Peta</a></li>
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
            <p style="color: #000;">SISUNGAI merupakan Sistem Informasi yang mengintegrasikan data sungai di BBWS Bengawan Solo .sehingga memudahkan (EASIER) penyusunan rencana usulan kegiatan yang lebih tepat sasaran dan data sungai yang lebih akurat (BETTER) dan ditayangkan secara online pada website .BBWS Bengawan Solo agar data dapat diakses dengan cepat (FASTER) sehingga memberikan informasi kondisi secara aktual,up to date dan lebih efisien ( CHEAPER).</p>
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

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
                      <center><img class="tags-legend" src="https://cdn.mapmarker.io/api/v1/pin?size=120&background=%23FCDC00&icon=fa-industry&color=%23FFFFFF&voffset=0&hoffset=1&" style="position: relative;height: 25px;width: 30px;"></center>
                    </td>
                    <td><center style="font-size: 11px;">Tebing</td>
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
                            <center><div style='border-left: 6px solid black;height:19px;'></div></center>
                          </td>
                          <td><center style="font-size: 11px;">Tanggul</td>
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
                  </div>
    
    </div>


  </div>
  </div>


</div>
</div>
          
  <?php echo $this->load->view('front/footer_map_gl');?>