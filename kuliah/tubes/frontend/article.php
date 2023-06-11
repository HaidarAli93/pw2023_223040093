<?php
require('functions.php');

$judul_artikel = $_GET['id'];
$title = $judul_artikel;

require('./views/article.view.php');
?>