<html>
<head>
	<title>Data Rekap Tanggul</title>
</head>
<body>
	<center>
		<h1>Data Rekap Tanggul</h1>
		<h3>Tambah Data Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud1/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Tanggul</td>
				<td><input type="text" name="fn_idtanggul"></td>
			</tr>
			<tr>
				<td>ID Sungai</td>
				<td><input type="text" name="id_sungai"></td>
			</tr>
			<tr>
				<td>STA</td>
				<td><input type="text" name="fv_STA"></td>
			</tr>
			<tr>
				<td>Kode Titik Awal</td>
				<td><input type="text" name="fv_kodetitikawal"></td>
			</tr>
			<tr>
				<td>Kode Titik Akhir</td>
				<td><input type="text" name="fv_kodetitikakhir"></td>
			</tr>
			<tr>
				<td>Panjang</td>
				<td><input type="text" name="fv_panjang"></td>
			</tr>
			<tr>
				<td>Panjang Kerusakan</td>
				<td><input type="text" name="fv_panjangkerusakan"></td>
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
				<td>Kabupaten</td>
				<td><input type="text" name="fv_kabupaten"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="fv_propinsi"></td>
			</tr>
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="latitude"></td>
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="longitude"></td>
			</tr>
			<tr>
				<td>Hasil Pengamatan</td>
				<td><input type="text" name="fv_hslpengamatan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	<center><?php echo anchor('crud1/index','Kembali'); ?></center>
</body>
</html>