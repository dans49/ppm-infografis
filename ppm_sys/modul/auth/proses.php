<?php
session_start();

include "../../../config/koneksi.php";

$user = $_POST['nama_user'];
$pass = $_POST['kata_kunci'];

$cek = mysqli_query($conn, "SELECT * FROM gk_user WHERE nama_user='$user' AND kata_kunci=SHA1('$pass')");
$rows = mysqli_fetch_array($cek);

if(mysqli_num_rows($cek) > 0) {
    $_SESSION['user'] = $rows['nama_user'];
    $_SESSION['nama_lengkap'] = $rows['nama_lengkap'];

    header("location: ../../index.php");
} else {
    header("location: ../../login.php?auth=salah");
}