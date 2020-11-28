<div role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-question-circle"></i>&nbsp;Data Teknis</a></li>
                    <li role="presentation"><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i>&nbsp;Foto & Video</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home1" style="background: #fff;">
                       <table class="table table-hover">
                                <tbody>

                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Nama Paket / Bangunan</td>
                                        <td>:</td>
                                        <td id="nama_bendung"><?php echo $data_ongoing->nama_paket ?></td>
                                    </tr>
                                  
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Latitude</td>
                                        <td>:</td>
                                        <td id="tahun_data_bendung"><?php echo $data_ongoing->latitude ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Loongitude</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_ongoing->longitude ?></td>
                                    </tr>
                                    
                                </tbody>
                    </table>
                    </div>
                    <a href="#_" class="lightbox" id="img1<?php echo $data_ongoing->id_infrastruktur_ongoing;?>">
                              <img src="<?php echo base_url().'data/img/bangunan/'.$data_ongoing->foto_1; ?>">
                    </a>
                    <a href="#_" class="lightbox" id="img2<?php echo $data_ongoing->id_infrastruktur_ongoing;?>">
                              <img src="<?php echo base_url().'data/img/bangunan/'.$data_ongoing->foto_2; ?>">
                    </a>
                    <a href="#_" class="lightbox" id="img3<?php echo $data_ongoing->id_infrastruktur_ongoing;?>">
                              <img src="<?php echo base_url().'data/img/bangunan/'.$data_ongoing->foto_3; ?>">
                    </a>
                    <a href="#_" class="lightbox" id="img4<?php echo $data_ongoing->id_infrastruktur_ongoing;?>">
                              <img src="<?php echo base_url().'data/img/bangunan/'.$data_ongoing->foto_4; ?>">
                    </a>
                    <div role="tabpanel" class="tab-pane" id="profile1" style="background-color: #fff;">
                      <div class="row doc-grid">
                          <div class="col-md-6">
                         
                         <?php if($data_ongoing->foto_1==""){
                          $foto_1 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                         }else{ 
                            $foto_1 = "<a href='#img2".$data_ongoing->id_infrastruktur_ongoing."'><img src='".base_url().'data/img/bangunan/'.$data_ongoing->foto_1."'  style='width: 80%;'></a>";
                        }?>
                        <?php echo $foto_1;?>
                          </div>
                          <div class="col-md-6">
                        <?php if($data_ongoing->foto_2==""){
                          $foto_2 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                         }else{ 
                            $foto_2 = "<a href='#img2".$data_ongoing->id_infrastruktur_ongoing."'><img src='".base_url().'data/img/bangunan/'.$data_ongoing->foto_2."'  style='width: 80%;'></a>";
                        }?>
                        <?php echo $foto_2;?>
                          </div>
                      </div>  
                       <div class="row doc-grid">
                          <div class="col-md-6">
                        <?php if($data_ongoing->foto_3==""){
                          $foto_3 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                         }else{ 
                            $foto_3 = "<a href='#img2".$data_ongoing->id_infrastruktur_ongoing."'><img src='".base_url().'data/img/bangunan/'.$data_ongoing->foto_3."'  style='width: 80%;'></a>";
                        }?>
                        <?php echo $foto_3;?>
                          </div>
                          <div class="col-md-6">
                           <?php if($data_ongoing->foto_4==""){
                          $foto_4 = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                         }else{ 
                            $foto_4 = "<a href='#img2".$data_ongoing->id_infrastruktur_ongoing."'><img src='".base_url().'data/img/bangunan/'.$data_ongoing->foto_4."'  style='width: 80%;'></a>";
                        }?>
                        <?php echo $foto_4;?>
                          </div>
                        </div>   
                        <div class="row doc-grid">
                          <div class="col-md-12">
                            <?php if($data_ongoing->video==""){
                                    $video = "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                                   }else{ 
                                      $video = "<iframe width='100%'' height='315' src='https://www.youtube.com/embed/".$data_ongoing->video."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
                             }?>
                            <?php echo $video;?>
                          </div>
                        </div>  
                    </div>
                  </div>
 </div>