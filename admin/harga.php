<?php require 'header.php'; ?>

<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-5 col-md-offset-3">
         <div class="card mb-3 mt-3">
            <div class="card-body">
               <h4>Pengaturan harga</h4>
   
               <?php $data = mysqli_query($koneksi, "SELECT harga_per_kilo FROM harga");?>
               <?php while($d = mysqli_fetch_assoc($data)): ?>
                  <form action="aksi/ubahHarga.php" method="post">
   
                  <div class="form-group mb-3">
                     <label for="" class="form-label">Harga per kilo</label>
                     <input type="number" name="harga_per_kilo" class="from-control" value="<?php echo $d["harga_per_kilo"]; ?>">
                  </div>
   
                  <button type="submit" class="btn btn-secondary" name="ubah">Ubah</button>
                  </form>
               <?php endwhile; ?>
            </div>
         </div>
      </div>
   </div>
</div>

<?php require 'footer.php'; ?>