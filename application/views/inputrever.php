<html>
<head>
	<title>Data Rekap Revertmen</title>
</head>
<body>
	<center>
		<h1>Data Rekap Revertmen</h1>
		<h3>Tambah Data Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud2/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID revetmen</td>
				<td><input type="text" name="fn_id_rivertrmen"></td>
			</tr>
			<tr>
				<td>STA</td>
				<td><input type="text" name="fv_sta"></td>
			</tr>
			<tr>
				<td>Kode lokasi</td>
				<td><input type="text" name="fv_kodelok"></td>
			</tr>
			<tr>
				<td>Panjang total</td>
				<td><input type="text" name="fv_pjtotal"></td>
			</tr>
			<tr>
				<td>Panjang kerusakan</td>
				<td><input type="text" name="fv_pjkr"></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><input type="text" name="ft_desa"></td>
			</tr>
			<tr>
				<td>kecamatan</td>
				<td><input type="text" name="ft_kec"></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><input type="text" name="ft_kab"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="ft_prop"></td>
			</tr>
			<tr>
				<td>lintang</td>
				<td><input type="text" name="fv_lintang"></td>
			</tr>
			<tr>
				<td>Bujur</td>
				<td><input type="text" name="fv_bujur"></td>
			</tr>
			<tr>
				<td>ID SUNGAI</td>
				<td><input type="text" name="fv_idsungai"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	<center><?php echo anchor('crud2/index','Kembali'); ?></center>
</body>
</html>