<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Url</title>
</head>
<body>
    <h1>Contoh URL</h1>
    <p>Base_url()</p>
    <?php echo base_url() ?>
    <br>
    <p>Ini adalah gambar</p>
    <img src="<?php echo base_url('assets/motor.jpg') ?>" width="200px" height="150px">
    <br>
    <p>2. Site_url() ?>
    <?php echo site_url() ?>
    <br>
    <p><a href="<?php echo site_url('halaman')?>">Ke Halaman View</a></p>
    <br>
    <?php echo anchor('url/detail/1','Ke halaman detail') ?>
    <br>
    <?php echo anchor('url/blank', 'Ke halaman blank') ?>
</body>
</html>