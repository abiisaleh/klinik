<?php
include("../config.php");

if (!isset($_GET['id'])) {
    header('Location: pasien');
}
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($connection, $sql);

$result = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}

$title = "Ubah Pasien";
include "../template/header.php";
?>

<div class="col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="editAction.php" method="POST">
                    <div class="form-body">
                        <div class="row">
                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                            <div class="col-md-4">
                                <label for="kode">Kode</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" name="kode" value="<?= $result['kode'] ?>" placeholder="kode pasien" />
                            </div>

                            <div class="col-md-4">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" name="nama" value="<?= $result['nama'] ?>" placeholder="nama lengkap" />
                            </div>

                            <div class="col-md-4">
                                <label for="nama">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8 form-group py-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan" <?= $result['jk'] == 'P' ? 'checked' : '' ?> value="P">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>

                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" <?= $result['jk'] == 'L' ? 'checked' : '' ?> value="L">
                                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="tempatlahir">Tempat Lahir</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" name="tempatlahir" value="<?= $result['tempatlahir'] ?>" placeholder="tempat lahir" />
                            </div>
                            <div class="col-md-4">
                                <label for="ttl">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="date" name="ttl" id="ttl">
                            </div>

                            <div class="col-md-4">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" name="alamat" value="<?= $result['alamat'] ?>" placeholder="masukkan alamat lengkap" />
                            </div>


                            <div class="col-md-4">
                                <label for="jenis">Jenis pasien</label>
                            </div>
                            <div class="col-md-8 form-group">

                                <select class="form-select" name="jenis" id="jenis">
                                    <option <?= $result['jenis'] == "umum" ? 'selected' : '' ?> value="umum">Umum</option>
                                    <option <?= $result['jenis'] == "mahasiswa" ? 'selected' : '' ?> value="mahasiswa">Mahasiswa</option>
                                    <option <?= $result['jenis'] == "dosen" ? 'selected' : '' ?> value="dosen">Dosen</option>
                                </select>
                            </div>


                            <div class="col-md-4">
                                <label for="nim">ID Pasien</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" name="nim" value="<?= $result['nim'] ?>" placeholder="masukkan id pasien" />
                            </div>
                            <div class="col-md-4">
                                <label for="gejala">Gejala</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input class="form-control" type="text" name="gejala" value="<?= $result['gejala'] ?>" placeholder="masukkan gejala pasien" />
                            </div>

                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "../template/footer.php" ?>