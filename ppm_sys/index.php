<?php
error_reporting(0);
session_start();

include "../config/koneksi.php";

if(empty($_SESSION['user'])) {
    echo "<script>document.location.href='login.php?auth=1'</script>";
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="../assets/images/kabtasik.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style-admin.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap5.min.css">

    <script src="../assets/js/jquery-3.7.0.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap5.min.js"></script>

</head>
<body>

<div class="d-flex">
    <nav id="sidebar" class="p-3 d-none d-md-block">
        <div class="sidebar-header mb-4">
            <h4 class="fw-bold text-primary"><img src="../assets/images/kabtasik.png" width="13%"> SATPM</h4>
        </div>
        <?php include "sidebar.php"; ?>
    </nav>

    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow-sm bg-gradient-custom mb-4 p-3">
            <div class="container-fluid">
                <span class="navbar-brand h1 mb-0">Halaman Admin SATPM Bappelitbangda Kabupaten Tasikmalaya</span>
                <div class="ms-auto d-flex align-items-center">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=Admin" alt="" width="32" height="32" class="rounded-circle me-2">
                            <span class="d-none d-sm-inline"><?=$_SESSION['nama_lengkap'] ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <?php include "page.php"; ?>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>