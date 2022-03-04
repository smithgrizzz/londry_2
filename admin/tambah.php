<?php require 'header.php'; ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah data pelanggan</h4>
            <form action="aksi/tambah_aksi.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama:</label>
                    <input type="text" name="pelanggan_nama" class="form-control" required autocomplete="off" placeholder="Nama ..">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No Hp:</label>
                    <input type="text" class="form-control" name="pelanggan_hp" required autocomplete="off" placeholder="No Hp ..">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat:</label>
                    <input type="text" class="form-control" name="pelanggan_alamat" required autocomplete="off" placeholder="Alamat ..">
                </div>
                <div class="mb-3">
                    <button type="submit" name="tambah" class="btn" style="background-color: rgb(103,59,183); color: white;">Tambah</button>
                    <a href="pelanggan.php" class="btn btn-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>