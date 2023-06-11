<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');

$title="User Update";

$id = $_GET['id'];

$users = sql("SELECT * FROM users WHERE id = '$id'");

require('views/update-user.view.php');
?>