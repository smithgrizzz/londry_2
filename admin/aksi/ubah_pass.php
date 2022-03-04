<?php

include '../../koneksi.php';

$password_baru = hash($_POST["password_baru"], PASSWORD_DEFAULT);

mysqli_query($koneksi, "UPDATE admin SET password = '$password_baru'");

header("Location: ganti_pass.php?pesan=oke");

?>