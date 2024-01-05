<?php

include("../../config.php");

$sql = "SELECT * FROM pendaftaran";
$query = mysqli_query($connection, $sql);

$title = "Pasien";
include "../template/header.php";
?>

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="create.php"><i class="bi bi-plus"></i> Create</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenis Pasien</th>
                        <th>Gejala</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($result = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?= $result['kode'] ?></td>
                            <td><?= $result['nama'] ?></td>
                            <td><?= $result['jk'] == 'P' ? 'Perempuan' : 'Laki-laki' ?></td>
                            <td><?= $result['jenis'] ?></td>
                            <td><?= $result['gejala'] ?></td>

                            <td>
                                <a class="btn btn-warning btn-sm" href='edit.php?id=<?= $result['id'] ?>'>Edit</a>
                                <a class="btn btn-danger btn-sm" href='deleteAction.php?id=<?= $result['id'] ?>' onclick="return confirm('data akan dihapus');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- DataTable -->
<script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/static/js/pages/simple-datatables.js"></script>

<?php include "../template/footer.php" ?>