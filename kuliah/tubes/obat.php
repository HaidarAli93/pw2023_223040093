<?php
require('./functions.php');
$judulitem = "Daftar Obat";
$items = array(
    array(
        "nama" => "Halo Dunia",
        "pathimage" => "$basisdir/views/img/tmp-bg-item.jpg"
    ),
    array(
        "nama" => "Hello World",
        "pathimage" => "$basisdir/views/img/tmp-bg-item.jpg"
    ),
);
require('./views/items.view.php');
?>