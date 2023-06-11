<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');
$ekstensi_diperbolehkan	= array('png','jpg');
$judul = $_POST['judul'];
$gambar = $_FILES['gambar']['name'];
$jenisgambar = $_FILES['gambar']['size'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];
$x = explode('.', $gambar);
$ekstensi = strtolower(end($x));
$artikel = $_POST['artikel'];
if (isset($_POST['submit'])){
    if ($judul == '' || $gambar == '' || $artikel == '') {
        echo "<script>alert('Mohon untuk mengisi semua bagian yang kosong.');
            location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/cntTambah.php';</script>";
    } elseif (in_array($ekstensi, $ekstensi_diperbolehkan) === false) {
        # code...
        echo "<script>alert('Hanya file berekstensi png dan jpg yang diperbolehkan.');
            location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/cntTambah.php';</script>";
    } else {
        move_uploaded_file($gambar_tmp, 'C:/laragon/www/pw2023_223040093/kuliah/tubes/assets/img/' . $gambar);
        tambahcnt($gambar, $judul, $artikel);
    }
}
?>