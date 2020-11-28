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
                                        <td scope="row">Kode Lokasi</td>
                                        <td>:</td>
                                        <td id="nama_bendung"><?php echo $data_pintu->fv_kodelokasi ?></td>
                                    </tr>
                                  
                                  
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Desa</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_desa ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Kecamatan</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_kecamatan ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Kabupaten</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_kabupaten ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Provinsi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_provinsi ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Latitude</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_lintang ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Longitude</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_bujur ?></td>
                                    </tr>
                                    <!-- <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Identifikasi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_identifikasi ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Dokumentasi</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_dokumentasi ?></td>
                                    </tr>
                                    <tr style="background-color: #FFF;color: #000;">
                                        <td scope="row">Keterangan</td>
                                        <td>:</td>
                                        <td id="desa_bendung"><?php echo $data_pintu->fv_keterangan ?></td>
                                    </tr> -->
                                </tbody>
                    </table>
                    <div style="overflow-x: scroll;">
                    <table class="table table-hover table-striped table-bordered" id="tabel">
                        <tr>
                            <th rowspan="2" style="font-size: 12px">NO</th>
                            <th rowspan="2" style="font-size: 12px">Tahun Inspeksi</th>
                            <th rowspan="2" style="font-size: 12px">Bulan Inspeksi</th>
                            <th rowspan="2" style="font-size: 12px">Jenis Bangunan</th>
                            <th rowspan="2" style="font-size: 12px">Bagian Bangunan</th>
                            <th rowspan="2" style="font-size: 12px">Kerusakan</th>
                            <th colspan="3" style="font-size: 12px">Dimensi Kerusakan</th>
                            <th rowspan="2" style="font-size: 12px">Volume Kerusakan</th>
                            <th rowspan="2" style="font-size: 12px">Keterangan</th>
                            <th rowspan="2" style="font-size: 12px">Nilai Kinerja</th>
                            <th rowspan="2" style="font-size: 12px">Kinerja</th>
                            <th rowspan="2" style="font-size: 12px">Usulan Tindakan</th>
                            <th rowspan="2" style="font-size: 12px">Pekerjaan Perbaikan</th>
                            <!-- <th colspan="4" style="font-size: 12px">PRIVILLAGE</th> -->
                        </tr>
                         <tr>
                            <th>
                                <label class="c-input c-checkbox">
                                    <span class="c-indicator c-indicator-warning"></span><span class="c-input-text" style="font-size: 12px">Panjang</span> 
                                </label>
                            </th>
                            <th>
                                <label class="c-input c-checkbox">
                                <span class="c-indicator c-indicator-warning"></span><span class="c-input-text" style="font-size: 12px">Lebar</span> 
                                </label>
                            </th>
                            <th>
                                <label class="c-input c-checkbox">
                                    <span class="c-indicator c-indicator-warning"></span><span class="c-input-text" style="font-size: 12px">Tinggi</span> 
                                </label>
                            </th>
                        </tr>
                        <?php 
                        if($detail_pintu==true){
                        $no=1;
                        foreach($detail_pintu as $cekdam){
                        ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $cekdam->tahun ?></td>
                        <td><?php echo $cekdam->bulan ?></td>
                        <td><?php echo $cekdam->tjenis_bgn ?></td>
                        <td><?php echo $cekdam->tbagian_bgn ?></td>
                        <td><?php echo $cekdam->tkerusakan ?></td>
                        <td><?php echo $cekdam->tpanjang ?></td>
                        <td><?php echo $cekdam->tlebar ?></td>
                        <td><?php echo $cekdam->ttinggi ?></td>
                        <td><?php echo $cekdam->tvolume ?></td>
                        <td><?php echo $cekdam->tket ?></td>
                        <td><?php echo $cekdam->tn_kinerja ?></td>
                        <td><?php echo $cekdam->tkinerja ?></td>
                        <td><?php echo $cekdam->tusulan_pbk ?></td>
                        <td><?php echo $cekdam->ttindakan ?></td>
                        </tr>
                        <?php $no++; } 
                        
                        }else{
                            echo "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                        }
                        ?>
                    </table>
                    </div>
                    </div>
                  
                  </div>
 </div>