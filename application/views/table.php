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

		<?php $no = 1;
		foreach ($data as $d) { ?>
			<tr>
				<th>No </th>
				<th>STA</th>
				<th>Kode Titik Awal</th>
				<th>Kode Titik Akhir</th>
				<th>Panjang (Km)</th>
				<th>Panjang Kerusakan (Km)</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Provinsi</th>
				<th>Latitude</th>
				<th>Longitude</th>

			</tr>
			<tr>
				<td rowspan="5"><?= $no ?></td>
				<td><?= $d->fv_STA ? $d->fv_STA : '-' ?></td>
				<td><?= $d->fv_kodetitikawal ? $d->fv_kodetitikawal : '-' ?></td>
				<td><?= $d->fv_kodetitikakhir ? $d->fv_kodetitikakhir : '-' ?></td>
				<td><?= $d->fv_panjang ? $d->fv_panjang : '-' ?></td>
				<td><?= $d->fv_panjangkerusakan ? $d->fv_panjangkerusakan : '-' ?></td>
				<td><?= $d->fv_desa ? $d->fv_desa : '-' ?></td>
				<td><?= $d->fv_kecamatan ? $d->fv_kecamatan : '-' ?></td>
				<td><?= $d->fv_kabupaten ? $d->fv_kabupaten : '-' ?></td>
				<td><?= $d->fv_propinsi ? $d->fv_propinsi : '-' ?></td>
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
				<th>Panjang</th>
				<th>Lebar</th>
				<th>Tinggi</th>
				<th>Volume</th>
				<th>Keterangan</th>

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
						<td><?= $r->tlebar ? $r->tlebar : '-' ?></td>
						<td><?= $r->ttinggi ? $r->ttinggi : '-' ?></td>
						<td><?= $r->tvolume ? $r->tvolume : '-' ?></td>
						<td><?= $r->tket ? $r->tket : '-' ?></td>
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
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
			<?php } ?>
			<tr>
				<th>Nilai Kinerja</th>
				<th>Kinerja</th>
				<th>Tindakan</th>
			</tr>
			<?php
			if ($d->kor != null) {
				foreach (@$d->kor as $r) { ?>
					<tr>
						<td><?= $r->tn_kinerja ? $r->tn_kinerja : '-' ?></td>
						<td><?= $r->tkinerja ? $r->tkinerja : '-' ?></td>
						<td><?= $r->ttindakan ? $r->ttindakan : '-' ?></td>

					</tr>
				<?php }
			} else { ?>
				<tr>
					<td>-</td>
					<td>-</td>

				</tr>
			<?php } ?>
		<?php $no++;
		} ?>

	</table>



</body>

</html>