<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
    color:#2c0b88 ;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-align: center;
}
.tambah input[type=text]{
    width: 35%;
    color:white;
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: #8765e4;
    cursor: pointer;
}
.tambah select{
    width: 35%;
    color:white;
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: #8765e4;
    cursor: pointer;
}
.tambah input[type=submit]{
    color:white;
    padding: 6px 7px;
    border-radius: 10px;
    margin-left: 32%;
    border: none;
    background-color: #7549ee;
    cursor: pointer;
}
</style>
<body>
   <h1>Tambah Data Siswa</h1>
   <br><br>
   <div class="tambah">
    <form action="tambah_siswa/tambah" method="post">
        <input placeholder="masukan nama" type="text" name="nama">
        <br><br>
        <select name="alamat">
            <option value="">pilih alamat</option>
            <option value="batang">batang</option>
            <option value="pekalongan">pekalongan</option>
            <option value="pemalang">pemalang</option>
            <option value="tegal">tegal</option>
        </select>
        <br><br>
        <input placeholder="masukan no telp" type="text" name="no_telp">
        <br><br>
        <input type="submit" value="simpan">
    </form>
    </div>
</body>
</html>