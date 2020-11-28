<script src="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.css" rel="stylesheet" />
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-question-circle"></i>&nbsp;Data Teknis</a></li>
    <!-- <li role="presentation" class=""><a href="#home2" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-question-circle"></i>&nbsp;Detail Peta Tanggul</a></li> -->

</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home1" style="background: #fff;">
     <table class="table table-hover">
        <tbody>

            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">STA</td>
                <td>:</td>
                <td id="nama_bendung"><?php echo $data_tanggul->fv_STA ?></td>
            </tr>

            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Kode Titik Awal</td>
                <td>:</td>
                <td id="tahun_data_bendung"><?php echo $data_tanggul->fv_kodetitikawal ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Kode Titik Akhir</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_kodetitikakhir ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Panjang</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_panjang ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Panjang Total Kerusakan</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_panjangkerusakan ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Desa</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_desa ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Kecamatan</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_kecamatan ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Kabupaten</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_kabupaten ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Provinsi</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_propinsi ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Latitude</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->latitude ?></td>
            </tr>
            <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Longitude</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->longitude ?></td>
            </tr>
            <!-- <tr style="background-color: #FFF;color: #000;">
                <td scope="row">Hasil Pengamatan</td>
                <td>:</td>
                <td id="desa_bendung"><?php echo $data_tanggul->fv_hslpengamatan ?></td>
            </tr> -->
        </tbody>
    </table>
    <div style=" overflow-x: scroll;">
                     <!-- <?php
                     if($detail_tanggul==true){
                      $no=1;
                      foreach ($detail_tanggul as $tampil){
                      
                      $this->table->add_row($no,$tampil->tanggal_inspeksi,$tampil->tjenis_bgn,$tampil->tbagian_bgn,$tampil->tkerusakan,$tampil->tusulan_pbk,$tampil->tvolume,$tampil->tpanjang,$tampil->tlebar,$tampil->ttinggi,$tampil->tket,$tampil->tn_kinerja,$tampil->tkinerja,$tampil->ttindakan
                    );
                      $no++;
                      }
                      $tabel=$this->table->generate();
                      echo $tabel;
                     }else {
                        echo "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
                     }
                    ?> -->
                     <table class="table table-hover table-striped table-bordered" id="tabel">
                        <tr>
                            <th rowspan="2" style="font-size: 12px">NO</th>
                            <th rowspan="2" style="font-size: 12px">Tanggal Inspeksi</th>
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
                        if($detail_tanggul==true){
                        $no=1;
                        foreach($detail_tanggul as $cekdam){
                        ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $cekdam->tanggal_inspeksi ?></td>
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
<!-- <div role="tabpanel" class="tab-pane" id="home2" style="background: #fff;">
    <div id="mapid" style="height: 200px;"></div>
</div> -->
</div>
</div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiaXNrYW5kYXJibHVlIiwiYSI6ImNpbHIxMXA3ejAwNWl2Zmx5aXl2MzRhbG4ifQ.qsQjbbm1A71QzVg8OcR7rQ';
    var mapid = new mapboxgl.Map({
    container: 'mapid',
    style: 'mapbox://styles/mapbox/streets-v8',
    center: [ 110.84393439, -7.576951248 ],
    zoom: 10,
    minZoom: 7,
    maxZoom: 18,
 //   maxBounds: bounds
});
</script>