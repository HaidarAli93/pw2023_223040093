<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');
$con = mysqli_connect("localhost", "root", "", "tubes");
$sql = 'SELECT * FROM users';
$hasil = mysqli_query($con, $sql);

while ($baris = mysqli_fetch_assoc($hasil)) {
    # code...
    echo $baris['id_user'];
}
?>