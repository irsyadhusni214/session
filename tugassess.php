<?php
session_start();
if(isset ($_POST['Login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "djaya" && $pass = "123"){
        $_SESSION['login'] = "Kirsud";
        echo "<h1>Anda Berhasil Login</h1>";
        echo "<h2>Klik <a href='tugassess2.php'>Disini</a> Nama Anda </h2>";
    }else{
        die ("Anda Belum Login Boss ! Silahkan Login <a href='tugassess.php>DISINI</a>'");
    }
}else{
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="" METHOD="post">
        <h2>Login Disini...</h2>
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="LOGIN">
        </form>
    </body>
</html>
<?php } ?>