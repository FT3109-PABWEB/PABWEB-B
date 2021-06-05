<!DOCTYPE html>
<html> lang="en">
<head>
	<title>Contoh URL</title>
</head>
<body>
	<h1>Conoh URL</h1>
	<P>1. Base_url()</P>
	<?php echo base_url() ?>
	<br>
	<p>ini adalah gambar</p>
	<img src="<?php echo base_url('assets/Faizal Rachman.jpeg') ?>" width="200px">
	<p>2. Site_url()</p>
	<?php echo site_url() ?>
	<br>
	<p><a href="<?php echo site_url('halaman')?>">Ke Halaman View</a></p>
	<br>
	<?php echo anchor('url/detail/1','ke halaman detail') ?>
	<br>
	<?php echo anchor('url/blank', 'ke halaman blank') ?>
</body>
</html>