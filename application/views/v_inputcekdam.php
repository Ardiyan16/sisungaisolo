<html>
<head>
	<title>Data Rekap Cekdam</title>
</head>
<body>
	<center>
		<h1>Data Rekap Cekdam</h1>
		<h3>Tambah Data Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud4/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			
			<tr>
				<td>Id cekdam</td>
				<td><input type="text" name="id_cekdam"></td>
			</tr>
			<tr>
				<td>nama Cekdam</td>
				<td><input type="text" name="nama_cekdam"></td>
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
				<td>Provinsi</td>
				<td>
					<select class="form-control" name="id_prop" id="id_prop" required style="width: 175px;">
					<option value="">-- Pilih Provinsi--</option>
					<?php foreach ($prop as $row):	?>
					<option value="<?php echo $row->id_prop; ?>"><?php echo $row->nama_prop; ?></option>
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
				<td>Identifikasi</td>
				<td><input type="text" name="fv_identifikasi" ?></td>
			</tr>
			<tr>
				<td>Nilai Kondisi</td>
				<td><input type="text" name="fv_n_kondisi" ?></td>
			</tr>
			<tr>
				<td>Kondisi</td>
				<td><input type="text" name="fv_kondisi" ?></td>
			</tr>
			<tr>
				<td>Fungsi</td>
				<td><input type="text" name="fv_fungsi" ?></td>
			</tr>
			<tr>
				<td>Kerja Operasional</td>
				<td><input type="text" name="fv_kerja_op" ?></td>
			</tr>
			<tr>
				<td>Kinerja Operasional</td>
				<td><input type="text" name="fv_kinerja_op" ?></td>
			</tr>
			<tr>
				<td>Tindakan</td>
				<td><input type="text" name="fv_tindakan" ?></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	<center><?php echo anchor('crud4/index','Kembali'); ?></center>
</body>
</html>
