<?php
require('partials/header.php');
require('partials/navbar.php');
?>
    <div id="konten">
        <h2>Ubah Data User</h2>
        <div class="container">
            <?php foreach ($users as $user) { ?>
            <form action="logics/cntTambah.logic.php" method="post" enctype="multipart/form-data">
                <h4>Masukkan Judul: </h4>
                <input type="text" name="judul" id="" autofocus autocomplete="off" value="<?= $user['judul']; ?>" />
                <h4>Masukkan Gambar: </h4>
                <input type="file" name="gambar" id="" autocomplete="off" value="c:\laragon\www\pw2023_223040093\kuliah\tubes\assets\img\<?= $user['gambar']; ?>"/>
                <h4>Masukkan Konten: </h4>
                <textarea name="artikel" id="" cols="120" rows="10"><?= $user['article']; ?></textarea>
                <button name="submit" type="submit">Tambah</button>
                <button name="reset" type="reset">Reset</button>
            </form>
            <?php } ?>
            <a href="./usrMgmt.php" style="width: 90px;"><h4>Kembali</h4></a>
        </div>
    </div>
<?php
require('partials/footer.php');
?>