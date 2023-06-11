<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');
$id = $_GET['id'];
$title = "Dashboard";
$users = sql("SELECT * FROM users WHERE id='$id'");
require('views/index.view.php');
?>