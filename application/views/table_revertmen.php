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
		foreach ($data as $d) {  ?>
			<tr>
				<th>No</th>
				<th>STA</th>
				<th>Kode Lokasi</th>
				<th>Panjang Total</th>
				<th>Panjang Kerusakan</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Provinsi</th>
				<th>Lintang</th>
				<th>Bujur</th>

			</tr>
			<tr>
				<td rowspan="5"><?= $no ?></td>
				<td><?= $d->fv_sta ? $d->fv_sta : '-' ?></td>
				<td><?= $d->fv_kodelok ? $d->fv_kodelok : '-' ?></td>
				<td><?= $d->fv_pjtotal ? $d->fv_pjtotal : '-' ?></td>
				<td><?= $d->fv_pjkr ? $d->fv_pjkr : '-' ?></td>
				<td><?= $d->ft_desa ? $d->ft_desa : '-' ?></td>
				<td><?= $d->ft_kec ? $d->ft_kec : '-' ?></td>
				<td><?= $d->ft_kab ? $d->ft_kab : '-' ?></td>
				<td><?= $d->ft_prop ? $d->ft_prop : '-' ?></td>
				<td><?= $d->fv_lintang ? $d->fv_lintang : '-' ?></td>
				<td><?= $d->fv_bujur ? $d->fv_bujur : '-' ?></td>
			</tr>
			<tr>
				<th>Tahun Inspeksi</th>
				<th>Bulan Inspeksi</th>
				<th>Jenis Bangunan</th>
				<th>Bagian Bangunan</th>
				<th>Kerusakan</th>
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
						<td><?= $r->tpanjang ? $r->tpanjang : '-' ?></td>
						<td><?= $r->tlebar ? $r->tlebar : '-' ?></td>
						<td><?= $r->ttinggi ? $r->ttinggi : '-' ?></td>
						<td><?= $r->tvolume ? $r->tvolume : '-' ?></td>
						<td><?= $r->tket ? $r->tket : '-' ?></td>
						<td><?= $r->tn_kinerja ? $r->tn_kinerja : '-' ?></td>

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
				</tr>
			<?php } ?>
			<tr>

				<th>Kinerja</th>
				<th>Usulan Tindakan</th>
				<th>Pekerjaan Perbaikan</th>
				<th>Nilai Kinerja</th>
			</tr>
			<?php
			if ($d->kor != null) {
				foreach (@$d->kor as $r) { ?>
					<tr>
						<td><?= $r->tn_kinerja ? $r->tn_kinerja : '-' ?></td>
						<td><?= $r->tkinerja ? $r->tkinerja : '-' ?></td>
						<td><?= $r->ttindakan ? $r->ttindakan : '-' ?></td>
						<td><?= $r->tusulan_pbk ? $r->tusulan_pbk : '-' ?></td>
					</tr>
				<?php }
			} else { ?>
				<tr>
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