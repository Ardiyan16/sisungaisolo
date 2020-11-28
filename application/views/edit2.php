<html>
<head>
	<title>Rekap Data rivertmen</title>
</head>
<body>
	<center>
		<h1>Rekap Data Rivertmen</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($td_rivertmen as $u){ ?>
	<form action="<?php echo base_url(). 'crud2/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>ID Rivertmen</td>
				<td>
					<input type="text" name="fn_id_rivertmen" value="<?php echo $u->fn_id_rivertmen ?>">
				</td>
			</tr>
			<tr>
				<td>STA</td>
				<td><input type="text" name="fv_sta" value="<?php echo $u->fv_sta ?>"></td>
			</tr>
			<tr>
				<td>kode lokasi</td>
				<td><input type="text" name="fv_kodelok" value="<?php echo $u->fv_kodelok ?>"></td>
			</tr>
			<tr>
				<td>Panjang Total</td>
				<td><input type="text" name="fv_pjtotal" value="<?php echo $u->fv_pjtotal ?>"></td>
			</tr>
			<tr>
				<td>panjang kerusakan</td>
				<td><input type="text" name="fv_pjkr" value="<?php echo $u->fv_pjkr ?>"></td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><input type="text" name="ft_desa" value="<?php echo $u->ft_desa ?>"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><input type="text" name="ft_kec" value="<?php echo $u->ft_kec ?>"></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><input type="text" name="ft_kab" value="<?php echo $u->ft_kab ?>"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="ft_prop" value="<?php echo $u->ft_prop ?>"></td>
			</tr>
			<tr>
				<td>lintang</td>
				<td><input type="text" name="fv_lintang" value="<?php echo $u->fv_lintang ?>"></td>
			</tr>
			<tr>
				<td>Bujur</td>
				<td><input type="text" name="fv_bujur" value="<?php echo $u->fv_bujur ?>"></td>
			</tr>
			<tr>
				<td>ID SUNGAI</td>
				<td><input type="text" name="fv_idsungai" value="<?php echo $u->fv_idsungai ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
	<center><?php echo anchor('crud2/index','Kembali'); ?></center>
</body>
</html>