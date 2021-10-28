<html>

<head>
    <title>Belajar CRUD</title>
</head>

<body>
    <center>
        <h1>Belajar CRUD dengan CodeIgniter</h1>
    </center>
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    <table style="margin: 20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
        $no = 1;
        foreach ($user as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->Nim ?></td>
                <td><?php echo $u->Nama ?></td>
                <td><?php echo $u->Kelas ?></td>
                <td><?php echo $u->Alamat ?></td>
                <td><?php echo anchor('crud/edit/' . $u->id, 'Edit '); ?>
                    <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>