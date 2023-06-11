<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');

$title="Content Management";

if (isset($_GET['btnCari'])) {
    # code...
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM
                contents
                WHERE
                judul LIKE '%$keyword%'";

    $articles = sql($query);
} else {
    # code...
    $articles = sql("SELECT * FROM contents");
}

require('views/cntMgmt.view.php');
?>