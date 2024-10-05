<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tambah Data Alamat</h1>
   <br><br>
   <div class="tambah">
    <form action="<?= base_url() ?>alamat/simpan" method="post">
        <input placeholder="masukan alamat" type="text" name="alamat">
        <br><br>
        <input placeholder="masukan kode pos" type="text" name="kode_pos">
        <br><br>
        <input type="submit" value="simpan">
    </form>
    </div>
</body>
</html>