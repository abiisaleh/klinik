<?php
$title = "Pasien Baru";
require_once "../template/header.php"
?>

<div class="col-12">
    <div class="card">
        <div class="card-content">
            <form class="form form-horizontal" action="createAction.php" method="POST">
                <div class="card-body">
                    <div class="form-body">
                        <div class="row">

                            <div class="col-md-4">
                                <label for="kode">Kode</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input required class="form-control" type="text" name="kode" placeholder="kode pasien" />
                            </div>

                            <div class="col-md-4">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input required class="form-control" type="text" name="nama" placeholder="nama lengkap" />
                            </div>

                            <div class="col-md-4">
                                <label for="nama">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8 form-group py-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <input required class="form-check-input" type="radio" name="jk" id="perempuan" value="p">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>

                                    <div class="col-auto">
                                        <input required class="form-check-input" type="radio" name="jk" id="perempuan" value="l">
                                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="tempatlahir">Tempat Lahir</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input required class="form-control" type="text" name="tempatlahir" placeholder="tempat lahir" />
                            </div>
                            <div class="col-md-4">
                                <label for="ttl">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input required class="form-control" type="date" name="ttl" id="ttl">
                            </div>

                            <div class="col-md-4">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input required class="form-control" type="text" name="alamat" placeholder="masukkan alamat lengkap" />
                            </div>


                            <div class="col-md-4">
                                <label for="jenis">Jenis pasien</label>
                            </div>
                            <div class="col-md-8 form-group">

                                <select class="form-select" name="jenis" id="jenis">
                                    <option value="" disabled selected>Pilih jenis pasien</option>
                                    <option value="umum">Umum</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                    <option value="dosen">Dosen</option>
                                </select>
                            </div>


                            <div class="col-md-4">
                                <label for="nim">ID Pasien</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input required class="form-control" type="text" name="nim" placeholder="masukkan id pasien" />
                            </div>
                            <div class="col-md-4">
                                <label for="gejala">Gejala</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input required class="form-control" type="text" name="gejala" placeholder="masukkan gejala pasien" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "../template/footer.php" ?>