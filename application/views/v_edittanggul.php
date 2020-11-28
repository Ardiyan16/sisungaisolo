<html>
<head>
	<title>Rekap Data Tanggul</title>
</head>
<body>
	<center>
		<h1>Rekap Data Tanggul</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($td_tanggul as $u){ ?>
	<form action="<?php echo base_url(). 'crud1/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Tanggul</td>
				<td>
					<input type="text" name="fn_idtanggul" value="<?php echo $u->fn_idtanggul ?>">
				</td>
			</tr>
			<tr>
				<td>ID Sungai</td>
				<td><input type="text" name="id_sungai" value="<?php echo $u->id_sungai ?>"></td>
			</tr>
			<tr>
				<td>STA</td>
				<td><input type="text" name="fv_STA" value="<?php echo $u->fv_STA ?>"></td>
			</tr>
			<tr>
				<td>Kode Titik Awal</td>
				<td><input type="text" name="fv_kodetitikawal" value="<?php echo $u->fv_kodetitikawal ?>"></td>
			</tr>
			<tr>
				<td>Kode Titik Akhir</td>
				<td><input type="text" name="fv_kodetitikakhir" value="<?php echo $u->fv_kodetitikakhir ?>"></td>
			</tr>
			<tr>
				<td>Panjang</td>
				<td><input type="text" name="fv_panjang" value="<?php echo $u->fv_panjang ?>"></td>
			</tr>
			<tr>
				<td>Panjang Kerusakan</td>
				<td><input type="text" name="fv_panjangkerusakan" value="<?php echo $u->fv_panjangkerusakan ?>"></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><input type="text" name="fv_desa" value="<?php echo $u->fv_desa ?>"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><input type="text" name="fv_kecamatan" value="<?php echo $u->fv_kecamatan ?>"></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><input type="text" name="fv_kabupaten" value="<?php echo $u->fv_kabupaten ?>"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="fv_propinsi" value="<?php echo $u->fv_propinsi ?>"></td>
			</tr>
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="latitude" value="<?php echo $u->latitude ?>"></td>
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="longitude" value="<?php echo $u->longitude ?>"></td>
			</tr>
			<tr>
				<td>Hasil Pengamatan</td>
				<td><input type="text" name="fv_hslpengamatan" value="<?php echo $u->fv_hslpengamatan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
	<center><?php echo anchor('crud1/index','Kembali'); ?></center>
</body>
</html>