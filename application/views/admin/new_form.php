<!DOCTYPE html>
<html>
<head>
	<title>Add Form</title>
</head>
<body>
	<div class="container">
	<h3>TAMBAH DATA</h3>
	<form action="rekap_data/add2" method="post" enctype="multipart/form-data">
		<div class="form-grup">
			<label>No</label>
			<input type="text" name="id" size="6" class="form-control" placeholder="No" required/>
		</div>
		<div class="form-grup">
			<label>STA</label>
			<input type="text" name="sta" size="6" class="form-control" placeholder="STA" required/>
		</div>
		<div class="form-grup">
			<label>Kode Titik Awal</label>
			<input type="text" name="titikawal" class="form-control" placeholder="Kode Titik Awal" />
		</div>
		<div class="form-grup">
			<label>Kode Titik Akhir</label>
			<input type="text" name="titikakhir" class="form-control" placeholder="Kode Titik Akhir" />
		</div>
		<div class="form-grup">
			<label>Panjang</label>
			<input type="text" name="panjang" class="form-control" placeholder="Panjang" />
		</div>
		<div class="form-grup">
			<label>Panjang Kerusakan</label>
			<input type="text" name="pjngkrskan" class="form-control" placeholder="Panjang Kerusakan" />
		</div>
		<div class="form-grup">
			<label>Desa</label>
			<input type="text" name="desa" class="form-control" placeholder="Desa" />
		</div>
		<div class="form-grup">
			<label>Kecamatan</label>
			<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" />
		</div>
		<div class="form-grup">
			<label>Kabupaten</label>
			<input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" />
		</div>
		<div class="form-grup">
			<label>Provinsi</label>
			<input type="text" name="provinsi" class="form-control" placeholder="Provinsi" />
		</div>
		<div class="form-grup">
			<label>Latitude</label>
			<input type="text" name="latitude" class="form-control" placeholder="Latitude" />
		</div>
		<div class="form-grup">
			<label>Longitude</label>
			<input type="text" name="longitude" class="form-control" placeholder="Longitude" />
		</div>
		<div class="form-grup">
			<label>Hasil Pengamatan</label>
			<input type="text" name="hslpngmtn" class="form-control" placeholder="Hasil Pengamatan" />
		</div>
			
			<div class="form-group"><input type="submit" class="form-control btn-primary" value="Simpan"/></div>
	</form>
</div>
</body>
</html>