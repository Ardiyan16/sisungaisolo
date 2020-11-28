<html>
<head>
	<title>Data Rekap Cekdam</title>
</head>
<body>
	<center><h1>Data Rekap Cekdam</h1></center>
	<center><?php echo anchor('crud4/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
                 
                  <th>No</th>
                  <!--<th>Id Tebing</th>-->
                  <th>Id Cekdam</th>
                  <th>Nama Cekdam</th>
                  <th>Sungai</th>
                  <th>Kecamatan</th>
                  <th>Kabupaten;  </th>
                  <th>Prop</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Identifikasi</th>                  
                  <th>Nilai Kondisi</th>
                  <th>Kondisi</th>
                  <th>Fungsi</th>
                  <th>Kerja Op</th>
                  <th>Kinerja Op  </th>
                  <th>Tindakan</th>     			
				<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($cekdam as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<!--<td><?php echo $u->id_tebing ?> </td>-->

			<td><?php echo $u->id_cekdam ?></td>
			<td><?php echo $u->nama_cekdam ?></td>
			<td><?php echo $u->nama_sungai ?></td>
			<td><?php echo $u->nama_kecamatan ?></td>
			<td><?php echo $u->nama_kabupaten ?></td>
			<td><?php echo $u->nama_prop ?></td>
			<td><?php echo $u->latitude ?></td>
			<td><?php echo $u->longitude ?></td>
			<td><?php echo $u->fv_identifikasi ?></td>
			<td><?php echo $u->fv_n_kondisi ?></td>
			<td><?php echo $u->fv_kondisi ?></td>
			<td><?php echo $u->fv_fungsi ?></td>
			<td><?php echo $u->fv_kerja_op ?></td>
			<td><?php echo $u->fv_kinerja_op ?></td>
			<td><?php echo $u->fv_tindakan ?></td>
	        <!--<td><?php echo $u->jenis_bangunan ?> </td>-->
			<td>
			      <?php echo anchor('crud4/edit/'.$u->id_cekdam,'Edit'); ?>
                              <?php echo anchor('crud4/hapus/'.$u->id_cekdam,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<center><?php echo anchor('rekap_data/rekap_cekdam','Kembali'); ?></center>
</body>
</html>