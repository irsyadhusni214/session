<?php
session_start();
if(isset($_SESSION['login'])){
    echo "<h1><center>Selamat Datang ". $_SESSION['login'] ."</h1></center>";
    echo "Bila Anda Ingin Logout Klik <a href='logout.php'>Disini</a> Untuk Logout";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>surs</title>
</head>
<body>
    <fieldset>
    <form action="" method="POST">
    <legend align="center">identitas</legend>
    Nama : <input type="text" name="nama">
    Kelas : <input type="text" name="kelas">
    <input type="submit" name="simpan" value="Simpan">
    </form>
    </fieldset>
</body>
</html>

<?php }else{
    die ("Anda Belum Login, Silahkan Login Terlebih Dahulu <a href='tugassess'>Disini</a> Untuk Login");
} 
?>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    echo "Nama Anda Adalah ". $nama . "<br>";
    echo "Kelas Anda Adalah ". $kelas;
}
?>



