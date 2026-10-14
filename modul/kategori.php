<style>
    .page-header {
        padding: 45px 0 30px;
    }
    .page-header h1 {
        font-size: 27px;
        font-weight: 700;
    }
    .search-box {
        background: #fff;
        border: 1px solid #d9e0e7;
        border-radius: 12px;
        padding: 8px 15px;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .search-box i {
        color: #8190a5;
        font-size: 19px;
    }
    .search-box input {
        border: none;
        box-shadow: none !important;
        padding: 13px 5px;
        font-size: 14px;
    }
    .indicator-item {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 19px 22px;
        background: #fff;
        border: 1px solid #e0e5eb;
        border-radius: 10px;
        color: #10244d;
        text-decoration: none;
        transition: .2s;
    }
    .indicator-item:hover {
        border-color: #0b438d;
        background: #f5f9ff;
        transform: translateY(-2px);
        color: #0b438d;
    }
    .indicator-icon {
        width: 44px;
        height: 44px;
        background: #eaf1fc;
        color: #0b438d;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .indicator-title {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .indicator-desc {
        font-size: 12px;
        color: #657085;
        margin: 0;
    }
    .indicator-arrow {
        margin-left: auto;
        color: #8190a5;
    }
</style>

<?php
$slug = $_GET['kategori'];
$getkat = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM ppm_kategori WHERE slug='$slug'"));
$qindic = mysqli_query($conn, "SELECT * FROM ppm_indikator WHERE idkategori='$getkat[idkategori]'");
$indic = mysqli_num_rows($qindic);
?>

<section class="hero">
    <div class="hero-mini-content">
        <h1>SATU DATA BIDANG PPM BAPPELITBANGDA<br>KABUPATEN TASIKMALAYA</h1>
        <p>Informasi terintegrasi untuk mendukung perencanaan dan evaluasi pembangunan daerah berbasis data yang akurat.</p>
    </div>
</section>

<!-- CONTENT -->
<main class="container">

    <!-- HEADER -->
    <section class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item">
                    <a href="index.html">Beranda</a>
                </li>
                <li class="breadcrumb-item active"><?=$getkat['kategori'] ?></li>
            </ol>
        </nav>

        <h1>
            <i class="fa-solid <?=$getkat['icon'] ?> text-danger me-2"></i>
            <?=$getkat['kategori'] ?>
        </h1>

        <p class="text-secondary mb-0">
            Data dan indikator <?=$getkat['kategori'] ?>
            Kabupaten Tasikmalaya.
        </p>
    </section>

    <!-- SEARCH -->
    <div class="search-box mb-4">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" class="form-control" id="searchIndikator" placeholder="Cari indikator <?=$getkat['kategori'] ?>...">
    </div>

    <!-- JUMLAH DATA -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fs-6 fw-bold mb-0">Daftar Indikator <?=$getkat['kategori'] ?></h2>
        <span class="text-secondary small" id="jumlahData">
            <?=$indic ?> indikator
        </span>
    </div>

    <!-- LIST INDIKATOR -->
    <div class="d-flex flex-column gap-3" id="daftarIndikator">

        <?php
        while ($viewindic = mysqli_fetch_array($qindic)) { ?>
            
        <a href="detail-indikator.html" class="indicator-item">
            <div class="indicator-icon">
                <i class="fa-solid fa-heart-pulse"></i>
            </div>
            <div>
                <div class="indicator-title"><?=$viewindic['nama_indikator'] ?></div>
                <p class="indicator-desc">
                    <?=$viewindic['definisi'] ?>
                </p>
            </div>
            <i class="fa-solid fa-chevron-right indicator-arrow"></i>
        </a>

        <?php } ?>

        <!-- <a href="detail-indikator.html" class="indicator-item">
            <div class="indicator-icon">
                <i class="fa-solid fa-person-pregnant"></i>
            </div>
            <div>
                <div class="indicator-title">Angka Kematian Ibu</div>
                <p class="indicator-desc">
                    Indikator kesehatan ibu dan pelayanan maternal.
                </p>
            </div>
            <i class="fa-solid fa-chevron-right indicator-arrow"></i>
        </a>

        <a href="detail-indikator.html" class="indicator-item">
            <div class="indicator-icon">
                <i class="fa-solid fa-baby"></i>
            </div>
            <div>
                <div class="indicator-title">Angka Kematian Bayi</div>
                <p class="indicator-desc">
                    Indikator kematian bayi dalam suatu wilayah.
                </p>
            </div>
            <i class="fa-solid fa-chevron-right indicator-arrow"></i>
        </a>

        <a href="detail-indikator.html" class="indicator-item">
            <div class="indicator-icon">
                <i class="fa-solid fa-child-reaching"></i>
            </div>
            <div>
                <div class="indicator-title">Prevalensi Stunting</div>
                <p class="indicator-desc">
                    Persentase balita dengan kondisi stunting.
                </p>
            </div>
            <i class="fa-solid fa-chevron-right indicator-arrow"></i>
        </a>

        <a href="detail-indikator.html" class="indicator-item">
            <div class="indicator-icon">
                <i class="fa-solid fa-syringe"></i>
            </div>
            <div>
                <div class="indicator-title">Cakupan Imunisasi Dasar Lengkap</div>
                <p class="indicator-desc">
                    Persentase bayi yang memperoleh imunisasi dasar lengkap.
                </p>
            </div>
            <i class="fa-solid fa-chevron-right indicator-arrow"></i>
        </a>

        <a href="detail-indikator.html" class="indicator-item">
            <div class="indicator-icon">
                <i class="fa-solid fa-hospital"></i>
            </div>
            <div>
                <div class="indicator-title">Rasio Tenaga Kesehatan</div>
                <p class="indicator-desc">
                    Ketersediaan tenaga kesehatan dibandingkan jumlah penduduk.
                </p>
            </div>
            <i class="fa-solid fa-chevron-right indicator-arrow"></i>
        </a> -->

    </div>

    <p id="dataKosong" class="text-center text-secondary py-5 d-none">
        Indikator tidak ditemukan.
    </p>

</main>