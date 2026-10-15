<div class="card shadow-lg card-admin">
    <div class="card-header bg-success text-white p-3">
        <h5 class="mb-0"><i class="bi bi-pencil-square me-2 text-warning"></i> Form Input Detail Indikator</h5>
    </div>
    <div class="card-body p-4">
        <form action="" method="POST">
            
            <input type="hidden" name="idpkm" value="<?=$show['idpkm'] ?>">

            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label fw-bold"><i class="bi bi-check2-square me-1"></i> Detail Indikator</label>
                    <hr class="mt-0">
                </div>
                
                <div class="col-md-4">
                    <label class="form-label">Tahun Data</label>
                    <input type="text" name="thn_data" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Nilai Indikator</label>
                    <input type="text" name="nilai" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Sumber Data</label>
                    <input type="text" name="sumber_data" class="form-control" required>
                </div>

                <!-- <div class="col-md-4">
                    <label class="toggle-card">
                        <input type="checkbox" name="ipal" value="1" id="fIpal" >
                        <div class="card-content">
                            <div class="d-flex align-items-center mb-2">
                                <span class="switch-custom"></span>
                                <span class="ms-2 fw-bold">IPAL</span>
                            </div>
                            <small class="text-muted d-block">Instalasi Air Limbah</small>
                        </div>
                    </label>
                </div> -->
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end border-top pt-3">
                <a href="?page=indikator" type="reset" class="btn btn-light px-4 border">Kembali</a>
                <button type="submit" class="btn btn-primary px-5 shadow" name="simpan" value="Simpan Data"><i class="bi bi-save me-2"></i>Simpan Data</button>
            </div>

        </form>
    </div>
</div>

<?php
$idpkm = $_POST['idpkm'];
$nm_pkm = $_POST['nama_puskesmas'];
$idkec = $_POST['idkecamatan'];
$lat = $_POST['lat_pkm'];
$lng = $_POST['long_pkm'];
$status_dtp = $_POST['status_dtp'] ?? 'N';
$status_poned = $_POST['status_poned'] ?? 'N';
$ipal = $_POST['ipal'] ?? '2';

if($_POST['simpan'] == 'Simpan Data') {
    $simpan = mysqli_query($conn, "UPDATE gk_puskesmas SET nama_puskesmas='$nm_pkm',idkecamatan='$idkec',lat_pkm='$lat',long_pkm='$lng',status_dtp='$status_dtp',status_poned='$status_poned',ipal='$ipal' WHERE idpkm='$idpkm'");
    if($simpan){
        echo "<script>document.location.href='?page=puskesmas&mess=success'</script>";
    }
}


?>
