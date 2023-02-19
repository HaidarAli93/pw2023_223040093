<?php 
$kata1="Topi";
$kata2="Bundar";
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
    <h2 style="font-style: italic;">
        <?php 
        echo "\"" . $kata1 . " saya " . $kata2 . ", " . $kata2 . " " . $kata1 . " saya.\"";
        ?>
    </h2>
</body>
</html>