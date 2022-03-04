<?php require 'header.php'; ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="card-title">
                Data Pelanggan
            </h4>
            <a href="tambah.php" class="btn btn-primary">Tambah Pelanggan</a>
            <br />
            <br />
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Hp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <?php $hasil = mysqli_query($koneksi, "SELECT * FROM pelanggan"); ?>
                <?php $i = 1; ?>
                <?php while($d = mysqli_fetch_assoc($hasil)): ?>
                <tbody>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d["pelanggan_nama"]; ?></td>
                    <td><?= $d["pelanggan_hp"]; ?></td>
                    <td><?= $d["pelanggan_alamat"]; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $d["pelanggan_id"]; ?>" class="btn btn-sm btn-warning text-white">Edit</a> |
                        <a href="hapus.php?id=<?= $d["pelanggan_id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                    </td>
                </tr>
                </tbody>
                <?php $i++; ?>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>