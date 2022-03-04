<?php

$id = $_POST["id"];
$pelanggan = $_POST["pelanggan"];
$berat = $_POST["transaksi_berat"];
$tgl_selesai = $_POST["transaksi_tgl_selesai"];
$status = $_POST["status"];

$result = mysqli_query($koneksi, "SELECT * FROM harga");
$harga_per_kilo = mysqli_fetch_assoc($result);
$harga = $berat * $harga_per_kilo["harga_per_kilo"];

mysqli_query($koneksi, "UPDATE transaksi SET
                transaksi_pelanggan = $pelanggan,
                transaksi_harga = $harga,
                transaksi_berat = $berat,
                transaksi_tgl_selesai = '$tgl_selesai',
                transaksi_status = $status
                WHERE transaksi_id = $id");

$pakaian_jenis = $_POST["pakaian_jenis"];
$pakaian_jumlah = $_POST["pakaian_jumlah"];
mysqli_query($koneksi, "DELETE FROM pakaian WHERE pakaian_transaksi=$id");
$i = 0;
foreach( $pakaian_jenis as $pakaian ) {
    if( $pakaian != "" ) {
        mysqli_query($koneksi, "INSERT INTO pakaian VALUES('', $id, '$pakaian', $pakaian_jumlah[$i])");
    }
    $i++;
}

if(mysqli_affected_rows($koneksi)) {
    echo "berhasil";
}


?>