<html>
<head>
	<title>Rekap Data Pintu</title>
</head>
<body>
	<center>
		<h1>Rekap Data Pintu</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($td_pintu as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Pintu</td>
				<td>
					<input type="text" name="fv_idpintu" value="<?php echo $u->fv_idpintu ?>">
				</td>
			</tr>
			<tr>
				<td>ID Sungai</td>
				<td><input type="text" name="idsungai" value="<?php echo $u->idsungai ?>"></td>
			</tr>
			<tr>
				<td>Kode Lokasi</td>
				<td><input type="text" name="fv_kodelokasi" value="<?php echo $u->fv_kodelokasi ?>"></td>
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
				<td>Kabupaten/Kota</td>
				<td><input type="text" name="fv_kabupaten" value="<?php echo $u->fv_kabupaten ?>"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="fv_provinsi" value="<?php echo $u->fv_provinsi ?>"></td>
			</tr>
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="fv_lintang" value="<?php echo $u->fv_lintang ?>"></td>
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="fv_bujur" value="<?php echo $u->fv_bujur ?>"></td>
			</tr>
			<tr>
				<td>Identifikasi</td>
				<td><input type="text" name="fv_identifikasi" value="<?php echo $u->fv_identifikasi ?>"></td>
			</tr>
			<tr>
				<td>Dokumentasi</td>
				<td><input type="text" name="fv_dokumentasi" value="<?php echo $u->fv_dokumentasi ?>"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="fv_keterangan" value="<?php echo $u->fv_keterangan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
	<center><?php echo anchor('crud/index','Kembali'); ?></center>
</body>
</html>