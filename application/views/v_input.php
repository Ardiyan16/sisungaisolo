<html>
<head>
	<title>Data Rekap Pintu</title>
</head>
<body>
	<center>
		<h1>Data Rekap Pintu</h1>
		<h3>Tambah Data Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Pintu</td>
				<td><input type="text" name="fv_idpintu"></td>
			</tr>
			<tr>
				<td>ID Sungai</td>
				<td><input type="text" name="idsungai"></td>
			</tr>
			<tr>
				<td>Kode Lokasi</td>
				<td><input type="text" name="fv_kodelokasi"></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><input type="text" name="fv_desa"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><input type="text" name="fv_kecamatan"></td>
			</tr>
			<tr>
				<td>Kabupaten/Kota</td>
				<td><input type="text" name="fv_kabupaten"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="fv_provinsi"></td>
			</tr>
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="fv_lintang"></td>
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="fv_bujur"></td>
			</tr>
			<tr>
				<td>Identifikasi</td>
				<td><input type="text" name="fv_identifikasi"></td>
			</tr>
			<tr>
				<td>Dokumentasi</td>
				<td><input type="text" name="fv_dokumentasi"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="fv_keterangan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	<center><?php echo anchor('crud/index','Kembali'); ?></center>
</body>
</html>