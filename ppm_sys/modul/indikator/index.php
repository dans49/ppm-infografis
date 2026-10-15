
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Data Indikator</h5>
        <a href="" class="btn btn-sm btn-primary">Tambah Data</a>
    </div>

    <?php
    if($_GET['mess'] == 'success'){
        echo "<div class='alert alert-success'>Berhasil Disimpan</div>";
    }
    ?>
    
    <div class="table-responsive">
        <table class="table table-hover" id="tabelKecamatan">
            <thead class="table-light">
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Indikator</th>
                    <th>Tahun Data</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $datain = mysqli_query($conn,"SELECT * FROM ppm_dataindikator 
                                                    INNER JOIN ppm_indikator ON ppm_indikator.id_indikator= ppm_dataindikator.id_indikator
                                                    INNER JOIN ppm_kategori ON ppm_kategori.idkategori=ppm_indikator.idkategori");
                while($tampil = mysqli_fetch_array($datain)){
                ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?=$tampil['kategori'] ?></td>
                    <td><?=$tampil['nama_indikator'] ?></td>
                    <td><?=$tampil['tahun_data'] ?></td>
                    <td><?=$tampil['nilai'] ?> <?=$tampil['satuan'] ?></td>
                    <td><a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a> 
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#tabelKecamatan').DataTable();
});
</script>