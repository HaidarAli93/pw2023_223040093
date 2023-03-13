<?php
// deklarasi & penugasan terhadap variabel array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = array('Ocak', 39, false);
$binatang = array('🐸', '🐔', '🐇', '🦊', '🐗');

// Mencetak array, ada 2 cara, berikut fungsinya masing-masing, sbb:
// 1. Untuk mencetak salah satu elemen array, cukup dengan echo $var[indexnya]
// 2. Mencetak seluruh variabel array, dengan fungsi var_dump($var) dan print_r($var)
var_dump($hari);
echo "<br />";
print_r($bulan);
echo "<br />";
var_dump($myArray);
echo "<br />";
print_r($binatang);
echo "<br />";

// Manipulasi array
// Menambahkan elemen di akhir array menggunakan []
$hari[] = 'Kamis';
var_dump($hari);
echo "<br />";

// Menambahkan elemen di akhir array menggunakan fungsi array_push
array_push($bulan, 'April', 'Mei');
var_dump($bulan);
echo "<br />";

// Menambahkan elemen di awal array menggunakan fungsi array_unshift
array_unshift($binatang, '🐁', '🐐');
var_dump($binatang);
echo "<br />";

// Menghapus 1 elemen di akhir array menggunakan fungsi array_pop
array_pop($hari);
var_dump($hari);
echo "<br />";

// Menghapus 1 elemen di awal array menggunakan fungsi array_shift
array_shift($bulan);
var_dump($bulan);
echo "<br />";
?>