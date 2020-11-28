<div role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Data Teknis</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Foto & Video</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home" style="background-color: #fff ">
                       <table class="table table-hover">
                                <tbody>

                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Nama Sungai</td>
                                        <td>:</td>
                                        <td id="nama_bendung"><?php echo @$data->nama_sungai;?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Orde</td>
                                        <td>:</td>
                                        <td id="bendung_kode_das"><?php echo @$data->orde_sungai;?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Panjang</td>
                                        <td>:</td>
                                        <td id="tahun_data_bendung"><?php echo @$data->panjang_sungai;?>&nbsp;KM</td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Wilayah Administrasi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo @$data->wilayah_administrasi;?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Latitude</td>
                                        <td>:</td>
                                        <td id="tahun_data_bendung"><?php echo @$data->latitude_awal;?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Loongitude</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo @$data->longitude_awal;?></td>
                                    </tr>
                                     <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Tahun Data</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo @$data->tahun_data;?></td>
                                    </tr>
                                   
                                </tbody>
                  </table>
                    </div>
                     <a href="#_" class="lightbox" id="img1<?php echo $data->id_sungai;?>">
                            <img src="<?php echo base_url().'data/img/bangunan/'.$data->foto_1; ?>" style="width: 92%;height: 59%;">
                      </a>  
                      <a href="#_" class="lightbox" id="img2<?php echo $data->id_sungai;?>">
                          <img src="<?php echo base_url().'data/img/bangunan/'.$data->foto_2; ?>" style="width: 92%;height: 59%;">
                      </a>
                      <a href="#_" class="lightbox" id="img3<?php echo $data->id_sungai;?>">
                          <img src="<?php echo base_url().'data/img/bangunan/'.$data->foto_3; ?>" style="width: 92%;height: 59%;">
                      </a>
                      <a href="#_" class="lightbox" id="img4<?php echo $data->id_sungai;?>">
                          <img src="<?php echo base_url().'data/img/bangunan/'.$data->foto_4; ?>" style="width: 92%;height: 59%;">
                      </a>
                    <div role="tabpanel" class="tab-pane" id="profile"  style="background-color: #fff ">
                      <div class="row doc-grid">
                          <div class="col-md-6">
                         
                           <?php if($data->foto_1==""){
                            $foto_1 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                           }else{ 
                              $foto_1 = "<a href='#img1".$data->id_sungai."'><img src='".base_url().'data/img/bangunan/'.$data->foto_1."'  style='width: 92%;height: 59%;'></a>";
                          }?>
                          <?php echo $foto_1;?>
                          </div>
                          <div class="col-md-6">
                          <?php if($data->foto_2==""){
                            $foto_2 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                           }else{ 
                              $foto_2 = "<a href='#img2".$data->id_sungai."'><img src='".base_url().'data/img/bangunan/'.$data->foto_2."'  style='width: 92%;height: 59%;'></a>";
                          }?>
                          <?php echo $foto_2;?>
                          </div>
                      </div>  
                       <div class="row doc-grid">
                          <div class="col-md-6">
                           <?php if($data->foto_3==""){
                              $foto_3 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                             }else{ 
                                $foto_3 = "<a href='#img3".$data->id_sungai."'><img src='".base_url().'data/img/bangunan/'.$data->foto_3."'  style='width: 92%;height: 59%;'></a>";
                            }?>
                            <?php echo $foto_3;?>
                          </div>
                          <div class="col-md-6">
                           <?php if($data->foto_4==""){
                              $foto_4 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                             }else{ 
                                $foto_4 = "<a href='#img4".$data->id_sungai."'><img src='".base_url().'data/img/bangunan/'.$data->foto_4."'  style='width: 92%;height: 59%;'></a>";
                            }?>
                            <?php echo $foto_4;?>
                          </div>
                        </div>   
                        <div class="row doc-grid">
                          <div class="col-md-12">
                             <?php if($data->video==""){
                                    $video = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                                   }else{ 
                                      $video = "<iframe width='100%'' height='315' src='https://www.youtube.com/embed/".$data->video."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
                             }?>
                            <?php echo $video;?>
                          </div>
                        </div>  
                    </div>
                  </div>

                </div>