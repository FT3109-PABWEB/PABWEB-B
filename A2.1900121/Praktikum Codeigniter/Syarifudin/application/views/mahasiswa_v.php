    <h3>Data Mahasiswa</h3>
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($mahasiswa as $row){ ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->Nama ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nm_prodi ?></td>
                </tr>
           <?php } ?>
            
        </tbody>
    </table>
<?php echo anchor ('home','kembali ke home') ?>
