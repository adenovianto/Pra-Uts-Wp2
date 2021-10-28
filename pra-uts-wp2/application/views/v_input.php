<html>

<head>
    <title>CRUD dengan CodeIgniter</title>
</head>
<center>
    <h1>Belajar CRUD dengan CodeIgniter</h1>
    <h3>Form Input Data Baru</h3>
</center>
<form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="post">
    <center>
        <table>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="Nim" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" id=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="Kelas" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="Alamat" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </center>
</form>

</html>