<?php 
$depan='Haidar';
$belakang='Ali';

for ($i=1; $i <= 100 ; $i++) { 
    # code...
    if (($i % 3) == 0 and ($i % 5) == 0) {
        # code...
        echo "$depan $belakang<br />";
    }
    elseif (($i % 3) == 0) {
        # code...
        echo "$depan<br />";
    }
    elseif (($i % 5) == 0) {
        # code...
        echo "$belakang<br />";
    }
    else {
        # code...
        echo "$i<br />";
    }
}
?>