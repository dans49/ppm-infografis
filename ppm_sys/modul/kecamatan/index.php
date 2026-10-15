
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Data Kecamatan</h5>
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
                    <th>No</th>
                    <th>Kode Kecamatan</th>
                    <th>Kecamatan</th>
                    <th>Jumduk</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $datakec = mysqli_query($conn, "SELECT * FROM gk_kecamatan");
                while($tampil = mysqli_fetch_array($datakec)){
                ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?=$tampil['kode_kec'] ?? '...' ?></td>
                    <td><?=$tampil['kecamatan'] ?></td>
                    <td><?=number_format($tampil['jml_penduduk'],0,2,".") ?></td>
                    <td><?=$tampil['lat_kec'] ?? '...' ?></td>
                    <td><?=$tampil['long_kec'] ?? '...' ?></td>
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