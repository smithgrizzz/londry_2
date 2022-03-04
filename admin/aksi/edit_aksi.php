<?php

require '../../koneksi.php';

$id = $_POST["pelanggan_id"];
$nama = $_POST["pelanggan_nama"];
$no_hp = $_POST["pelanggan_hp"];
$alamat = $_POST["pelanggan_alamat"];

mysqli_query($koneksi, "UPDATE pelanggan SET pelanggan_nama = '$nama',
    pelanggan_hp = '$no_hp',
    pelanggan_alamat = '$alamat'
    WHERE pelanggan_id = $id");

if( mysqli_affected_rows($koneksi) ) {
    echo "<script>alert('Data berhasil diubah!'); document.location.href='pelanggan.php';</script>";
}

?>