<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
<?php
require '../koneksi.php';

$id = $_GET["id"];

$data = mysqli_query($koneksi, "SELECT * FROM transaksi,pelanggan WHERE transaksi_id=$id AND transaksi_pelanggan=pelanggan_id");
?>

<div class="container">
    <div class="panel bg-white p-4 shadow-sm mt-3">
        <div class="panel-heading">
            <h2 class="text-center">Laundry SMKN 7 Baleendah</h2> 
        </div>

        <div class="panel-body">
            <?php while($row = mysqli_fetch_assoc($data)): ?>
                <a href="invoice_cetak.php?id=<?= $id; ?>" class="cetak btn btn-success text-white">Cetak</a>
                <table class="table">
                    <tr>
                        <th width="20%">No. Invoice</th>
                        <th>:</th>
                        <td>INVOICE-<?= $row["transaksi_id"]; ?></td>
                    </tr>
                    <tr>
                        <th width="20%">Tanggal Londry</th>
                        <th>:</th>
                        <td><?= $row["transaksi_tgl"]; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>:</th>
                        <td><?= $row["pelanggan_nama"]; ?></td>
                    </tr>
                    <tr>
                        <th>No. Hp</th>
                        <th>:</th>
                        <td><?= $row["pelanggan_hp"]; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td><?= $row["pelanggan_alamat"]; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Cucian (Kg)</th>
                        <th>:</th>
                        <td><?= $row["transaksi_berat"]; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Selesai</th>
                        <th>:</th>
                        <td><?= $row["transaksi_tgl_selesai"]; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>:</th>
                        <td>
                            <?php
                                if( $row["transaksi_status"] === "0" ) {
                                    echo "<div class='badge bg-warning'>PROSES</div>";
                                }else if( $row["transaksi_status"] === "1" ) {
                                    echo "<div class='badge bg-info'>DICUCI</div>";
                                }else if( $row["transaksi_status"] === "2" ) {
                                    echo "<div class='badge bg-success'>SELESAI</div>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <th>:</th>
                        <td>Rp. <?= number_format($row["transaksi_harga"]); ?>,-</td>
                    </tr>
                </div>
            </table>

            <h4 class="text-center">Daftar Cucian</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Jenis Pakaian</th>
                        <th width="20%">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $pakaian = mysqli_query($koneksi, "SELECT * FROM pakaian WHERE pakaian_transaksi=$id");?>

                        <?php while($p = mysqli_fetch_assoc($pakaian)): ?>
                            <tr>
                                <td><?= $p["pakaian_jenis"]; ?></td>
                                <td width="5%"><?= $p["pakaian_jumlah"]; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tr>
                </tbody>
            </table>
        <?php endwhile; ?>
        <p class="text-center">Terimakasih atas kunjungan anda!</p>
    </div>
</div>

</body>
</html>