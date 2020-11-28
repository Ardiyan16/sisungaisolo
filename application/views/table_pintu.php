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
		foreach ($data as $d) { ?>
			<tr>
				<th>No </th>
				<th>Kode Lokasi</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Provinsi</th>
				<th>Lintang</th>
				<th>Bujur</th>

			</tr>
			<tr>
				<td rowspan="5"><?= $no ?></td>
				<td><?= $d->fv_kodelokasi ? $d->fv_kodelokasi : '-' ?></td>
				<td><?= $d->fv_desa ? $d->fv_desa : '-' ?></td>
				<td><?= $d->fv_kecamatan ? $d->fv_kecamatan : '-' ?></td>
				<td><?= $d->fv_kabupaten ? $d->fv_kabupaten : '-' ?></td>
				<td><?= $d->fv_provinsi ? $d->fv_provinsi : '-' ?></td>
				<td><?= $d->fv_lintang ? $d->fv_lintang : '-' ?></td>
				<td><?= $d->fv_bujur ? $d->fv_bujur : '-' ?></td>
			</tr>
			<tr>
				<th>Tahun Inspeksi</th>
				<th>Bulan Inspeksi</th>
				<th>Jenis Bangunan</th>
				<th>Bagian Bangunan</th>
				<th>Kerusakan</th>
				<th>Usulan Perbaikan</th>
				<th>Panjang</th>

			</tr>
			<?php
			if ($d->kor != null) {
				foreach (@$d->kor as $r) { ?>
					<tr>
						<td><?= $r->tahun ? $r->tahun : '-' ?></td>
						<td><?= $r->bulan ? $r->bulan : '-' ?></td>
						<td><?= $r->tjenis_bgn ? $r->tjenis_bgn : '-' ?></td>
						<td><?= $r->tbagian_bgn ? $r->tbagian_bgn : '-' ?></td>
						<td><?= $r->tkerusakan ? $r->tkerusakan : '-' ?></td>
						<td><?= $r->tusulan_pbk ? $r->tusulan_pbk : '-' ?></td>
						<td><?= $r->tpanjang ? $r->tpanjang : '-' ?></td>


					</tr>
				<?php }
			} else { ?>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
			<?php } ?>
			<tr>
				<th>Lebar</th>
				<th>Tinggi</th>
				<th>Volume</th>
				<th>Keterangan</th>
				<th>Nilai Kinerja</th>
				<th>Kinerja</th>
				<th>Tindakan</th>
			</tr>
			<?php
			if ($d->kor != null) {
				foreach (@$d->kor as $r) { ?>
					<tr>
						<td><?= $r->tlebar ? $r->tlebar : '-' ?></td>
						<td><?= $r->ttinggi ? $r->ttinggi : '-' ?></td>
						<td><?= $r->tvolume ? $r->tvolume : '-' ?></td>
						<td><?= $r->tket ? $r->tket : '-' ?></td>
						<td><?= $r->tn_kinerja ? $r->tn_kinerja : '-' ?></td>
						<td><?= $r->tkinerja ? $r->tkinerja : '-' ?></td>
						<td><?= $r->ttindakan ? $r->ttindakan : '-' ?></td>
					</tr>
				<?php }
			} else { ?>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
			<?php } ?>
		<?php $no++;
		} ?>

	</table>



</body>

</html>