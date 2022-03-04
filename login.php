<?php

session_start();

if ( isset($_COOKIE["login"]) ) {
    if( $_COOKIE["login"] == 'true' ) {
        $_SESSION["login"] = true;
    }
}

if( isset($_SESSION["login"]) ) {
    header("Location: admin/index.php");
    exit;
}

require 'koneksi.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1 ) {
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            $_SESSION["login"] = true;

            if( isset($_POST["remember"]) ) {
                setcookie("login", true, time()+60);
            }

            $_SESSION["username"] = $username;
            header("Location: admin/index.php");
            exit;
        }else {
            header("Location: index.php?pesan=gagal_u");
        }
    }else {
        header("Location: index.php?pesan=gagal_p");
    }

}


?>