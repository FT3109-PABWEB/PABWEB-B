<h1>Menu Utama</h1>
<ul>
    <li><?php echo anchor('mhs', 'Data Mahasiswa') ?></li>
    <li><?php echo anchor('prodi', 'Data Program Studi') ?></li>
</ul>
<p>
    <?php
    $nama_lengkap = $this->session->userdata('nama_lengkap');
    echo "Wilujeung Sumping {$nama_lengkap} !";
    ?>
</p>
<p>
    <?php
    echo anchor('auth/hapus_session', 'Hapus Session Nama Lengkap') ?>

</p>
<P>
    <?php 
    echo anchor('logout','Logout') ?>
</P>
