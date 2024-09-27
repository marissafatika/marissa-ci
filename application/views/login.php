   <h1>Halaman Login</h1> 
    <?= $this->session->flashdata('message'); ?>
    
    <form action="<?= base_url() ?>login/verifikasi" method="post">
        <input type="text" placeholder="masukan username" name="username">
        <br><br>
        <input type="password" placeholder="masukan password" name="password">
        <br><br>

        <input type="submit" value="login">
    </form>
   <p>Belum Punya Akun? <a href="<?= base_url() ?>daftar">Daftar</a></p>
