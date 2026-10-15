<?php
$query = mysqli_query($conn, "SELECT * FROM gk_puskesmas WHERE idpkm='$_GET[idpkm]'");
$show = mysqli_fetch_array($query);
?>

<div class="card shadow-lg card-admin">
    <div class="card-header bg-info text-white p-3">
        <h5 class="mb-0"><i class="bi bi-pencil-square me-2 text-warning"></i> Form Input Data Puskesmas</h5>
    </div>
    <div class="card-body p-4">
        <form action="proses_simpan.php" method="POST">
            
            <input type="hidden" name="idpkm" value="<?=$show['idpkm'] ?>">
            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label fw-bold"><i class="bi bi-info-circle me-1"></i> Informasi Dasar</label>
                    <hr class="mt-0">
                </div>
                <div class="col-md-5">
                    <label class="form-label">Nama Puskesmas</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-hospital"></i></span>
                        <input type="text" name="nama_puskesmas" class="form-control" placeholder="Masukan nama puskesmas..." value="<?=$show['nama_puskesmas'] ?>" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Pilih Kecamatan</label>
                    <select name="idkecamatan" id="pilihKec" class="form-control" onchange="isiNamaKecamatan()">
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
                <div class="col-md-4">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" name="nm_kecamatan" class="form-control" id="nm_kecamatan" placeholder="Contoh: SINGAPARNA" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase()" value="<?=$show['nm_kecamatan'] ?>" disabled>
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
                    <div class="form-check form-switch border p-3 rounded custom-switch-card h-100">
                        <input class="form-check-input ms-0 me-2" type="checkbox" name="status_dtp" <?=($show['status_dtp'] == 'Y' ? 'checked':'') ?> value="<?=$show['status_dtp'] ?>" id="fDtp">
                        <label class="form-check-label fw-bold" for="fDtp">DTP</label>
                        <small class="d-block text-muted">Daya Tampung Perawatan</small>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-check form-switch border p-3 rounded custom-switch-card h-100">
                        <input class="form-check-input ms-0 me-2" type="checkbox" name="status_poned" <?=($show['status_poned'] == 'Y' ? 'checked':'') ?> value="<?=$show['status_poned'] ?>" id="fPoned">
                        <label class="form-check-label fw-bold" for="fPoned">PONED</label>
                        <small class="d-block text-muted">Obstetri Neonatal</small>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-check form-switch border p-3 rounded custom-switch-card h-100">
                        <input class="form-check-input ms-0 me-2" type="checkbox" name="ipal" <?=($show['ipal'] == '1' ? 'checked':'') ?> value="<?=$show['ipal'] ?>" id="fIpal">
                        <label class="form-check-label fw-bold" for="fIpal">IPAL</label>
                        <small class="d-block text-muted">Instalasi Air Limbah</small>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end border-top pt-3">
                <a href="?page=puskesmas" type="reset" class="btn btn-light px-4 border">Kembali</a>
                <button type="submit" class="btn btn-primary px-5 shadow"><i class="bi bi-save me-2"></i>Simpan Data</button>
            </div>

        </form>
    </div>
</div>

<?php
$idpkm = $_POST['idpkm'];
$nm_pkm = $_POST['nama_puskesmas'];
$idkec = $_POST['idkec'];
$kec = $_POST['kec'];

?>

<script>
function isiNamaKecamatan() {
    // Ambil elemen select
    var select = document.getElementById("pilihKec");
    // Ambil opsi yang sedang dipilih
    var selectedOption = select.options[select.selectedIndex];
    // Ambil data-nama dari opsi tersebut
    var namaKec = selectedOption.getAttribute("data-nama");
    
    // Masukkan ke input nm_kecamatan
    if (namaKec) {
        document.getElementById("nm_kecamatan").value = namaKec.toUpperCase();
    } else {
        document.getElementById("nm_kecamatan").value = "";
    }
}

// Jalankan fungsi sekali saat halaman baru dibuka (untuk mode Edit)
window.onload = function() {
    if(document.getElementById("pilihKec").value !== "") {
        isiNamaKecamatan();
    }
};
</script>