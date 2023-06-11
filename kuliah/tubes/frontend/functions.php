<?php
define('BASE_URL', '/PW2023_223040093/kuliah/tubes/index.php');
$basisdir = "http://localhost/PW2023_223040093/kuliah/tubes/";

//fungsi untuk koneksi ke database
function condb() {
    // bagian koneksi ke database
    $con = mysqli_connect("localhost", "root", "", "tubes");
    
    // mengecek apakah telah terkoneksi ke db atau belum
    if (!$con) {
        # code...
        echo '<script>alert("Connection failed : ' . mysqli_connect_error() . '...")</script>';
    }

    return $con;
}

//fungsi untuk eksekusi query sql di db terkait
function sql($query){
    $con = condb();
    $hasil = mysqli_query($con, $query);

    $baris2 = [];
    while ($baris = mysqli_fetch_assoc($hasil)) {
        $baris2[] = $baris;
    }

    return $baris2;
}

// fungsi untuk login
function ceklogin($nama, $psswd){
    $con = condb();
    //mengambil data dari user dan database lalu mencocokkannya
    $sql = 'SELECT * FROM users;';
    $hasil = mysqli_query($con, $sql);
    while ($baris = mysqli_fetch_assoc($hasil)) {
        # code...
        if ($nama == $baris['nama'] && $psswd == $baris['password']) {
            # code...
            $output = $baris['id'];
            break;
        } else {
            $output = 0;
        }
    }
    return $output;
}

//untuk mengecek kesamaan data dari user dan dari db, prosedur sebelum signin
function ceksignin($nama, $psswd, $email){
    $con = condb();
    //mengambil data dari user dan database lalu mencocokkannya
    $sql = 'SELECT * FROM users;';
    $hasil = mysqli_query($con, $sql);
    while ($baris = mysqli_fetch_assoc($hasil)) {
        # code...
        if ($nama == $baris['nama'] || $psswd == $baris['password'] || $email == $baris['email']) {
            # code...
            $output = 1;
            break;
        } else {
            $output = 0;
        }
    }
    return $output;
}

//fungsi untuk signin
function signin($nama, $email, $passwd){
    $con = condb();
    //mengecek kesamaan antara data dari database dengan data dari user
    $cekdb = ceksignin($nama, $passwd, $email);
    //jika data dari user dan db itu sama, maka akan mengirimkan output tidak berhasil
    if ($cekdb == 1) {
        # code...
        echo "<script>alert('Salah satu atau lebih data yang anda masukkan telah dipakai oleh user lain.');
                location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/frontend/signin.php';</script>";
    } else {
        //jika tidak sama, maka ambil data dari user lalu menambahkannya ke database
        $sql = "INSERT INTO users VALUES (null, '$nama', '$email', '$passwd');";
        mysqli_query($con, $sql);
    
        echo "<script>alert('Data berhasil ditambahkan.');
                location.href = ''http://localhost/PW2023_223040093/kuliah/tubes/frontend/login.php'';</script>";
    }
}

// fungsi ini untuk tambah data user
function tambahusr($nama, $email, $passwd){
    $con = condb();
    //mengecek kesamaan antara data dari database dengan data dari user
    $cekdb = ceksignin($nama, $passwd, $email);
    //jika data dari user dan db itu sama, maka akan mengirimkan output tidak berhasil
    if ($cekdb == 1) {
        # code...
        echo "<script>alert('Salah satu atau lebih data yang anda masukkan telah dipakai oleh user lain.');
                location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/usrTambah.php';</script>";
    } else {
        //jika tidak sama, maka ambil data dari user lalu menambahkannya ke database
        $sql = "INSERT INTO users VALUES (null, '$nama', '$email', '$passwd');";
        mysqli_query($con, $sql);
    
        echo "<script>alert('Data berhasil ditambahkan.');
                location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/usrMgmt.php';</script>";
    }
}

//fungsi untuk hapus data user
function hapususr($delusr){
    $con = condb();
    //jika akun user yang akan didelete telah ditentukan, maka
    $sql = "DELETE FROM users WHERE id = '$delusr'";
    mysqli_query($con, $sql);
    header("location: usrMgmt.php?");
}

//fungsi untuk ubah data user
function ubahusr($id, $email, $nama, $password){
    $con = condb();

    $sql = "UPDATE users
            SET email='$email',
            nama='$nama',
            password='$password'
            WHERE id='$id'";
    mysqli_query($con, $sql);
    
    echo "<script>alert('Data berhasil diubah.');
        location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/usrMgmt.php';</script>";
}

// fungsi ini untuk tambah data konten
function tambahcnt($gambar, $judul, $artikel){
    $con = condb();
        $sql = "INSERT INTO contents VALUES (null, '$gambar', '$judul', '$artikel');";
        mysqli_query($con, $sql);
    
        echo "<script>alert('Data berhasil ditambahkan.');
                location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/cntMgmt.php';</script>";
}

//fungsi untuk hapus data konten
function hapuscnt($delcnt){
    $con = condb();
    //jika akun user yang akan didelete telah ditentukan, maka
    $sql = "DELETE FROM contents WHERE id = '$delcnt'";
    mysqli_query($con, $sql);
    $nama_gambar = sql("SELECT * FROM contents WHERE id = '$delcnt'");
    unlink('c:/laragon/www/pw2023_223040093/kuliah/tubes/assets/img/' . $nama_gambar);
    header("location: cntMgmt.php");
}

function ubahcnt($id, $judul, $gambar, $artikel){
    $con = condb();

    $sql = "UPDATE contents
            SET judul='$judul',
            gambar='$gambar',
            article='$artikel'
            WHERE id='$id'";
    mysqli_query($con, $sql);

    echo "<script>alert('Data berhasil diubah.');
            location.href = 'http://localhost/PW2023_223040093/kuliah/tubes/backend/usrMgmt.php';</script>";
    
}

// nggak tahu ini buat apa
function uriIs($uri) {
    $basisdir = "http://localhost/PW2023_223040093/kuliah/tubes/";
    return ($_SERVER["REQUEST_URI"] === $basisdir . "views/backend/" . $uri) ? 'selected' : '';
}
?>