<?php
/***************************
 Nama File : session01.php
 Halaman ini merupakan halaman contoh penciptaan session.
 perintah session_start() harus ditaruh di perintah pertama
 tanpa spasi di depannya. Perintah session_start() Harus ada pada Setiap 
 halaman yang berhubungan dengan session 
 */

session_start();
if(isset ($_POST['Login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa login
    if($user == "kirsud" && $pass = "123"){
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju halaman pemeriksaan session
        echo "<h1>Anda Berhasil Login</h1>";
        echo "<h2>Klik <a href='session02.php'>Disini(session02.php)</a>
            Untuk menuju ke halaman pemeriksaan session";
    }else{
        die ("Username atau Password salah
            silahkan login <a href='session01.php'>LOGIN</a>");
    }
}else{
?>
<html>
    <head>
        <title>Login Here...</title>
    </head>
    <body>
        <form action="" METHOD="post">
        <h2>Login Here...</h2>
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="LOGIN">
        </form>
    </body>
</html>
<?php } ?>