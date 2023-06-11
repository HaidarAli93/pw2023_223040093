<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$passwd2 = $_POST['passwd2'];
$email = $_POST['email'];
if (isset($_POST['submit'])){
    if ($username == '' || $passwd == '' || $email == '') {
        echo "<script>alert('Mohon untuk mengisi semua bagian yang kosong.');
            location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/frontend/signin.php';</script>";
    } elseif ($passwd != $passwd2) {
        echo "<script>alert('Konfirmasi password salah.');
            location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/frontend/signin.php';</script>";
    } else {
        signin($username, $email, $passwd);
    }
}
?>