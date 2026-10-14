<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satu Data Bidang PPM Bappelitbangda Kabupaten Tasikmalaya</title>
    <link rel="icon" type="image/png" href="assets/images/kabtasik.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/kabtasik.png" alt="Logo" width="30" > <strong>SATPM BAPPELITBANGDA</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" style="font-size: 14px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=$_SERVER['PHP_SELF'] ?>"><i class="fa-solid fa-house"></i> Beranda</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-chart-column"></i> Data & Indikator</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-chart-column"></i> Data & Indikator
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            $listka = mysqli_query($conn,"SELECT * FROM ppm_kategori");
                            while ($view = mysqli_fetch_array($listka)) { ?>

                                <li><a class="dropdown-item" href="?kategori=<?=$view['slug'] ?>"><i class="fa-solid <?=$view['icon'] ?>"></i> <?=$view['kategori'] ?></a></li>
                            <?php
                            }
                            ?>
                            <!-- 
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-venus-mars"></i> Gender</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-chart-column"></i> IDM</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-map-location-dot"></i> Peta & Sebaran
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://giskesehatan.lamputrafficlight.com/" target="_blank"><i class="fa-solid fa-map"></i> Sebaran Kecamatan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-location-dot"></i> Sebaran Desa</a></li>
                            <li><a class="dropdown-item" href="https://giskesehatan.lamputrafficlight.com/" target="_blank"><i class="fa-solid fa-layer-group"></i> Peta Tematik</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-book-open"></i> Publikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-circle-info"></i> Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if(empty($_GET['page']) && empty($_GET['kategori'])){ ?>
    <section class="hero">
        <div class="hero-content">
            <h1>SATU DATA BIDANG PPM BAPPELITBANGDA<br>KABUPATEN TASIKMALAYA</h1>
            <p>Informasi terintegrasi untuk mendukung perencanaan dan evaluasi pembangunan daerah berbasis data yang akurat.</p>
        </div>
        <div class="category-wrapper">
            <div class="category-card active" data-page="kesehatan">
                <div class="category-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                <h3>PROFIL KESEHATAN</h3>
                <p>Informasi kondisi dan capaian kesehatan masyarakat</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="category-card blue" data-page="pendidikan">
                <div class="category-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <h3>PROFIL PENDIDIKAN</h3>
                <p>Data dan indikator pendidikan di setiap wilayah</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="category-card orange" data-page="kemiskinan">
                <div class="category-icon"><i class="fa-solid fa-people-group"></i></div>
                <h3>KEMISKINAN</h3>
                <p>Informasi tingkat kemiskinan dan capaian penanggulangan</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="category-card pink" data-page="stunting">
                <div class="category-icon"><i class="fa-solid fa-child-reaching"></i></div>
                <h3>STUNTING</h3>
                <p>Capaian dan sebaran stunting di setiap wilayah</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <!-- <div class="category-card purple" data-page="gender">
                <div class="category-icon"><i class="fa-solid fa-venus-mars"></i></div>
                <h3>GENDER</h3>
                <p>Data dan indikator kesetaraan gender dan pemberdayaan</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div> -->
            <div class="category-card cyan" data-page="idm">
                <div class="category-icon"><i class="fa-solid fa-chart-column"></i></div>
                <h3>IDM</h3>
                <p>Indeks Desa Membangun setiap desa/kelurahan</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <?php }

    if(empty($_GET['kategori'])){ ?>
    <section class="dashboard">
        <div class="dashboard-title">
            <h2 id="dashboard-title">PROFIL KESEHATAN KABUPATEN TASIKMALAYA</h2>
            <div class="filters">
                <div class="filter">
                    <label>Tahun</label>
                    <select>
                        <option>2025</option>
                        <option>2024</option>
                        <option>2023</option>
                    </select>
                </div>
                <div class="filter">
                    <label>Wilayah</label>
                    <select>
                        <option>Kabupaten Tasikmalaya</option>
                        <option>Singaparna</option>
                        <option>Rajapolah</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="dashboard-body">
            <aside class="sidebar">
                <div class="sidebar-header" id="sidebar-header">PROFIL KESEHATAN</div>
                <ul id="sidebar-list">
                    <li class="active">Angka Harapan Hidup</li>
                    <li>Kesehatan Ibu & Anak</li>
                    <li>Penyakit Menular</li>
                    <li>Penyakit Tidak Menular</li>
                    <li>Kesehatan Lingkungan</li>
                    <li>Fasilitas & SDM Kesehatan</li>
                    <li>Jaminan Kesehatan</li>
                </ul>
                <a href="" class="btn btn-primary"><span class="fa fa-download"></span> &nbsp; Unduh Data</a>
            </aside>

            <div class="map-area">
                <div class="map-header" id="map-title">PETA INDIKATOR KESEHATAN</div>
                <div id="map"></div>
            </div>

            <!-- <div class="info-column">
                <div class="info-panel">
                    <h3>INFORMASI WILAYAH TERPILIH</h3>
                    <h3 id="region-name">Singaparna</h3>
                    <div class="info-grid">
                        <div class="info-item">
                            <span>Penduduk</span>
                            <strong id="population">29.602 jiwa</strong>
                        </div>
                        <div class="info-item">
                            <span>Fasilitas</span>
                            <strong id="facility">1 unit</strong>
                        </div>
                        <div class="info-item">
                            <span>Indikator</span>
                            <strong id="indicator-value">87,4%</strong>
                        </div>
                    </div>
                    <div class="big-number" id="main-value">87,4%</div>
                    <p style="font-size:11px;" id="main-label">Cakupan Imunisasi Lengkap</p>
                    <p style="font-size:11px;margin:10px 0;">Status: <span class="status" id="status-value">Sedang</span></p>
                    <button class="detail-btn" type="button">Lihat Detail Wilayah →</button>
                </div>
            </div> -->
            <div class="info-column">
                <div class="info-panel">
                    <h3>INFORMASI</h3>
                    <div class="info-grid">
                        <div class="info-item">
                            <span>Level</span>
                            <strong id="levelwil">Kabupaten</strong>
                        </div>
                        <div class="info-item">
                            <span>Tahun Data</span>
                            <strong id="data-tahun">2024</strong>
                        </div>
                        <div class="info-item">
                            <span>Indikator</span>
                        </div>
                    </div>
                    <strong id="indicator">Angka Harapan Hidup</strong>
                    <div class="big-number" id="main-value">70,39 Tahun</div>
                    <!-- <p style="font-size:11px;margin:10px 0;">Status: <span class="status" id="status-value">Sedang</span></p> -->
                </div>
            </div>
        </div>

    </section>
    <?php } else if(!empty($_GET['kategori'])){
        include "modul/kategori.php";
    } ?>

    <!-- =========================
        FOOTER
    ========================= -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <img src="assets/images/kabtasik.png" alt="Logo Kabupaten Tasikmalaya" class="footer-logo">
                <div>
                    <strong>SATPM BAPPELITBANGDA</strong>
                    <p>Data untuk pembangunan Kabupaten Tasikmalaya</p>
                </div>
            </div>

            <div class="footer-menu">
                <a href="#"><i class="fa-solid fa-house"></i> Beranda</a>
                <a href="#"><i class="fa-solid fa-chart-column"></i> Data & Indikator</a>
                <a href="#"><i class="fa-solid fa-map-location-dot"></i> Peta & Sebaran</a>
                <a href="#"><i class="fa-solid fa-book-open"></i> Publikasi</a>
                <a href="#"><i class="fa-solid fa-circle-info"></i> Tentang</a>
            </div>
        </div>

        <div class="footer-bottom">
            <span>© 2026 Bappelitbangda Kabupaten Tasikmalaya</span>
            <span>Data untuk pembangunan daerah berbasis data</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const map = L.map('map').setView([-7.55, 108.10], 9.5);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors', maxZoom: 19
        }).addTo(map);

        L.marker([-7.35, 108.11]).addTo(map).bindPopup('<b>Kabupaten Tasikmalaya</b>');

        var layerWilayah = L.layerGroup().addTo(map);

        fetch('assets/gis/32.06_kecamatan.geojson')
        .then(response => response.json())
        .then(data => {
            L.geoJSON(data, {
            onEachFeature: function (feature, layer) {
                const namaKec = feature.properties.nm_kecamatan.toUpperCase();
                if (feature.properties && feature.properties.nm_kecamatan) {
                layer.bindPopup(namaKec); // Menampilkan popup saat diklik
                }
            }
            }).addTo(map);
        })

        setTimeout(function () {
            map.invalidateSize();
        }, 200);
    });
    </script>
</body>
</html>