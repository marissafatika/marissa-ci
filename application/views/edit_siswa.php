<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
</style>
<body>
<h1>EDIT DATA SISWA</h1>
<div class="tambah" >
    <form action="<?= base_url() ?>admin/update" method="post">
        <!--type hidden = data tersembunyi-->
        <input type="hidden" name="nis" value="<?= $edit['nis']?>">
        <br><br>
        <input placeholder="masukan nama" type="text" name="nama" value="<?= $edit['nama']?>">
        <br><br>
       <select name="alamat">
        <option value="">--pilih alamt--</option>

        <?php foreach($alamat as $al) : ?>
            <?php if($al == $edit['alamat']): ?>
                <option value="<?= $al; ?>" selected><?= $al; ?></option>
                <?php else : ?>
                <option value="<?= $al; ?>"><?= $al; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>

       </select>
       <br><br>
        <input placeholder="masukan no_telp" type="text" name="no_telp" value="<?= $edit['no_telp']?>">
        <br><br>
        <input type="submit" value="edit">
    </form>
    </div>
   
</body>
</html>