<?php
require('partials/header.php');
require('partials/navbar.php');
?>
    <div id="konten">
        <h2>Dashboard Admin</h2>
        <div class="container">
            <?php foreach ($users as $user) ?>
            <h2>Profile User</h2>
            <h3>Username: </h3>
            <input type="text" name="" id="" value="?" readonly />
            <h3>Email: </h3>
            <input type="text" name="" id="" value="?" readonly />
            <a href="del-usr.php?id=<?= $user['id']; ?>">Hapus</a>
            <a href="update-user.php?id=<?= $user['id']; ?>&hal=index.php">Ubah</a>
        </div>
    </div>
<?php
require('partials/footer.php');
?>