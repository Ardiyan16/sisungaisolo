 <?php
 
 header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate"); 
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
 header("content-disposition: attachment;filename=rekap_pemeriksaan_berkala_2019".date('dmY').".xls");
 
 ?>
 
 <table class="table table-hover" border="1">
  <thead>
    <th>No</th>
    <th>Nama Sungai </th>
    <th>Orde Sungai </th>
    <th>Panjang Sungai </th>
    <th>STA</th>

    <th>Kode Titik Awal</th>    
    <th>Kode Titik Akhir</th>
    <th>Panjang</th>
    <th>Panjang Kerusakan</th>
    <th>Desa</th>

    <th>Kecamatan  </th>
    <th>Kabupaten  </th>
    <th>Provinsi  </th>
    <th>Latitude Awal  </th>
    <th>Longitude Awal  </th>

    <th>Latitude Akhir  </th>
    <th>Longitude Akhir  </th>
    <th>Identifikasi  </th>
    <th>Kondisi  </th>
    <th>Fungsi  </th>                
    <th>Kinerja  </th>
    <th>Operasi (Rp)  </th>
    <th>Rutin (Rp)  </th>
    <th>Berkala (Rp)  </th>
    <th>Total (Rp)  </th>
    <th>Rencana  </th>
    <th>Nilai Kondisi Kinerja (Baik) </th>
    <th>Panjang (Baik)</th>
    <th>Nilai Kondisi Kinerja (Cukup Baik) </th>
    <th>Panjang (Cukup Baik)</th>
    <th>Nilai Kondisi Kinerja (Rusak) </th>
    <th>Panjang (Rusak)</th>
    <th>Nilai Kondisi Fisik (Sangat Baik) </th>
    <th>Panjang (sangat Baik)</th>
    <th>Nilai Kondisi Fisik (Baik) </th>
    <th>Panjang (Baik)</th>
    <th>Nilai Kondisi Fisik (Cukup Baik) </th>
    <th>Panjang (Cukup Baik)</th>
    <th>Nilai Kondisi Fisik (Jelek) </th>
    <th>Panjang (Jelek)</th>
    <th>Nilai Kondisi Fungsi (Sangat Baik) </th>
    <th>Panjang (sangat Baik)</th>
    <th>Nilai Kondisi Fungsi (Baik) </th>
    <th>Panjang (Baik)</th>
    <th>Nilai Kondisi Fungsi (Cukup Baik) </th>
    <th>Panjang (Cukup Baik)</th>
    <th>Nilai Kondisi Fungsi (Jelek) </th>
    <th>Panjang (Jelek)</th>
    <th>Tindak Lanjut  </th>
    <th>Letak  </th>
    <th width="100px">Dokumentasi  </th>
    <th width="100px">Dokumentasi  </th>
  </thead>
  <tbody>
    <?php 
    if($history==true){
     $no=1;
     foreach($history as $orde){?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $orde->nama_sungai ?></td>
        <td><?php echo $orde->orde_sungai ?></td>
        <td><?php echo str_replace(",",".",$orde->panjang_sungai); ?></td>
        <td><?php echo $orde->STA;     ?></td>
        <td><?php echo $orde->kodetitikawal;   ?></td>

        <td><?php echo $orde->kodetitikakhir;?></td>
        <td><?php echo $orde->panjang;?></td>
        <td><?php echo $orde->panjangkerusakan;?></td>
        <td><?php echo $orde->desa;?></td>
        <td><?php echo $orde->nama_kecamatan;?></td>

        <td><?php echo $orde->nama_kabupaten;?></td>
        <td><?php echo $orde->nama_prop;?></td>
        <td><?php echo $orde->latitude_awal;?></td>
        <td><?php echo $orde->longitude_awal;?></td>
        <td><?php echo $orde->latitude_akhir;?></td>

        <td><?php echo $orde->longitude_akhir;?></td>
        <td><?php echo $orde->identifikasi;?></td>
        <td><?php echo $orde->kondisi;?></td>
        <td><?php echo $orde->fungsi;?></td>
        <td><?php echo $orde->kinerja;?></td>

        <td><?php echo $orde->operasi_rp;?></td>
        <td><?php echo $orde->rutin_rp;?></td>
        <td><?php echo $orde->berkala_rp;?></td>
        <td><?php echo $orde->total_rp;?></td>
        <td><?php echo $orde->rencana;?></td>

        <td><?php echo $orde->b_kondisi_kinerja;?></td>
        <td><?php echo $orde->b_panjang;?></td>
        <td><?php echo $orde->cb_kondisi_kinerja;?></td>
        <td><?php echo $orde->cb_panjang;?></td>

        <td><?php echo $orde->r_kondisi_kinerja;?></td>
        <td><?php echo $orde->r_panjang;?></td>
        <td><?php echo $orde->sb_fisik;?></td>
        <td><?php echo $orde->sb_fisik_p;?></td>
        <td><?php echo $orde->b_fisik;?></td>
        <td><?php echo $orde->b_fisik_p;?></td>
        <td><?php echo $orde->cb_fisik;?></td>
        <td><?php echo $orde->cb_fisik_p;?></td>
        <td><?php echo $orde->j_fisik;?></td>
        <td><?php echo $orde->j_fisik_p;?></td>
        <td><?php echo $orde->sb_fungsi;?></td>
        <td><?php echo $orde->sb_fungsi_p;?></td>
        <td><?php echo $orde->b_fungsi;?></td>
        <td><?php echo $orde->b_fungsi_p;?></td>
        <td><?php echo $orde->cb_fungsi;?></td>
        <td><?php echo $orde->cb_fungsi_p;?></td>
        <td><?php echo $orde->j_fungsi;?></td>
        <td><?php echo $orde->j_fungsi_p;?></td>
        <td><?php echo $orde->tindaklanjut;?></td>
        <td><?php echo $orde->letak;?></td>
        <td><img src="<?php echo base_url()?>assets/images/tindaklanjut/<?php echo $orde->dokumentasi?>" width="80px">;</td>
        <?php if ($orde->dokumentasi2==""){?>
            <td></td>
        <?php } else {?>
        <td><img src="<?php echo base_url()?>assets/images/tindaklanjut/<?php echo $orde->dokumentasi2?>" width="80px">;</td>
        <?php } ?>
      </tr>

    <?php }}else{?> 
      <div class='alert alert-danger'>Data Tidak Ditemukan</div>
    <?php }?>  
  </tbody>
</table>