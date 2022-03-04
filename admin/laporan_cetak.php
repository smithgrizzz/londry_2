<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

<?php if( isset($_GET["tgl_dari"]) && isset($_GET["tgl_sampai"]) ): ?>
        <?php $dari = $_GET["tgl_dari"]; $sampai = $_GET["tgl_sampai"]; ?>
        <div class="container">
            <div class="panel bg-light p-4 mb-3 mt-3">
                <div class="panel-heading">
                    <h4 class="text-center">Data laporan londry dari <?= $dari; ?> sampai <?= $sampai; ?></h4>
                </div>
                <div class="panel-body">
                    <p class="cetak btn btn-warning text-white">Cetak</p>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="1%">No.</th>
                            <th>INVOICE</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Berat (kg)</th>
                            <th>Tgl. Selesai</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                        <?php $data = query("SELECT * FROM pelanggan, transaksi WHERE transaksi_pelanggan=pelanggan_id AND DATE(transaksi_tgl) > '$dari' AND DATE(transaksi_tgl) < '$sampai' ORDER BY transaksi_id DESC"); $i = 1; ?>
                        <?php foreach( $data as $row ): ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>INVOICE-<?= $row["transaksi_id"] ?></td>
                            <td><?= $row["transaksi_tgl"] ?></td>
                            <td><?= $row["pelanggan_nama"]; ?></td>
                            <td><?= $row["transaksi_berat"] ?></td>
                            <td><?= $row["transaksi_tgl_selesai"]; ?></td>
                            <td>Rp. <?= number_format($row["transaksi_harga"]); ?>,-</td>
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
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                    <a href="laporan.php" class="btn btn-info text-white">Kembali</a>
                </div>
            </div>
        </div>
<?php endif; ?>

<script>
    const print = document.querySelector('.cetak');
    print.addEventListener('click', function(){
        window.print();
    })
</script>
</body>
</html>