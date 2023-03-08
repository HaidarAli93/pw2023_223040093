<?php 
function hitungLuasLingkaran($r){
    $pi=3.14;
    $luasLing=$pi*$r*$r;
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br />";
    echo "Luas lingkaran = $luasLing cm<sup>2</sup>";
    echo "<hr />";
}
function hitungKelilingLingkaran($r){
    $pi=3.14;
    $kelLing=2*$pi*$r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br />";
    echo "Luas lingkaran = $kelLing cm";
    echo "<hr />";
}
hitungLuasLingkaran(10);
hitungKelilingLingkaran(20);
?>