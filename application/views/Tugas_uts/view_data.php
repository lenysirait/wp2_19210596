<html>

<head>
	<title>Tampil Data Mahasiswa</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					D-Lemas:Tampil Data Mahasiswa
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<br>
					<b>Nama Siswa</b>
					<th>:</th>
				</td>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<td>
					<b>NIS</b>
					<th>:</th>
				</td>
				<td>
					<?= $nis; ?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Kelas</b>
					<th>:</th>
				</td>
				<td>
					<?= $kelas; ?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Tanggal Lahir</b>
					<th>:</th>
				</td>
				<td>
					<?= $tgl; ?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Tempat Lahir</b>
					<th>:</th>
				</td>
				<td>
					<?= $tmpt; ?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Alamat</b>
					<th>:</th>
				</td>
				<td>
					<?= $alamat; ?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Jenis Kelamin</b>
					<th>:</th>
				</td>
				<td>
					<?= $gender; ?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Agama</b>
					<th>:</th>
				</td>
				<td>
					<?= $agama; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('Tugas_uts');
						?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>