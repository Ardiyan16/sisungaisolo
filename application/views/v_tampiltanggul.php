<html>

<head>
	<title>Data Rekap Tanggul</title>
</head>

<body>
	<center>
		<h1>Data Rekap Tanggul</h1>
	</center>
	<center><?php echo anchor('crud1/tambah', 'Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>

			<th>No</th>

			<th>Id Tanggul</th>

			<th>Id Sungai</th>

			<th>STA</th>

			<th>Kode Titik Awal</th>

			<th>Kode Titik Akhir</th>

			<th>Panjang</th>

			<th>Panjang Kerusakan</th>

			<th>Desa</th>

			<th>Kecamatan</th>

			<th>Kabupaten</th>

			<th>Provinsi</th>

			<th>Latitude</th>

			<th>Longitude</th>

			<th>Hasil Pengamatan</th>
		</tr>
		<?php
		$no = 1;
		foreach ($td_tanggul as $u) {
		?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->fn_idtanggul ?></td>
				<td><?php echo $u->id_sungai ?></td>
				<td><?php echo $u->fv_STA ?></td>
				<td><?php echo $u->fv_kodetitikawal ?></td>
				<td><?php echo $u->fv_kodetitikakhir ?></td>
				<td><?php echo $u->fv_panjang ?></td>
				<td><?php echo $u->fv_panjangkerusakan ?></td>
				<td><?php echo $u->fv_desa ?></td>
				<td><?php echo $u->fv_kecamatan ?></td>
				<td><?php echo $u->fv_kabupaten ?></td>
				<td><?php echo $u->fv_propinsi ?></td>
				<td><?php echo $u->latitude ?></td>
				<td><?php echo $u->longitude ?></td>
				<td><?php echo $u->fv_hslpengamatan ?></td>


				<td>
					<?php echo anchor('crud1/edit/' . $u->fn_idtanggul, 'Edit'); ?>
					<?php echo anchor('crud1/hapus/' . $u->fn_idtanggul, 'Hapus'); ?>
				</td>
			</tr>
		<?php } ?>
	</table>
	<center><?php echo anchor('rekap_data/rekap_tanggul', 'Kembali'); ?></center>
</body>

</html>