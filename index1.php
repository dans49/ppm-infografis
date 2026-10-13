<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembangunan Kabupaten Tasikmalaya</title>
    <link rel="icon" type="image/png" href="assets/images/kabtasik.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>
<body>
    <header class="navbar">
        <div class="brand">
            <img src="assets/images/kabtasik.png" alt="Logo Kabupaten Tasikmalaya" class="logo">
            <div class="brand-text">
                <strong>SATPPM KABUPATEN<br>TASIKMALAYA</strong>
            </div>
        </div>
        <nav class="menu">
            <a href="<?=$_SERVER['PHP_SELF'] ?>" class="active"><i class="fa-solid fa-house"></i> Beranda</a>

            <div class="dropdown">
                <button class="dropdown-toggle">
                    <i class="fa-solid fa-chart-column"></i>
                    Data & Indikator
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu">
                    <a href="#"><i class="fa-solid fa-heart-pulse"></i> Kesehatan</a>
                    <a href="#"><i class="fa-solid fa-graduation-cap"></i> Pendidikan</a>
                    <a href="#"><i class="fa-solid fa-people-group"></i> Kemiskinan</a>
                    <a href="#"><i class="fa-solid fa-venus-mars"></i> Gender</a>
                    <a href="#"><i class="fa-solid fa-child-reaching"></i> Stunting</a>
                    <a href="#"><i class="fa-solid fa-chart-column"></i> IDM</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropdown-toggle">
                    <i class="fa-solid fa-map-location-dot"></i>
                    Peta & Sebaran
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu">
                    <a href="#"><i class="fa-solid fa-map"></i> Sebaran Kecamatan</a>
                    <a href="#"><i class="fa-solid fa-location-dot"></i> Sebaran Desa</a>
                    <a href="#"><i class="fa-solid fa-layer-group"></i> Peta Tematik</a>
                </div>
            </div>

            <a href="#"><i class="fa-solid fa-book-open"></i> Publikasi</a>
            <a href="#"><i class="fa-solid fa-circle-info"></i> Tentang</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>DATA UNTUK<br>PEMBANGUNAN<br>KABUPATEN TASIKMALAYA</h1>
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
            <div class="category-card purple" data-page="gender">
                <div class="category-icon"><i class="fa-solid fa-venus-mars"></i></div>
                <h3>GENDER</h3>
                <p>Data dan indikator kesetaraan gender dan pemberdayaan</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="category-card pink" data-page="stunting">
                <div class="category-icon"><i class="fa-solid fa-child-reaching"></i></div>
                <h3>STUNTING</h3>
                <p>Capaian dan sebaran stunting di setiap wilayah</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="category-card cyan" data-page="idm">
                <div class="category-icon"><i class="fa-solid fa-chart-column"></i></div>
                <h3>IDM</h3>
                <p>Indeks Desa Membangun setiap desa/kelurahan</p>
                <button type="button">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

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
                    <li class="active">Ringkasan</li>
                    <li>Kesehatan Ibu & Anak</li>
                    <li>Gizi</li>
                    <li>Imunisasi</li>
                    <li>Penyakit Menular</li>
                    <li>Penyakit Tidak Menular</li>
                    <li>Kesehatan Lingkungan</li>
                    <li>Fasilitas & SDM Kesehatan</li>
                    <li>Jaminan Kesehatan</li>
                </ul>
                <a href="" class="download"><span class="fa fa-download"></span> &nbsp; Unduh Data</a>
            </aside>

            <div class="map-area">
                <div class="map-header" id="map-title">PETA INDIKATOR KESEHATAN</div>
                <div class="map-placeholder">AREA PETA KABUPATEN TASIKMALAYA</div>
            </div>

            <div class="info-column">
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
            </div>
        </div>

    </section>
    <!-- =========================
        FOOTER
    ========================= -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">
                <img src="assets/images/kabtasik.png" alt="Logo Kabupaten Tasikmalaya" class="footer-logo">
                <div>
                    <strong>SATPPM KABUPATEN TASIKMALAYA</strong>
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

    <script src="assets/js/script.js"></script>
</body>
</html>