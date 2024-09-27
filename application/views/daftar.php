<h1>Tambah User</h1>

<form action="<?= base_url() ?>daftar/simpan" method="post">
    <input type="text" name="username" placeholder="Masukan Username"><br><br>
    <input type="password" name="password" placeholder="Masukan Password"><br><br>
    <input type="text" name="nama" placeholder="Masukan Nama Lengkap"><br><br>
    <input type="submit" value="simpan">
</form>