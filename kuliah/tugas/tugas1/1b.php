<?php 
$angka=93
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
        echo "Aku adalah angka <b>$angka</b><br />";
        echo "Jika dikali 5, maka aku sekarang menjadi <b>" . $angka*5 . "</b><br />";
        echo "Jika dibagi 2, maka aku sekarang menjadi <b>" . $angka*5/2 . "</b><br />";
        echo "Jika ditambah 75, maka aku sekarang menjadi <b>" . $angka*5/2+75 . "</b><br />";
        echo "Jika dikurang 20, maka aku sekarang menjadi <b>" . $angka*5/2+75-20 . "</b><br />";
        ?>
    </p>
</body>
</html>