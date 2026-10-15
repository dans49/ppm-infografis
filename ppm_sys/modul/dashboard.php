<?php
$pkm = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM gk_puskesmas"));
$pkmdtp = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM gk_puskesmas WHERE status_dtp='Y'"));
$pkmponed = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM gk_puskesmas WHERE status_poned='Y'"));
$pkm = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM gk_puskesmas"));
$kecjum = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM gk_kecamatan ORDER BY jml_penduduk DESC"));

?>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card p-3 bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">Puskesmas</h6>
                    <h2 class="fw-bold mb-0"><?=$pkm ?></h2>
                </div>
                <i class="bi bi-hospital stats-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 bg-success text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">Kecamatan <b><?=$kecjum['kecamatan'] ?></b> Jumduk Terbanyak</h6>
                    <h2 class="fw-bold mb-0"> <?=number_format($kecjum['jml_penduduk'],0,2,".") ?> Jiwa</h2>
                </div>
                <i class="bi bi-people-fill stats-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 bg-warning text-dark">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">Jumlah Puskesmas PONED</h6>
                    <h2 class="fw-bold mb-0"><?=$pkmponed ?></h2>
                </div>
                <i class="bi bi-cart-check stats-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 bg-info text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">Jumlah Puskesmas DTP</h6>
                    <h2 class="fw-bold mb-0"><?=$pkmdtp ?></h2>
                </div>
                <i class="bi bi-eye stats-icon"></i>
            </div>
        </div>
    </div>
</div>

<div class="row container-fluid">

    <div class="card p-4 col-md-6">
        <div class="d-flex justify-content-between align-items-center mb-3 mr-4">
            <h5 class="fw-bold">Kecamatan Jumlah Penduduk > 60.000</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No.</th>
                        <th>Kecamatan</th>
                        <th>Jumlah Penduduk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $jumduk = mysqli_query($conn, "SELECT * FROM gk_kecamatan WHERE jml_penduduk > 60000 ORDER BY jml_penduduk DESC");
                    while ($row = mysqli_fetch_array($jumduk)) { ?>
                    <tr>
                        <td><?=$no++ ?></td>
                        <td><?=$row['kecamatan'] ?></td>
                        <td><?=number_format($row['jml_penduduk'],0,2,".") ?> Jiwa</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card p-4 ml-2 col-md-6">
        <div class="justify-content-between align-items-center mb-3">
            <h5 class="fw-bold">Puskesmas DTP dan PONED</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No.</th>
                        <th>Puskesmas</th>
                        <th>Status DTP</th>
                        <th>Status PONED</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $pkmfull = mysqli_query($conn, "SELECT * FROM gk_puskesmas WHERE status_dtp='Y' AND status_poned='Y'");
                    while ($rowpkm = mysqli_fetch_array($pkmfull)) { ?>
                    <tr>
                        <td><?=$no++ ?></td>
                        <td><?=$rowpkm['nama_puskesmas'] ?></td>
                        <td><span class='badge bg-success'>DTP</span></td>
                        <td><span class='badge bg-success'>PONED</span></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
