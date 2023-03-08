<?php
function urutanAngka($angka){
    $inkremen=1;
    for ($i=1; $i <= $angka; $i++) { 
        # code...
        for ($j=1; $j <= $i; $j++) { 
            # code...
            echo $inkremen++ . " ";
        }
        echo "<br />";
    }
}
echo urutanAngka(5);
?>