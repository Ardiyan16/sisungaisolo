<html>
<head>
	<title>Rekap Data Tebing</title>
</head>
<body>
	<center>
		<h1>Rekap Data Tebing</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($td_tebing as $u){ ?>
	<form action="<?php echo base_url(). 'crud3/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id Tebing</td>
				<td><input type="text" name="id_tebing" value="<?php echo $u->id_tebing ?>"></td>
			</tr>
			<tr>
				<td>Nama Sungai</td>
				<td>
					<select class="form-control" name="id_sungai" id="id_sungai" required style="width: 175px;">
					<option value="<?php echo $u->id_sungai ?>"><?php echo $u->nama_sungai ?></option>
					<?php foreach ($sungai as $row):	?>
					<option value="<?php echo $row->id_sungai; ?>"><?php echo $row->nama_sungai; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><input type="text" name="desa" value="<?php echo $u->desa ?>"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td>
					<select class="form-control" name="id_kecamatan" id="id_kecamatan" required style="width: 175px;">
					<option value="<?php echo $u->id_kecamatan ?>"><?php echo $u->nama_kecamatan ?></option>
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
					<option value="<?php echo $u->id_kabupaten ?>"><?php echo $u->nama_kabupaten ?></option>
					<?php foreach ($kabupaten as $row):	?>
					<option value="<?php echo $row->id_kabupaten; ?>"><?php echo $row->nama_kabupaten; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Lintang</td>
				<td><input type="text" name="latitude" value="<?php echo $u->latitude ?>"></td>
			</tr>
			<tr>
				<td>Bujur</td>
				<td><input type="text" name="longitude" value="<?php echo $u->longitude ?>"></td>
			</tr>
			<tr>
				<td>Jenis Bangunan</td>
				<td><input type="text" name="jenis_bangunan" value="<?php echo $u->jenis_bangunan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
	<center><?php echo anchor('crud3/index','Kembali'); ?></center>
</body>
</html>