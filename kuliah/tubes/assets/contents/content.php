<?php
$id = $_GET['id'];
$articles = sql("SELECT * FROM contents WHERE id = '$id'");
?>
<?php foreach ($articles as $article) { ?>
    <h2><?= $article['judul']; ?></h2>
    <img src="c:\laragon\www\pw2023_223040093\kuliah\tubes\assets\img\<?= $article['gambar']; ?>" style="height: 300px; width: 400px;" alt="">
    <p>
        <pre>
            <?= $article['article']; ?>
        </pre>
    </p>
<?php } ?>