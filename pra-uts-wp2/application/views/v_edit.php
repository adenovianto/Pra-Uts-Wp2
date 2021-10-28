<html>

<head>
    <title>CRUD dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>Belajar CRUD dengan CodeIgniter</h1>
        <h3>Form Input Edit Data</h3>
    </center>
    <?php foreach ($user as $u) { ?>
        <form action="<?php echo base_url() . 'crud/update'; ?>" method="post">
            <center>
                <table>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <td>Nim</td>
                        <td>:</td>
                        <td><input type="text" name="Nim" id="" value="<?php echo $u->Nim ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="Nama" id="" value="<?php echo $u->Nama ?>"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><input type="text" name="Kelas" id="" value="<?php echo $u->Kelas ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="Alamat" id="" value="<?php echo $u->Alamat ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </center>
        </form>
    <?php } ?>
</body>

</html>