<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>

	<table border="1">

		<?php $no = 0;
		foreach ($data as $d) {
			$no++; ?>
			<tr>
				<th><?php if ($no == 1) {
						echo 'No';
					} ?> </th>
				<th>Nama Sungai</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Lintang</th>
				<th>Bujur</th>

			</tr>
			<tr>
				<td rowspan="5"><?= $no ?></td>
				<td><?= $d->nama_sungai ? $d->nama_sungai : '-' ?></td>
				<td><?= $d->desa ? $d->desa : '-' ?></td>
				<td><?= $d->nama_kecamatan ? $d->nama_kecamatan : '-' ?></td>
				<td><?= $d->nama_kabupaten ? $d->nama_kabupaten : '-' ?></td>
				<td><?= $d->latitude ? $d->latitude : '-' ?></td>
				<td><?= $d->longitude ? $d->longitude : '-' ?></td>
			</tr>
			<tr>
				<th>Tahun Inspeksi</th>
				<th>Bulan Inspeksi</th>
				<th>Jenis Bangunan</th>
				<th>Bagian Bangunan</th>
				<th>Kerusakan</th>
				<th>Usulan Perbaikan</th>

			</tr>
			<tr>
				<td><?= $d->tahun ? $d->tahun : '-' ?></td>
				<td><?= $d->bulan ? $d->bulan : '-' ?></td>
				<td><?= $d->tjenis_bgn ? $d->tjenis_bgn : '-' ?></td>
				<td><?= $d->tbagian_bgn ? $d->tbagian_bgn : '-' ?></td>
				<td><?= $d->tkerusakan ? $d->tkerusakan : '-' ?></td>
				<td><?= $d->tusulan_pbk ? $d->tusulan_pbk : '-' ?></td>


			</tr>
			<tr>
				<th>Panjang</th>
				<th>Lebar</th>
				<th>Tinggi</th>
				<th>Volume</th>
				<th>Keterangan</th>
				<th>Nilai Kinerja</th>
				<th>Kinerja</th>

			</tr>
			<tr>
				<td><?= $d->tpanjang ? $d->tpanjang : '-' ?></td>
				<td><?= $d->tlebar ? $d->tlebar : '-' ?></td>
				<td><?= $d->ttinggi ? $d->ttinggi : '-' ?></td>
				<td><?= $d->tvolume ? $d->tvolume : '-' ?></td>

				<td><?= $d->tket ? $d->tket : '-' ?></td>
				<td><?= $d->tn_kinerja ? $d->tn_kinerja : '-' ?></td>
				<td><?= $d->tkinerja ? $d->tkinerja : '-' ?></td>
			</tr>
		<?php  } ?>

	</table>



</body>

</html>