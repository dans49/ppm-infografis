<?php
$query = mysqli_query($conn, "SELECT * FROM gk_puskesmas WHERE idpkm='$_GET[idpkm]'");
$show = mysqli_fetch_array($query);
?>

<div class="card shadow-lg card-admin">
    <div class="card-header bg-info text-white p-3">
        <h5 class="mb-0"><i class="bi bi-pencil-square me-2 text-warning"></i> Form Input Data Puskesmas</h5>
    </div>
    <div class="card-body p-4">
        <form action="" method="POST">
            
            <input type="hidden" name="idpkm" value="<?=$show['idpkm'] ?>">
            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label fw-bold"><i class="bi bi-info-circle me-1"></i> Informasi Dasar</label>
                    <hr class="mt-0">
                </div>
                <div class="col-md-7">
                    <label class="form-label">Nama Puskesmas</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-hospital"></i></span>
                        <input type="text" name="nama_puskesmas" class="form-control" placeholder="Masukan nama puskesmas..." value="<?=$show['nama_puskesmas'] ?>" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <label class="form-label">Pilih Kecamatan</label>
                    <select name="idkecamatan" id="pilihKec" class="form-control" >
                        <option value="">PILIH</option>
                        <?php
                        $qkec = mysqli_query($conn, "SELECT * FROM gk_kecamatan");
                        while ($showkec = mysqli_fetch_array($qkec)) {
                            if($show['idkecamatan'] == $showkec['idkecamatan']){
                                $cek = "selected";
                            } else {
                                $cek = "";
                            }
                            echo "<option value='$showkec[idkecamatan]' data-nama='$showkec[kecamatan]' $cek >$showkec[kecamatan]</option>";
                        }
                        ?>
                    </select>
                </div>
                
            </div>

            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label fw-bold"><i class="bi bi-geo-alt me-1"></i> Titik Koordinat</label>
                    <hr class="mt-0">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Latitude (Lintang)</label>
                    <input type="text" step="any" name="lat_pkm" class="form-control" value="<?=$show['lat_pkm'] ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Longitude (Bujur)</label>
                    <input type="text" step="any" name="long_pkm" class="form-control" value="<?=$show['long_pkm'] ?>">
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label fw-bold"><i class="bi bi-check2-square me-1"></i> Status Fasilitas</label>
                    <hr class="mt-0">
                </div>
                
                <div class="col-md-4">
                    <label class="toggle-card">
                        <input type="checkbox" name="status_dtp" value="Y" id="fDtp" 
                            <?= ($show['status_dtp'] == 'Y') ? 'checked' : '' ?>>
                        
                        <div class="card-content">
                            <div class="d-flex align-items-center mb-2">
                                <span class="switch-custom"></span>
                                <span class="ms-2 fw-bold">DTP</span>
                            </div>
                            <small class="text-muted d-block">Daya Tampung Perawatan</small>
                        </div>
                    </label>
                </div>

                <div class="col-md-4">
                    <label class="toggle-card">
                        <input type="checkbox" name="status_poned" value="Y" id="fPoned" 
                            <?= ($show['status_poned'] == 'Y') ? 'checked' : '' ?>>
                        <div class="card-content">
                            <div class="d-flex align-items-center mb-2">
                                <span class="switch-custom"></span>
                                <span class="ms-2 fw-bold">PONED</span>
                            </div>
                            <small class="text-muted d-block">Obstetri Neonatal</small>
                        </div>
                    </label>
                </div>

                <div class="col-md-4">
                    <label class="toggle-card">
                        <input type="checkbox" name="ipal" value="1" id="fIpal" 
                            <?= ($show['ipal'] == 1) ? 'checked' : '' ?>>
                        <div class="card-content">
                            <div class="d-flex align-items-center mb-2">
                                <span class="switch-custom"></span>
                                <span class="ms-2 fw-bold">IPAL</span>
                            </div>
                            <small class="text-muted d-block">Instalasi Air Limbah</small>
                        </div>
                    </label>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end border-top pt-3">
                <a href="?page=puskesmas" type="reset" class="btn btn-light px-4 border">Kembali</a>
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
