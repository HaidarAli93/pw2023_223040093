<?php
require('C:/laragon/www/pw2023_223040093/kuliah/tubes/frontend/functions.php');
$username = $_POST['username'];
$passwd = $_POST['passwd'];
if (isset($_POST['submit'])){
    $hasil_cek = ceklogin($username, $passwd);
    if ($hasil_cek == 0) {
        # code...
        echo "<script>alert('Your username or your password was wrong.');
            location.href= 'http://localhost/PW2023_223040093/kuliah/tubes/frontend/login.php'</script>";
    } else {
        header("Location: http://localhost/PW2023_223040093/kuliah/tubes/backend/index.php?id=$hasil_cek");
    }
}
?>