<?php
$pelem = array(
    array(
        'poster' => '<img src="rbi.jpeg" class="poster" class="poster"/>',
        'judul' => 'Ralph Breaks the Internet.',
        'tahun' => '2018',
        'genre' => array('Animation, ', 'Adventure, ', 'Comedy.'),
        'lakon' => 'John C. Reilly.',
        'sutradara' => 'Rich Moore and Phil Jhonston.',
    ),
    array(
        'poster' => '<img src="sh.jpeg" class="poster" />',
        'judul' => 'Sherlock Holmes.',
        'tahun' => '2009',
        'genre' => array('Action, ', 'Adventure, ', 'Mystery..'),
        'lakon' => 'Robert Downey Jr.',
        'sutradara' => 'Guy Ritchie',
    ),
    array(
        'poster' => '<img src="./rk.jpeg" class="poster">',
        'judul' => 'Rurouni Kenshin.',
        'tahun' => '2012.',
        'genre' => array('Action, ', 'Adventure, ', 'Drama.'),
        'lakon' => 'Takeru Satoh.',
        'sutradara' => 'Keishi Otomo.',
    ),
    array(
        'poster' => '<img src="./nysm.jpg" class="poster">',
        'judul' => 'Now You See Me.',
        'tahun' => '2013.',
        'genre' => array('Crime, ', 'Mystery, ', 'Thriller.'),
        'lakon' => 'Jesse Eisenberg.',
        'sutradara' => 'Louis Leterrier.',
    ),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img.poster {
            height: 200px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($pelem as $film) { ?>
    <ul>
        <li><?= $film['poster']; ?></li>
        <li>Judul Film : <?= $film['judul']; ?></li>
        <li>Tahun rilis : <?= $film['tahun']; ?></li>
        <li>Genre : <?php
            foreach($film['genre'] as $genre){
                echo $genre;
            }
        ?></li>
        <li>Pemeran Utama : <?= $film['lakon']; ?></li>
        <li>Sutradara : <?= $film['sutradara']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>