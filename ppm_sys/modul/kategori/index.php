
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Data Kategori</h5>
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
                    <th>Nama Kategori</th>
                    <th>Slug</th>
                    <th>Icon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $datakat = mysqli_query($conn,"SELECT * FROM ppm_kategori");
                while($tampil = mysqli_fetch_array($datakat)){
                ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?=$tampil['kategori'] ?></td>
                    <td><?=$tampil['slug'] ?></td>
                    <td><span class="fa <?=$tampil['icon'] ?>"></span></td>
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