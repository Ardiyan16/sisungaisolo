<html>
<head>
	<title>Data Rekap Tebing</title>
</head>
<body>
	<center>
		<h1>Data Rekap Tebing</h1>
		<h3>Tambah Data Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud3/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id Tebing</td>
				<td><input type="text" name="id_tebing"></td>
			</tr>
			<tr>
				<td>Nama Sungai</td>
				<td>
					<select class="form-control" name="id_sungai" id="id_sungai" required style="width: 175px;">
					<option value="">-- Pilih Sungai --</option>
					<?php foreach ($sungai as $row):	?>
					<option value="<?php echo $row->id_sungai; ?>"><?php echo $row->nama_sungai; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Desa</td>
				<td><input type="text" name="desa"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td>
					<select class="form-control" name="id_kecamatan" id="id_kecamatan" required style="width: 175px;">
					<option value="">-- Pilih Kecamatan--</option>
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
					<option value="">-- Pilih Kabupaten--</option>
					<?php foreach ($kabupaten as $row):	?>
					<option value="<?php echo $row->id_kabupaten; ?>"><?php echo $row->nama_kabupaten; ?></option>
					<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Lintang</td>
				<td><input type="text" name="latitude"></td>
			</tr>
			<tr>
				<td>Bujur</td>
				<td><input type="text" name="longitude"></td>
			</tr>
			<tr>
				<td>Jenis Bangunan</td>
				<td><input type="text" name="jenis_bangunan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	<center><?php echo anchor('crud3/index','Kembali'); ?></center>
</body>
</html>
