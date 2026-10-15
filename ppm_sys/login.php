<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin System</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background: #f4f7f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
        }
        .btn-login {
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
        }
        .form-control {
            padding: 12px;
            border-radius: 8px;
        }
        .brand-logo {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container p-3">
    <div class="card login-card mx-auto p-4">
        <div class="text-center">
            <div class="brand-logo">
                <i class="bi bi-cpu-fill"></i>
            </div>
            <h4 class="fw-bold">Selamat Datang</h4>
            <p class="text-muted small">Silakan masuk untuk mengelola dashboard</p>
        </div>
        
        <form action="modul/auth/proses.php" method="POST" class="mt-4">
            <?php
            if($_GET['auth'] == 'salah'){
                echo "<div class='alert alert-danger'>Password Salah</div>";
            }
            if($_GET['auth'] == '1'){
                echo "<div class='alert alert-info'>Silakan Login!</div>";
            }
            ?>

            <div class="mb-3">
                <label class="form-label small fw-bold">Username</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control border-start-0 bg-light" placeholder="Masukan username" name="nama_user" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label small fw-bold">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" class="form-control border-start-0 bg-light" placeholder="••••••••" name="kata_kunci" required>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label small" for="rememberMe">Ingat Saya</label>
                </div>
                <a href="#" class="text-decoration-none small">Lupa Password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 btn-login shadow-sm">
                Masuk Sekarang
            </button>
        </form>

        <div class="text-center mt-4">
            <p class="small text-muted mb-0"> <a href="../index.php" class="text-decoration-none"><span class="bi bi-arrow-left"></span> Kembali</a></p>
        </div>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>