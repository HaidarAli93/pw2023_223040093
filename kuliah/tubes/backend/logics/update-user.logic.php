<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');
$id = $_GET['id'];
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$email = $_POST['email'];
if (isset($_POST['submit'])){
    if ($username == '' || $passwd == '' || $email == '') {
        echo "<script>alert('Mohon untuk mengisi semua bagian yang kosong.');
            location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/usrTambah.php';</script>";
    } else {
        ubahusr($id, $email, $username, $passwd);
    }
}
?>