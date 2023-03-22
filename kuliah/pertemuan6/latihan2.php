<?php
// Array multidimensi
// Array didalam array
$mhs= array(
    array(
        'nama' => 'Ariel', 
        'binatang' => '🐸', 
        'makanan' => array('🍞')
    
    ), 
    array(
        'nama' => 'Azhar', 
        'binatang' => '🐔', 
        'makanan' => array('🥚', '🍌')
    ), 
    array(
        'nama' => 'Reza', 
        'binatang' => '🐇', 
        'makanan' => array('🍖', '🍉')
    ), 
    array(
        'nama' => 'Aziz', 
        'binatang' => '🦊', 
        'makanan' => array()
    ), 
    array(
        'nama' => 'Visi', 
        'binatang' => '🐳', 
        'makanan' => array('🥖', '🍍', '🥜', '🍇')
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Pertemuan 6</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mhs as $i) { ?>
    <ul>
        <li>Nama: <?= $i['nama']; ?></li>
        <li>Makanan Favorit: 
            <?php
                foreach($i['makanan'] as $j) {
                    echo "$j";
                }
            ?>
        </li>
        <li>Binatang Peliharaan: <?= $i['binatang']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>