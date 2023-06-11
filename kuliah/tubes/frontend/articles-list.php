<?php
require('functions.php');

$title = "Info Kesehatan";

$articles = sql("SELECT * FROM contents");

require('./views/articles-list.view.php');
?>