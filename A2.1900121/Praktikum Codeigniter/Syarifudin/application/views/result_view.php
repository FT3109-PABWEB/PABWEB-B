<html>
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Metode Result</h1>
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($result as $row){ ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->Nama ?></td>
                    <td><?php echo $row->NIM ?></td>
                </tr>
           <?php } ?>
            
        </tbody>
    </table>
</body>
</html>