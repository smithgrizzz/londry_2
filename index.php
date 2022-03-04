<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(239, 235, 249);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Login</h2>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                    <?php 
                        if( isset($_GET["pesan"]) ) {
                            if( $_GET["pesan"] == "belum_login" ) {
                                echo "<div class='alert alert-danger' role='alert'>Anda harus login untuk masuk ke halaman Admin!</div>";
                            }else if( $_GET["pesan"] == "gagal_p" ) {
                                echo "<div class='alert alert-danger'>Username Salah!, Silahkan coba lagi!</div>";
                            }else if( $_GET["pesan"] == "gagal_u" ) {
                                echo "<div class='alert alert-danger'>Password Salah!, Silahkan coba lagi!</div>";
                            }
                        }
                        ?>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required autocomplete="off" placeholder="Username ..">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required placeholder="Password ..">
                        </div>

                        <div class="mb-3">
                            <input type="checkbox" name="remember" id="rememberme" class="form-check-label">
                            <label for="rememberme" class="form-label">Remember Me</label>
                        </div>

                        <button type="submit" name="login" class="btn" style="background-color: rgb(103,59,183); color: white;">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>