<?php
$indic = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ppm_indikator"));
$kat = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ppm_kategori"));

?>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card p-3 bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">Indikator</h6>
                    <h2 class="fw-bold mb-0"><?=$indic ?></h2>
                </div>
                <i class="bi bi-hospital stats-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card p-3 bg-success text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">Kategori</h6>
                    <h2 class="fw-bold mb-0"> <?=number_format($kat,0,2,".") ?></h2>
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
                    <h2 class="fw-bold mb-0"></h2>
                </div>
                <i class="bi bi-cart-check stats-icon"></i>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="card p-3 bg-info text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0"></h6>
                    <h2 class="fw-bold mb-0"></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row container-fluid">

    <div class="card p-4 col-md">
        <div class="d-flex justify-content-between align-items-center mb-3 mr-4">
            <h5 class="fw-bold">Data Indikator dengan data terbaru</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No.</th>
                        <th>Kategori</th>
                        <th>Indikator</th>
                        <th>Tahun Data</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $getindic = mysqli_query($conn,"SELECT * FROM ppm_dataindikator 
                                                    INNER JOIN ppm_indikator ON ppm_indikator.id_indikator= ppm_dataindikator.id_indikator
                                                    INNER JOIN ppm_kategori ON ppm_kategori.idkategori=ppm_indikator.idkategori");
                    while($vindic = mysqli_fetch_array($getindic)){ ?>
                    <tr>
                        <td><?=$no++ ?></td>
                        <td><?=$vindic['kategori'] ?></td>
                        <td><?=$vindic['nama_indikator'] ?></td>
                        <td><?=$vindic['tahun_data'] ?></td>
                        <td><?=$vindic['nilai'] ?> <?=$vindic['satuan'] ?></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
