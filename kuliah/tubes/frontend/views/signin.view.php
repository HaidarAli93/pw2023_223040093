
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HidupSehat - Signin</title>
    <link rel="stylesheet" href="http://localhost/PW2023_223040093/kuliah/tubes/frontend/views/signin.css">
    <script src="https://kit.fontawesome.com/67e6f2e2d6.js" crossorigin="anonymous"></script>
</head>
<body>
    <form action="http://localhost/pw2023_223040093/kuliah/tubes/frontend/logics/signin.logic.php" method="post">
        <div id="undo">
            <a href="http://localhost/PW2023_223040093/kuliah/tubes/frontend/index.php"><i class="fa-sharp fa-solid fa-arrow-left"></i>Kembali</a>
        </div>
        <h2>Login to Your Account</h2>
        <input type="email" name="email" id="" placeholder="Your Email" />
        <input type="text" name="username" id="" placeholder="Your Username..." />
        <input type="password" name="passwd" id="" placeholder="Your Password..." />
        <input type="password" name="passwd2" id="" placeholder="Re-type Your Password..." />
        <button name="submit" type="submit">Daftar</button>
        <a href="http://localhost/PW2023_223040093/kuliah/tubes/frontend/login.php">Sudah punya akun? Mari ke halaman Login</a>
        <a href="#">Lupa Password?</a>
    </form>
</body>
</html>