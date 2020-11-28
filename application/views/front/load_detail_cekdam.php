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
                                        <td scope="row">nama cekdam</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->nama_cekdam ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Kecamatan</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->nama_kecamatan ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Kabupaten</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->nama_kabupaten ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Propinsi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->nama_prop ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Latitude</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->latitude ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Longitude</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->longitude ?></td>
                                    </tr>
                                    <!-- <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Identifikasi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->fv_identifikasi ?></td>
                                    </tr> -->
                                    <!-- <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Usulan Perbaikan</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->tusulan_pbk ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Panjang</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->tpanjang ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Lebar</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->tlebar ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Tinggi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->ttinggi ?></td>
                                    </tr>
                                 
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Kondisi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->fv_kondisi ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Fungsi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->fv_fungsi ?></td>
                                    </tr>
                                   
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Tindakan</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_cekdam->fv_tindakan ?></td>
                                    </tr> -->
                                </tbody>
                    </table>
                    <table class="table table-hover table-striped table-bordered" id="tabel">
                        <tr>
                            <th rowspan="1" style="font-size: 12px">NO</th>
                            <!--<th rowspan="1" style="font-size: 12px">Tanggal Inspeksi</th>-->
                            <th rowspan="1" style="font-size: 12px">Tahun Inspeksi</th>
                            <th rowspan="1" style="font-size: 12px">Bulan Inspeksi</th>
                            <th rowspan="1" style="font-size: 12px">Jenis Bangunan</th>
                            <th rowspan="1" style="font-size: 12px">Bagian Bangunan</th>
                            <th rowspan="1" style="font-size: 12px">Kerusakan</th>
                            <th rowspan="1" style="font-size: 12px">Volume Kerusakan</th>
                            <th rowspan="1" style="font-size: 12px">Keterangan</th>
                            <th rowspan="1" style="font-size: 12px">Nilai Kinerja</th>
                            <th rowspan="1" style="font-size: 12px">Kinerja</th>
                            <th rowspan="1" style="font-size: 12px">Usulan Tindakan</th>
                            <th rowspan="1" style="font-size: 12px">Pekerjaan Perbaikan</th>
                            <!-- <th colspan="4" style="font-size: 12px">PRIVILLAGE</th> -->
                        </tr>

                        <?php 
                        if($detail_cekdam==true){
                        $no=1;
                        foreach($detail_cekdam as $cekdam){
                        ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $cekdam->tahun ?></td>
                        <td><?php echo $cekdam->bulan ?></td>
                        <td><?php echo $cekdam->tjenis_bgn ?></td>
                        <td><?php echo $cekdam->tbagian_bgn ?></td>
                        <td><?php echo $cekdam->tkerusakan ?></td>
                        <td><?php echo $cekdam->tvolume ?></td>
                        <td><?php echo $cekdam->tket ?></td>
                        <td><?php echo $cekdam->tn_kinerja ?></td>
                        <td><?php echo $cekdam->tkinerja ?></td>
                        <td><?php echo $cekdam->tusulan_tindakan ?></td>
                        <td><?php echo $cekdam->tpekerjaan_perbaikan ?></td>
                        </tr>
                        <?php $no++; } 
                        
                        }else{
                            echo "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                        }
                        ?>
                        <!-- <tr>
                            <th>
                                <label class="c-input c-checkbox">
                                    <span class="c-indicator c-indicator-warning"></span><span class="c-input-text" style="font-size: 12px">READ</span> 
                                </label>
                            </th>
                            <th>
                                <label class="c-input c-checkbox">
                                <span class="c-indicator c-indicator-warning"></span><span class="c-input-text" style="font-size: 12px">CREAD</span> 
                                </label>
                            </th>
                            <th>
                                <label class="c-input c-checkbox">
                                    <span class="c-indicator c-indicator-warning"></span><span class="c-input-text" style="font-size: 12px">UPDATE</span> 
                                </label>
                            </th>
                            <th>
                                <label class="c-input c-checkbox">
                                    <span class="c-indicator c-indicator-warning"></span><span class="c-input-text" style="font-size: 12px">DELETE</span> 
                                </label>
                            </th>
                        </tr> -->
                        </table>
                    </div>
                  </div>
 </div>