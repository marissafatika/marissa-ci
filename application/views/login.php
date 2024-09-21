<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="<?= base_url() ?>login/verifikasi" method="post">
        <input type="text" placeholder="masukan username" name="username">
        <br><br>
        <input type="password" placeholder="masukan password" name="password">
        <br><br>

        <input type="submit" value="login">
    </form>
</body>
</html>