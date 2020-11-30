	<html>
<head>
	<title>Data Rekap Tebing</title>
</head>
<body>
	<center><h1>Data Rekap Tebing</h1></center>
	<center><?php echo anchor('crud3/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
                 
                  <th>No</th>
                  <!--<th>Id Tebing</th>-->
                  <th>Nama Sungai</th>
                  <th>Desa</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Kabupaten</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
     			
				<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($td_tebing as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<!--<td><?php echo $u->id_tebing ?> </td>-->
	        <td><?php echo $u->nama_sungai ?> </td>
	        <td><?php echo $u->desa ?> </td>
	        <td><?php echo $u->nama_kecamatan ?> </td>
	        <td><?php echo $u->nama_kabupaten ?> </td>
	        <td><?php echo $u->latitude ?> </td>
	        <td><?php echo $u->longitude ?> </td>
	        <!--<td><?php echo $u->jenis_bangunan ?> </td>-->
			<td>
			      <?php echo anchor('crud3/edit/'.$u->id_tebing,'Edit'); ?>
                              <?php echo anchor('crud3/hapus/'.$u->id_tebing,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<center><?php echo anchor('rekap_data/rekap_tebing','Kembali'); ?></center>
</body>
</html>