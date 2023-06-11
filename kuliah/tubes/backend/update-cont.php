<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');

$title="Content Update";

$id = $_GET['id'];

$users = sql("SELECT * FROM contents WHERE id = '$id'");

require('views/update-cont.view.php');
?>