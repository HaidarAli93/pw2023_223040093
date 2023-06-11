<?php
require('partials/header.php');
require('partials/navbar.php');
?>
    <div id="konten">
        <h2>User Managements</h2>
        <div class="container">
            <h2>Daftar User</h2>
            <div id="caridantambah">
                <form action="" method="get">
                    <input type="text" name="keyword" id="keyword" placeholder="Search user(s)..." autofocus autocomplete="off" />
                    <button type="submit" name="btnCari" id="btnCari">Cari</button>
                </form>
                <div class="btn"><a href="./usrTambah.php"><h4>Tambah User</h4></a></div>
            </div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 75px;">No Id</th>
                    <th style="width: 200px;">Aksi</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $user['id']; ?></td>
                            <td>
                                <a href="del-usr.php?id=<?= $user['id']; ?>">Hapus</a>
                                <a href="update-user.php?id=<?= $user['id']; ?>">Ubah</a>
                            </td>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['email']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
require('partials/footer.php');
?>