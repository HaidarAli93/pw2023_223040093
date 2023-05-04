<?php
require('functions.php');
$title="Home";
$students = array(
    array(
        "nama" => "Haidar Ali",
        "npm" => "223040093",
        "email" => "haidar.223040093@mail.unpas.ac.id"
    ),
    array(
        "nama" => "Ila Radiah",
        "npm" => "223040039",
        "email" => "radiah.223040093@mail.unpas.ac.id"
    ),
);

// "/PW2023_223040093/kuliah/pertemuan9/index.php"
require('./views/index.view.php');
?>
