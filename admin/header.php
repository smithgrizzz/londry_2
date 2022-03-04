<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Londry</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(239, 235, 249);
        }
    </style>
</head>
<body>
<?php session_start();

require '../koneksi.php';

?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(103,59,183);">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">Londry Saya</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="toggle-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="pelanggan.php" class="nav-link">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a href="transaksi.php" class="nav-link">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a href="laporan.php" class="nav-link">Laporan</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Pengaturan</a>
                    <ul class="dropdown-menu">
                    <li><a href="harga.php" class="dropdown-item">Pengaturan Harga</a></li>
                    <li><a href="ganti_pass.php" class="dropdown-item">Ganti Password</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
        <span class="navbar-text">
            Hallo, <strong><?= $_SESSION["username"]; ?></strong>
        </span>
    </div>
</nav>