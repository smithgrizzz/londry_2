<?php include 'header.php';

$id = $_GET["id"];

$p = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE pelanggan_id = $id");
$pelanggan = mysqli_fetch_assoc($p);

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3 mb-3">
                <div class="card-header text-center p-3 text-white" style="background-color: rgb(103,59,183);">
                    <h4>Edit data pelanggan</h4>
                </div>
                <div class="card-body">
                    <form action="aksi/edit_aksi.php" method="post">
                        <input type="hidden" name="pelanggan_id" value="<?= $pelanggan["pelanggan_id"]; ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" name="pelanggan_nama" value="<?= $pelanggan["pelanggan_nama"]; ?>" class="form-control" id="nama" autocomplete="off" placeholder="Nama ..">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">No hp:</label>
                            <input type="text" class="form-control" name="pelanggan_hp" value="<?= $pelanggan["pelanggan_hp"]; ?>" id="nohp" autocomplete="off" placeholder="No Hp ..">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <input type="text" class="form-control" name="pelanggan_alamat" value="<?= $pelanggan["pelanggan_alamat"] ?>" id="alamat" autocomplete="off" placeholder="Alamat ..">
                        </div>
                        <div class="mb-3 justify-content-be">
                            <button type="submit" class="btn text-white" style="background-color: rgb(103,59,183);" name="edit">Edit pelanggan</button>
                            <a href="pelanggan.php" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>