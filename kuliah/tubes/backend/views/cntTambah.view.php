<?php
require('partials/header.php');
require('partials/navbar.php');
?>
    <div id="konten">
        <h2>Tambah Data User</h2>
        <div class="container">
            <form action="logics/cntTambah.logic.php" method="post" enctype="multipart/form-data">
                <h4>Masukkan Judul: </h4>
                <input type="text" name="judul" id="" autofocus autocomplete="off" />
                <h4>Masukkan Gambar: </h4>
                <input type="file" name="gambar" id="" autocomplete="off" />
                <h4>Masukkan Konten: </h4>
                <textarea name="artikel" id="" cols="120" rows="10"></textarea>
                <button name="submit" type="submit">Tambah</button>
                <button name="reset" type="reset">Reset</button>
            </form>
            <a href="./cntMgmt.php" style="width: 90px;"><h4>Kembali</h4></a>
        </div>
    </div>
<?php
require('partials/footer.php');
?>