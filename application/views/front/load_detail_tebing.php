<div role="tabpanel">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-question-circle"></i>&nbsp;Data Teknis</a></li>
                   
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home1" style="background: #fff;">
                       <table class="table table-hover">
                                <tbody>                                  
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Desa</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_tebing->desa ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Kecamatan</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_tebing->nama_kecamatan ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Kabupaten</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_tebing->nama_kabupaten ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Lintang</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_tebing->latitude ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Bujur</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_tebing->longitude ?></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
 </div>