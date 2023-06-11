<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');

$title="User Management";

if (isset($_GET['btnCari'])) {
    # code...
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM
                users
                WHERE
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%'";

    $users = sql($query);
} else {
    # code...
    $users = sql("SELECT * FROM users");
}

require('views/usrMgmt.view.php');
?>