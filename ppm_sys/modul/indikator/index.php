
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Data Indikator</h5>
        <a href="?page=tambah_indikator" class="btn btn-sm btn-primary">Tambah Data</a>
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
                $datain = mysqli_query($conn,"SELECT * FROM ppm_indikator a
                                                    LEFT JOIN ppm_kategori c ON c.idkategori=a.idkategori");
                while($tampil = mysqli_fetch_array($datain)){
                    $vdataindikator = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM ppm_dataindikator WHERE id_indikator='$tampil[id_indikator]'"));
                ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?=$tampil['kategori'] ?></td>
                    <td><?=$tampil['nama_indikator'] ?></td>
                    <td><?=$vdataindikator['tahun_data'] ?></td>
                    <td><?=$vdataindikator['nilai'] ?> <?=$tampil['satuan'] ?></td>
                    <td><a href="?page=detail_indikator&indikator=<?=$tampil['id_indikator'] ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-list"></i></a> 
                        <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a> 
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