<?php

//var_dump($_POST['username'])
//var_dump($_POST['password'])
if (!empty($_POST["username"]) && empty(!$_POST["password"])) {
    $username = "admin";
    $password = "123456";

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        // Apa yang akan dilakukan jika username dan password benar
        echo "<h1>Selamat datang di dashboard</h1>";
    } else {
        // Kembali ke halaman login.php jika username atau password salah
        header('Location: login.php');
    } 
} else {
        // Kembali ke halaman login.php jika username atau password salah
        header('Location: login.php');
}


?>