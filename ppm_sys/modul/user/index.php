

<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Data User</h5>
        <a href="" class="btn btn-sm btn-primary">Tambah Data</a>
    </div>
    <?php
    if($_GET['mess'] == 'success'){
        echo "<div class='alert alert-success'>Berhasil Disimpan</div>";
    }
    ?>
    <div class="table-responsive">
        <table class="table table-hover" id="tabeluser">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $datau = mysqli_query($conn, "SELECT * FROM gk_user");
                while($tampil = mysqli_fetch_assoc($datau)){
                ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?=$tampil['nama_user'] ?></td>
                    <td><?=$tampil['email'] ?? '...' ?></td>
                    <td><?=$tampil['nama_lengkap'] ?></td>
                    <td>
                        <?php
                        if($tampil['statusdata'] == 'AKTIF'){
                            echo "<span class='badge bg-success'>AKTIF</span>";
                        } else {
                            echo "<span class='badge bg-danger'>NONAKTIF</span>";
                        } ?></td>
                    <td><a href="?page=edit_user&iduser=<?=$tampil['idpengguna'] ?>" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a> 
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#tabeluser').DataTable();
});
</script>