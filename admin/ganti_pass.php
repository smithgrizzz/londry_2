<?php include 'header.php'; ?>

<div class="container">
   <div class="row justify-content-center py-5">
      <div class="col-md-5">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title text-center">Ganti Password</h4>
            </div>
            <div class="card-body">
               <form action="ubah_pass.php" method="POST">

               <?php if(isset($_GET["pesan"])){
                  if($_GET["pesan"] === "oke") {
                     echo "<div class='alert alert-success'>Password telah diganti!</div>";
                  }
               }
               ?>

               <div class="form-group mb-3">
                  <label for="" class="form-label">Masukan Password Baru</label>
                  <input type="password" class="form-control" name="password_baru" placeholder="Masukan password baru anda! .." >
               </div>

               <button type="submit" class="btn btn-success" name="ganti">Ganti Password</button>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include 'footer.php'; ?>