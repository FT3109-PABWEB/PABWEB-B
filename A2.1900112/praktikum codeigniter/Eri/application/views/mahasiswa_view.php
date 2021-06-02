<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data mahasiswa</title>
  <h3>Data Mahasiswa</h3>
</head>
<body>
    <?php echo anchor ('mahasiswa/tambah_data','Tambah_Data')?>
    <table border ="2">
    <thead>
    <tr>
    <th>NO</th>
    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Program_studi</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
    <?php
    $no =1;
    foreach ($mahasiswa as $row) { ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $row->nim ?></td>
    <td><?php echo $row->nama_mhs ?></td>
    <td><?php echo $row->nama_prodi ?></td>
    <td>
    <?php echo anchor ("mahasiswa/edit/{$row->id_mahasiswa}","Edit")?>
    <?php echo anchor ("mahasiswa/hapus/{$row->id_mahasiswa}","Hapus")?>
    
    </td>
</tr>
<?php } ?>
            </tbody>
        </table>
    <?php
    $pesan = $this->session->flashdata('pesan');
    echo $pesan;
    ?>

