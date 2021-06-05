<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<h3>Data Program Studi</h3>
	<table border="2">
		<thead>
			<tr>
				<th>NO</th>
				<th>Nama Prodi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($prodi as $row) { ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<th><?php echo $row->nama_prodi ?></th>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php echo anchor('home', 'kembali ke home') ?>
</body>
</html>