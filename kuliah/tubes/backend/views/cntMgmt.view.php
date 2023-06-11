<?php
require('partials/header.php');
require('partials/navbar.php');
?>
    <div id="konten">
        <h2>Content Management</h2>
        <div class="container">
            <h2>Daftar Konten</h2>
            <div id="caridantambah">
                <form action="" method="get">
                    <input type="text" name="keyword" id="keyword" placeholder="Search user(s)..." autofocus autocomplete="off" />
                    <button type="submit" name="btnCari" id="btnCari">Cari</button>
                </form>
                <div class="btn"><a href="./cntTambah.php"><h4>Tambah Konten</h4></a></div>
            </div>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 75px;">No Id</th>
                    <th style="width: 200px;">Aksi</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <th><?= $i++; ?></th>
                            <td><?= $article['id']; ?></td>
                            <td>
                                <a href="del-cnt.php?id=<?= $article['id']; ?>">Hapus</a>
                                <a href="update-cont.php?id=<?= $article['id']; ?>">Ubah</a>
                            </td>
                            <td>
                                <img src="../frontend/views/img/<?= $article['gambar']; ?>" style="width: 100px; height: 100px;" alt="">
                            </td>
                            <td><?= $article['judul']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
require('partials/footer.php');
?>