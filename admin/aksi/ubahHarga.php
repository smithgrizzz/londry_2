<?php
require '../../koneksi.php';

$harga = $_POST["harga_per_kilo"];

mysqli_query($koneksi, "UPDATE harga SET harga_per_kilo = $harga");

if( mysqli_affected_rows($koneksi) > 0 ) {
   echo "<script>alert('Harga berhasil diubah!');</script>";
}else {
   echo "<script>alert('Harga gagal diubah!');</script>";
}

?>