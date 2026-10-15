<div class="card shadow-lg card-admin">
    <div class="card-header bg-info text-white p-3">
        <h5 class="mb-0"><i class="bi bi-pencil-square me-2 text-warning"></i> Form Input Data Indikator</h5>
    </div>
    <div class="card-body p-4">
        <form action="" method="POST">
            
            <div class="row g-3 mb-4">
                <div class="col-12">
                    <label class="form-label fw-bold"><i class="bi bi-info-circle me-1"></i> Informasi Dasar</label>
                    <hr class="mt-0">
                </div>
                <!-- <div class="col-md-3">
                    <label class="form-label">Kode Indikator</label>
                    <input type="text" name="kode_indikator" class="form-control" disabled>
                </div> -->
                <div class="col-md-7">
                    <label class="form-label">Nama Indikator</label>
                    <input type="text" name="nama_indikator" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Satuan</label>
                    <input type="text" name="satuan" class="form-control" required>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-5">
                    <label class="form-label">Pilih Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" >
                        <option value="">PILIH</option>
                        <?php
                        $qkateg = mysqli_query($conn, "SELECT * FROM ppm_kategori");
                        while ($showkateg = mysqli_fetch_array($qkateg)) {
                            echo "<option value='$showkateg[idkategori]' data-nama='$showkateg[kategori]' >$showkateg[kategori]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-5">
                    <label class="form-label">Pilih Arah Capaian</label>
                    <select name="arah" id="arah" class="form-control" >
                        <option value='' >PILIH</option>
                        <option value='naik' >NAIK</option>
                        <option value='turun' >TURUN</option>
                        <option value='netral' >NETRAL</option>
                    </select>
                </div>

            </div>
            <div class="row g-3 mb-4">
              
                <div class="col-md-5">
                    <label class="form-label">Pilih Level Wilayah</label>
                    <select name="wilayah" id="wilayah" class="form-control" >
                        <option value='' >PILIH</option>
                        <option value='kabupaten' >KABUPATEN</option>
                        <option value='kecamatan' >KECAMATAN</option>
                        <option value='desa' >DESA</option>
                    </select>
                </div>
                <div class="col-md-7">
                    <label class="form-label">Pilih Perangkat Daerah</label>
                    <select name="opd" id="pilihOPD" class="form-control" >
                        <option value="">PILIH</option>
                        <?php
                        $qopd = mysqli_query($conn, "SELECT * FROM ppm_opd");
                        while ($showopd = mysqli_fetch_array($qopd)) {
                            echo "<option value='$showopd[idopd]' data-nama='$showopd[nama_opd]' >$showopd[nama_opd]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row g-3 mb-4">
            
                <div class="col-md-12">
                    <label class="form-label">Definisi</label>
                    <textarea name="definisi" class="form-control" rows="5"></textarea>
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
$nm_ind = $_POST['nama_indikator'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$arah_capaian = $_POST['arah'];
$wilayah = $_POST['wilayah'];
$opd = $_POST['opd'];
$definisi = $_POST['definisi'];
$tgl = date('Y-m-d H:i:s');

if($_POST['simpan'] == 'Simpan Data') {
    $simpan = mysqli_query($conn, "INSERT INTO ppm_indikator  VALUE ('','$kategori','$opd','$satuan',NULL,'$nm_ind','$definisi',NULL,'$arah_capaian','$wilayah','AKTIF','$tgl') ");
    if($simpan){
        echo "<script>document.location.href='?page=indikator&mess=success'</script>";
    }
}


?>
