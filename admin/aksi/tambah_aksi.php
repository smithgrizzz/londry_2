<?php

require '../../koneksi.php';

$nama_p = htmlspecialchars($_POST["pelanggan_nama"]);
$no_hp = htmlspecialchars($_POST["pelanggan_hp"]);
$alamat = htmlspecialchars($_POST["pelanggan_alamat"]);

mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama_p', '$no_hp', '$alamat')");

return mysqli_affected_rows($koneksi);

header("Location: pelanggan.php");
?>