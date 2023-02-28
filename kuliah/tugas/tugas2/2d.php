<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            height: 50px;
            width: 50px;
            border: 1px solid black;
            display: inline-block;
        }
        div.htm {
            background-color: black;
            color: black;
        }
        div.pth {
            background-color: white;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    for ($i=1; $i <= 5 ; $i++) { 
        # code...
        for ($j=1; $j <= 5; $j++) { 
            # code...
            if (($j % 2) == 1 and ($i % 2) == 1)  {
                # code...
                echo "<div class='htm'>$i</div>";
            }
            elseif (($j % 2) == 0 and ($i % 2) == 0)  {
                # code...
                echo "<div class='htm'>$i</div>";
            }
            else {
                echo "<div class='pth'>$i</div>";
            }
        }
        echo "<br />";
    }
    ?>
</body>
</html>