<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tambah User</h1>
<br><br>
<div class="daftar">
<form action="<?= base_url() ?>daftar/simpan" method="post">
    <input type="text" name="username" placeholder="Masukan Username"><br><br>
    <input type="password" name="password" placeholder="Masukan Password"><br><br>
    <input type="text" name="nama" placeholder="Masukan Nama Lengkap"><br><br>
    <input type="submit" value="simpan">
</form>
</div>
</body>
</html>