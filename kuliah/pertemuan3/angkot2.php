<?php 
$jml_angkot = 10;
$nilai_awal = 1;
$angkot_rusak = 4;
while($nilai_awal <= $jml_angkot - $angkot_rusak){
    echo "Angkot no.$nilai_awal beroperasi dengan baik.<br />";
    $nilai_awal++;
}
for($nilai_awal;$nilai_awal <= 10;$nilai_awal++){
    echo "Angkot no.$nilai_awal sedang rusak.<br />";
}
?>