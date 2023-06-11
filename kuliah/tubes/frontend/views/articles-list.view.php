<?php
require('partials/header.php');
require('partials/navbar.php');
?>
<div class="induk-konten">
    <div class="konten">
        <h2><?= $title; ?></h2>
        <ul id="list-artikel">
            <?php foreach ($articles as $article) { ?>
            <li>
                <a href="http://localhost/PW2023_223040093/kuliah/tubes/frontend/article.php?id=<?= $article['id']; ?>" style="background-image: url(http://localhost/PW2023_223040093/kuliah/tubes/assets/img/<?= $article['gambar']; ?>);">
                    <h3>
                        <pre><?= $article['judul']; ?></pre>
                    </h3>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php
require('partials/footer.php');
?>