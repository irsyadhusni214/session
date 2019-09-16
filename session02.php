<?php
session_start();
//pemeriksaan session
if(isset($_SESSION['login'])){
    echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>";
    echo "<h2>Halaman ini dapat diakses jika anda sudah login</h2>";
    echo "<h2>Kilik <a href='session03.php'>Disini(session03.php)</a>Untuk Logout</h2>";
}else{
    die ("Anda Belum Login! Anda tidak berhak masuk ke halaman ini. Silahkan login
    <a href='session01.php'>Disini</a>");
}
?>