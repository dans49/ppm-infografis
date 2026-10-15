

<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">Data Puskesmas</h5>
        <a href="" class="btn btn-sm btn-primary">Tambah Data</a>
    </div>
    <?php
    if($_GET['mess'] == 'success'){
        echo "<div class='alert alert-success'>Berhasil Disimpan</div>";
    }
    ?>
    <div class="table-responsive">
        <table class="table table-hover" id="tabelPuskesmas">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Puskesmas</th>
                    <th>Kecamatan</th>
                    <th>Poned</th>
                    <th>DTP</th>
                    <th>IPAL</th>
                    <th>Ambulan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $datakec = mysqli_query($conn, "SELECT * FROM gk_puskesmas LEFT JOIN gk_kecamatan ON gk_kecamatan.idkecamatan=gk_puskesmas.idkecamatan");
                while($tampil = mysqli_fetch_assoc($datakec)){
                ?>
                <tr>
                    <td><?=$no++ ?></td>
                    <td><?=$tampil['nama_puskesmas']?? 'NULL' ?></td>
                    <td><?=$tampil['kecamatan'] ?></td>
                    <td>
                        <?php
                        if($tampil['status_poned'] == 'Y'){
                            echo "<span class='badge bg-success'>PONED</span>";
                        } else {
                            echo "<span class='badge bg-danger'>BELUM PONED</span>";
                        } ?></td>
                    <td>
                        <?php
                        if($tampil['status_dtp'] == 'Y'){
                            echo "<span class='badge bg-success'>DTP</span>";
                        } else {
                            echo "<span class='badge bg-danger'>NON DTP</span>";
                        } ?>
                    </td>
                    <td><?=($tampil['ipal'] == 1 ? 'ADA':'TIDAK ADA') ?></td>
                    <td><?=$tampil['ambulan'] ?></td>
                    <td><a href="?page=edit_puskesmas&idpkm=<?=$tampil['idpkm'] ?>" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a> 
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#tabelPuskesmas').DataTable({
        "pageLength": 25, // Munculkan 10 data per halaman
        "columnDefs": [
            { "orderable": false, "targets": 6 } // Matikan sorting untuk kolom Aksi
        ]
    });
});
</script>