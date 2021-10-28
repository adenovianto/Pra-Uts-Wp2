<html>

<head>
    <title>Belajar Membuat Form Validation</title>
</head>

<body>
    <form action="<?php echo base_url('form/aksi') ?>" method="post">
        <h1>Membuat Form Validation</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('form/aksi'); ?>
        <label for="">Nama</label>
        <input type="text" name="nama" id=""> <br>
        <label for="">Email</label>
        <input type="text" name="email" id=""> <br>
        <label for="">Konfirmasi_Email</label>
        <input type="text" name="konfir_email" id=""> <br>
        <input type="submit" value="Simpan">

    </form>
</body>

</html>