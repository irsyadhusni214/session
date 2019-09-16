<?php
session_start();
if(isset($_SESSION['login'])){
    echo "<h1><center>Selamat Datang ". $_SESSION['login'] ."</h1></center>";
}
?>