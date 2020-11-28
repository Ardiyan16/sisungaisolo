<html>
<head>
	<title>Data Rekap Cekdam</title>
</head>
<body>
	<center>
		<h1>Data Rekap Cekdam</h1>
		<h3>EditData</h3>
	</center>
	<?php foreach($cekdam as $u){ ?>
	<form action="<?php echo base_url(). 'crud4/update'; ?>" method="post">
		<table style="margin:20px auto;">
			
			<tr>
				<td>Id cekdam</td>
				<td><input type="text" name="id_cekdam" value="<?php echo $u-> id_cekdam ?>"></td>
			</tr>
			<tr>
				<td>nama Cekdam</td>
				<td><input type="text" name="nama_cekdam" value="<?php echo $u-> nama_cekdam ?>"></td>
			</tr>
			<tr>
				<td>Nama Sungai</td>
				<td>
					<select class="form-control" name="id_sungai" id="id_sungai" required style="width: 175px;">
					<option value="<?php echo $u-> id_sungai ?>"><?php echo $u-> nama_sungai ?></option>
					<?php foreach ($sungai as $row):	?>
					<option value="<?php echo $row->id_sungai; ?>"><?php echo $row->nama_sungai; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td>
					<select class="form-control" name="id_kecamatan" id="id_kecamatan" required style="width: 175px;">
					<option value="<?php echo $u-> id_kecamatan ?>"><?php echo $u-> nama_kecamatan ?></option>
					<?php foreach ($kecamatan as $row):	?>
					<option value="<?php echo $row->id_kecamatan; ?>"><?php echo $row->nama_kecamatan; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td>
					<select class="form-control" name="id_kabupaten" id="id_kabupaten" required style="width: 175px;">
					<option value="<?php echo $u-> id_kabupaten ?>"><?php echo $u-> nama_kabupaten ?></option>
					<?php foreach ($kabupaten as $row):	?>
					<option value="<?php echo $row->id_kabupaten; ?>"><?php echo $row->nama_kabupaten; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td>
					<select class="form-control" name="id_prop" id="id_prop" required style="width: 175px;">
					<option value="<?php echo $u-> id_prop ?>"><?php echo $u-> nama_prop ?></option>
					<?php foreach ($prop as $row):	?>
					<option value="<?php echo $row->id_prop; ?>"><?php echo $row->nama_prop; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Lintang</td>
				<td><input type="text" name="latitude" value="<?php echo $u-> latitude ?>"></td>
			</tr>
			<tr>
				<td>Bujur</td>
				<td><input type="text" name="longitude" value="<?php echo $u-> longitude ?>"></td>
			</tr>
			<tr>
				<td>Identifikasi</td>
				<td><input type="text" name="fv_identifikasi" value="<?php echo $u-> fv_identifikasi ?>"></td>
			</tr>
			<tr>
				<td>Nilai Kondisi</td>
				<td><input type="text" name="fv_n_kondisi" value="<?php echo $u-> fv_n_kondisi ?>"></td>
			</tr>
			<tr>
				<td>Kondisi</td>
				<td><input type="text" name="fv_kondisi" value="<?php echo $u-> fv_kondisi ?>"></td>
			</tr>
			<tr>
				<td>Fungsi</td>
				<td><input type="text" name="fv_fungsi" value="<?php echo $u-> fv_fungsi ?>"></td>
			</tr>
			<tr>
				<td>Kerja Operasional</td>
				<td><input type="text" name="fv_kerja_op" value="<?php echo $u-> fv_kerja_op ?>"></td>
			</tr>
			<tr>
				<td>Kinerja Operasional</td>
				<td><input type="text" name="fv_kinerja_op" value="<?php echo $u-> fv_kinerja_op ?>"></td>
			</tr>
			<tr>
				<td>Tindakan</td>
				<td><input type="text" name="fv_tindakan" value="<?php echo $u-> fv_tindakan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	<?php } ?>
	<center><?php echo anchor('crud4/index','Kembali'); ?></center>
</body>
</html>
