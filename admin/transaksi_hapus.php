<?php
require '../koneksi.php';
$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM transaksi WHERE transaksi_id=$id");
mysqli_query($koneksi, "DELETE FROM pakaian WHERE pakaian_transaksi=$id");
if(mysqli_affected_rows($koneksi)) {
    echo "Berhasil Dihapus!";
}
?>