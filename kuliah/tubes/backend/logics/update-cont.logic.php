<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');
$id = $_GET['id'];
$judul = $_POST['judul'];
$gambar = $_FILES['gambar']['name'];
$artikel = $_POST['artikel'];
if (isset($_POST['submit'])){
    if ($judul == '' || $gambar == '' || $artikel == '') {
        echo "<script>alert('Mohon untuk mengisi semua bagian yang kosong.');
            location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/usrTambah.php';</script>";
    } else {
        ubahcnt($id, $judul, $gambar, $artikel);
    }
}
?>