<?php
$query = mysqli_query($conn, "SELECT * FROM ppm_indikator WHERE id_indikator='$_GET[indikator]'");
$viewq = mysqli_fetch_array($query);
?>

<div class="card shadow-lg card-admin">
    <div class="card-header bg-success text-white p-3">
        <h5 class="mb-0"><i class="bi bi-pencil-square me-2 text-warning"></i> Form Input Detail Indikator</h5>
    </div>
    <div class="card-body p-4">
        <form action="" method="POST">
            
            <input type="hidden" name="iddata" value="<?=$viewq['id_indikator'] ?>">

            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label fw-bold"><i class="bi bi-info-circle me-1"></i> Informasi Dasar</label>
                    <hr class="mt-0">
                </div>
                <div class="col-md-7">
                    <label class="form-label">Nama Indikator</label>
                    <input type="text" name="nama_indikator" class="form-control" value="<?=$viewq['nama_indikator'] ?>" disabled>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Satuan</label>
                    <input type="text" name="satuan" class="form-control" value="<?=$viewq['satuan'] ?>" disabled>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-5">
                    <label class="form-label">Pilih Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" disabled>
                        <option value="">PILIH</option>
                        <?php
                        $qkateg = mysqli_query($conn, "SELECT * FROM ppm_kategori");
                        while ($showkateg = mysqli_fetch_array($qkateg)) {
                            if($viewq['idkategori'] == $showkateg['idkategori']){
                                $cek = "selected";
                            } else {
                                $cek = "";
                            }
                            echo "<option value='$showkateg[idkategori]' data-nama='$showkateg[kategori]' $cek >$showkateg[kategori]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-5">
                    <label class="form-label">Pilih Arah Capaian</label>
                    <select name="arah" id="arah" class="form-control" disabled>
                        <option value='' >PILIH</option>
                        <option value='naik' <?= ($viewq['arah_capaian'] == 'naik' ? 'selected':'' ) ?>>NAIK</option>
                        <option value='turun' <?= ($viewq['arah_capaian'] == 'turun' ? 'selected':'' ) ?>>TURUN</option>
                        <option value='netral' <?= ($viewq['arah_capaian'] == 'netral' ? 'selected':'' ) ?>>NETRAL</option>
                    </select>
                </div>

            </div>
            <div class="row g-3 mb-4">
              
                <div class="col-md-5">
                    <label class="form-label">Pilih Level Wilayah</label>
                    <select name="wilayah" id="wilayah" class="form-control" disabled>
                        <option value='' >PILIH</option>
                        <option value='kabupaten' <?= ($viewq['level_wilayah'] == 'kabupaten' ? 'selected':'' ) ?>>KABUPATEN</option>
                        <option value='kecamatan' <?= ($viewq['level_wilayah'] == 'kecamatan' ? 'selected':'' ) ?>>KECAMATAN</option>
                        <option value='desa' <?= ($viewq['level_wilayah'] == 'desa' ? 'selected':'' ) ?>>DESA</option>
                    </select>
                </div>
                <div class="col-md-7">
                    <label class="form-label">Pilih Perangkat Daerah</label>
                    <select name="opd" id="pilihOPD" class="form-control" disabled>
                        <option value="">PILIH</option>
                        <?php
                        $qopd = mysqli_query($conn, "SELECT * FROM ppm_opd");
                        while ($showopd = mysqli_fetch_array($qopd)) {
                            if($viewq['idopd'] == $showopd['idopd']){
                                $cek = "selected";
                            } else {
                                $cek = "";
                            }
                            echo "<option value='$showopd[idopd]' data-nama='$showopd[nama_opd]' $cek>$showopd[nama_opd]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row g-3 mb-4">
            
                <div class="col-md-12">
                    <label class="form-label">Definisi</label>
                    <textarea name="definisi" class="form-control" rows="5" disabled><?=$viewq['definisi'] ?></textarea>
                </div>
            </div>

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

            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end border-top pt-3">
                <a href="?page=indikator" type="reset" class="btn btn-light px-4 border">Kembali</a>
                <button type="submit" class="btn btn-primary px-5 shadow" name="simpan" value="Simpan Data"><i class="bi bi-save me-2"></i>Simpan Data</button>
            </div>

        </form>
    </div>
</div>

<?php
$idin = $_POST['iddata'];
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
