<?php require 'header.php';

$id = $_GET["id"];

$transaksi_edit = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE transaksi_id = $id");
$pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");

?>

<div class="container">
    
    <div class="panel mb-3 mt-3 p-4 bg-light">
        <div class="panel-heading">
            <h4>Edit Transaksi</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <?php while($data = mysqli_fetch_assoc($transaksi_edit)): ?>
                    <form action="aksi/TAksiedit.php" method="post">
                        <input type="hidden" name="id" value="<?= $data["transaksi_id"]; ?>">
                        <div class="mb-3">
                            <label for="pilih" class="form-label">Pilih Pelanggan</label>
                            <select name="pelanggan" id="pilih" class="form-select">
                                <option value="">Pilih Pelanggan</option>
                                <?php while($row = mysqli_fetch_assoc($pelanggan)): ?>
                                    <option <?= ($row["pelanggan_id"] === $data["transaksi_pelanggan"] ? "selected='selected'" : "");?> value="<?= $row["pelanggan_id"]; ?>"><?= $row["pelanggan_nama"]; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat</label>
                            <input type="number" class="form-control" name="transaksi_berat" placeholder="" value="<?= $data["transaksi_berat"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tgls" class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="transaksi_tgl_selesai" value="<?= $data["transaksi_tgl_selesai"]; ?>">
                        </div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Jenis Pakaian</th>
                                <th width="20%">Jumlah</th>
                            </tr>
                            
                            <?php $id_transaksi = $data["transaksi_id"]; 
                                $pakaian = mysqli_query($koneksi, "SELECT * FROM pakaian WHERE pakaian_transaksi=$id_transaksi");
                            ?>

                            <?php while($p = mysqli_fetch_assoc($pakaian)): ?>
                                <tr>
                                    <td><input type="text" class="form-control" name="pakaian_jenis[]" value="<?= $p["pakaian_jenis"]; ?>"></td>
                                    <td><input type="number" class="form-control" name="pakaian_jumlah[]" value="<?= $p["pakaian_jumlah"]; ?>"></td>
                                </tr>
                            <?php endwhile; ?>
                            <tr>
                                <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
                                <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
                                <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
                                <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
                                <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
                                <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
                                <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
                                <td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
                            </tr>
                        </table>
                        <div class="mb-3 alert alert-info">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option <?= ($data["transaksi_status"] === "0" ? "selected" : "") ?> value="0">PROSES</option>
                                <option <?= ($data["transaksi_status"] === "1" ? "selected" : "") ?> value="1">DICUCI</option>
                                <option <?= ($data["transaksi_status"] === "2" ? "selected" : "") ?> value="2">SELESAI</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="edit_transaksi" class="btn text-white" style="background-color: rgb(103,59,183);">Simpan</button>
                            <a href="transaksi.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
        
</div>

<?php require 'footer.php'; ?>