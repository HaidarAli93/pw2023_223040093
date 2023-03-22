<?php
$mhs=array(
    array(
        "NRP" => "073040001",
        "nama" => "Upin",
        "email" => "upin@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/upin.jpg"
    ),
    array(
        "NRP" => "073040002",
        "nama" => "Ipin",
        "email" => "ipin@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/ipin.jpg"
    ),
    array(
        "NRP" => "073040003",
        "nama" => "Mail",
        "email" => "mail@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/mail.jpg"
    ),
    array(
        "NRP" => "073040004",
        "nama" => "Jarjit",
        "email" => "jarjit@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/jarjit.jpg"
    ),
    array(
        "NRP" => "073040005",
        "nama" => "Ehsan",
        "email" => "ehsan@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/ehsan.jpg"
    ),
    array(
        "NRP" => "073040006",
        "nama" => "Fizi",
        "email" => "fizi@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/fizi.jpg"
    ),
    array(
        "NRP" => "073040007",
        "nama" => "Mei-mei",
        "email" => "meimei@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/mei.jpg"
    ),
    array(
        "NRP" => "073040008",
        "nama" => "Susanti",
        "email" => "susanti@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/susanti.jpg"
    ),
    array(
        "NRP" => "073040009",
        "nama" => "Dzul",
        "email" => "dzul@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/dzul.jpg"
    ),
    array(
        "NRP" => "073040010",
        "nama" => "Ijat",
        "email" => "ijat@gmail.com",
        "jurusan" => "PG PAUD",
        "img" => "./img/ijat.jpg"
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <style>
        img {
            width : 100px;
            height : 100px;
        }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mhs as $m) { ?>
    <ul>
        <li><img src=" <?= $m["img"] ?> " alt="foto" /></li>
        <li>NRP: <?= $m["NRP"]; ?></li>
        <li>Name: <?= $m["nama"]; ?></li>
        <li>Email: <?= $m["email"]; ?></li>
        <li>Jurusan: <?= $m["jurusan"]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>