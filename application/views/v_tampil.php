<html>
<head>
	<title>Data Rekap Pintu</title>
</head>
<body>
	<center><h1>Data Rekap Pintu</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
                 
                  <th>No</th>
     <th>Id Pintu</th>

                  <th>Id Sungai</th>


             


                  <th>Kode Lokasi</th>

                  <th>Desa</th>

                  <th>Kecamatan</th>

                  <th>Kabupaten/Kota</th>

                  <th>Provinsi</th>

                  <th>Latitude</th>

                  <th>Longitude</th>

                  <th>Identifikasi</th>

                  <th>Dokumentasi</th>

                  <th>Keterangan</th>

				<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($td_pintu as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->fv_idpintu ?></td>
			<td><?php echo $u->idsungai ?></td>
			<td><?php echo $u->fv_kodelokasi ?></td>
			<td><?php echo $u->fv_desa ?></td>
			<td><?php echo $u->fv_kecamatan ?></td>
			<td><?php echo $u->fv_kabupaten ?></td>
			<td><?php echo $u->fv_provinsi ?></td>
			<td><?php echo $u->fv_lintang ?></td>
			<td><?php echo $u->fv_bujur ?></td>
			<td><?php echo $u->fv_identifikasi ?></td>
			<td><?php echo $u->fv_dokumentasi ?></td>
			<td><?php echo $u->fv_keterangan ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->fv_idpintu,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->fv_idpintu,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<center><?php echo anchor('rekap_data/rekap_pintu','Kembali'); ?></center>
</body>
</html>