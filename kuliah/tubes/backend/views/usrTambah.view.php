<?php
require('partials/header.php');
require('partials/navbar.php');
?>
    <div id="konten">
        <h2>Tambah Data User</h2>
        <div class="container">
            <form action="logics/usrTambah.logic.php" method="post">
                <h4>Masukkan Email: </h4>
                <input type="email" name="email" id="" autofocus autocomplete="off"  />
                <h4>Masukkan Username: </h4>
                <input type="text" name="username" id="" autocomplete="off" />
                <h4>Masukkan Password: </h4>
                <input type="password" name="passwd" id="" />
                <button name="submit" type="submit">Tambahkan</button>
                <button name="reset" type="reset">Reset</button>
            </form>
            <a href="./usrMgmt.php" style="width: 90px;"><h4>Kembali</h4></a>
        </div>
    </div>
<?php
require('partials/footer.php');
?>