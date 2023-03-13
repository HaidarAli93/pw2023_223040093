<?php
$hardware=array('Motherboard', 'Processor', 'Hard Disk', 'PC Cooler', 'VGA Card', 'SSD');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b.php</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php for ($i=0; $i < count($hardware); $i++) { ?>
        <li><?= $hardware[$i]; ?></li>
        <?php }     ?>
    </ol>
    <br />

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php
        array_push($hardware, 'Card Reader', 'Modem');
        sort($hardware);
        for ($i=0; $i < count($hardware); $i++) { 
        ?>
        <li><?= $hardware[$i]; ?></li>
        <?php }     ?>
    </ol>
</body>
</html>