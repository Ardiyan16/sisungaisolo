<html>
<head>
	<title>Data Rekap rivertmen</title>
</head>
<body>
	<center><h1>Data Rekap Rivertmen</h1></center>
	<center><?php echo anchor('crud2/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
                 
                  <th>No</th>
     
     			  <th>Id rivertmen</th>

                  <th>STA</th>

                  <th>kode lokasi</th>

                  <th>Panjang Total</th>

                  <th>Panjang kerusakan</th>

                  <th>Desa</th>


                  <th>Kecamatan</th>

                  <th>kabupaten</th>

                  <th>Provinsi</th>

                  <th>lintang</th>

                  <th>Bujur</th>

                  <th>Id sungai</th>

		 		

		 		  
		</tr>
		<?php 
		$no = 1;
		foreach($td_rivertmen as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->fn_id_rivertmen ?></td>
			<td><?php echo $u->fv_sta ?></td>
			<td><?php echo $u->fv_kodelok ?></td>
			<td><?php echo $u->fv_pjtotal ?></td>
			<td><?php echo $u->fv_pjkr ?></td>
			<td><?php echo $u->ft_desa ?></td>
			<td><?php echo $u->ft_kec ?></td>
			<td><?php echo $u->ft_kab ?></td>
			<td><?php echo $u->ft_prop ?></td>
			<td><?php echo $u->fv_lintang ?></td>
			<td><?php echo $u->fv_bujur ?></td>
			<td><?php echo $u->fv_idsungai ?></td>
			
			<td>
			      <?php echo anchor('crud2/edit/'.$u->fn_id_rivertmen,'Edit'); ?>
                              <?php echo anchor('crud2/hapus/'.$u->fn_id_rivertmen,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<center><?php echo anchor('rekap_data/rekap_rever','Kembali'); ?></center>
</body>
</html>