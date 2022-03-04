<?php
include '../koneksi.php';

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM pelanggan WHERE pelanggan_id = $id");

if( mysqli_affected_rows($koneksi) ) {
    echo "<script>alert('Data berhasil dihapus!');
    document.location.href = 'pelanggan.php'
    </script>";
}

?>