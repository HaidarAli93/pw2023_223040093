<?php
require('partials/header.php');
require('partials/navbar.php');
?>
    <div id="konten">
        <h2>Ubah Data User</h2>
        <div class="container">
            <?php foreach ($users as $user) { ?>
            <form action="logics/update-user.logic.php?id=<?= $user['id']; ?>" method="post">
                <h4>Masukkan Email: </h4>
                <input type="email" name="email" id="" autofocus autocomplete="off" value="<?= $user['email']; ?>" />
                <h4>Masukkan Username: </h4>
                <input type="text" name="username" id="" autocomplete="off" value="<?= $user['nama']; ?>" />
                <h4>Masukkan Password: </h4>
                <input type="password" name="passwd" id="" value="<?= $user['password']; ?>" />
                <button name="submit" type="submit">Ubah</button>
                <button name="reset" type="reset">Reset</button>
                <?php } ?>
            </form>
            <a href="./usrMgmt.php" style="width: 90px;"><h4>Kembali</h4></a>
        </div>
    </div>
<?php
require('partials/footer.php');
?>