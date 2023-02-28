<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            background-color: aqua;
            display: inline-block;
            line-height: 50px;
            width: 50px;
            height: 50px;
            text-align: center;
            border: 2px solid black;
        }
    </style>
</head>
<body>
<?php 
    for ($i=10; $i >= 1 ; $i--) { 
        # code...
        echo "<br />";
        for ($j=1; $j <= $i ; $j++) { 
            # code...
            echo "<div>$j</div>";
        }
    }
?>
</body>
</html>