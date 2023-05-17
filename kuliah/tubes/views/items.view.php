<?php require('partials/header.php'); ?>
<?php require('partials/navbar.php'); ?>
<div class="konten">
    <div>
        <div class="container">
            <h1><?= $judulitem; ?></h1>
            <ul>
                <?php foreach ($items as $item) { ?>
                    <li>
                        <div class="item" style="background-image: url(<?= $item["pathimage"]; ?>);">
                            <a href="#"><?= $item["nama"]; ?></a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php require('partials/footer.php'); ?>