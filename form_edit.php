<!DOCTYPE html>
<html>
<head>
    <title>EDIT_DATAPASIEN</title>
</head>

<body>
    <header>
        <h3>EDIT DATA PASIEN</h3>
    </header>

    <?php
    include("config.php");
    if (!isset($_GET['id'])) {
        header('Location: data_pasien.php');
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM registrasi WHERE id=$id";
    $query = mysqli_query($connection, $sql);
    $registrasi = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        die("Data tidak ditemukan...");
    }
    ?>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $registrasi['id']; ?>" />
            <p>
                <label for="kode">Kode: </label>
                <input type="text" name="kode" placeholder="Kode" value="<?php echo $registrasi['kode']; ?>" />
            </p>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama" value="<?php echo $registrasi['nama']; ?>" />
            </p>
            <p>
                <label>Jenis Kelamin: </label>
                <br><br>
                <input type="radio" name="jk" id="perempuan" value="p" <?php echo ($registrasi['jk'] == 'p') ? 'checked' : ''; ?>>
                <label for="perempuan">Perempuan</label>

                <input type="radio" name="jk" id="laki-laki" value="l" <?php echo ($registrasi['jk'] == 'l') ? 'checked' : ''; ?>>
                <label for="laki-laki">Laki-laki</label>
            </p>
            <p>
                <label for="tempatlahir">Tempat Lahir: </label>
                <input type="text" name="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $registrasi['tempatlahir']; ?>" />
            </p>
            <p>
                <label for="ttl">Tanggal Lahir: </label>
                <input type="date" name="ttl" value="<?php echo $registrasi['ttl']; ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $registrasi['alamat']; ?>" />
            </p>
            <p>
                <label for="jenis">Jenis Pasien: </label>
                <select name="jenis">
                    <option value="" disabled>Pilih jenis pasien</option>
                    <option value="umum" <?php echo ($registrasi['jenis'] == 'umum') ? 'selected' : ''; ?>>Umum</option>
                    <option value="mahasiswa" <?php echo ($registrasi['jenis'] == 'mahasiswa') ? 'selected' : ''; ?>>Mahasiswa</option>
                    <option value="dosen" <?php echo ($registrasi['jenis'] == 'dosen') ? 'selected' : ''; ?>>Dosen</option>
                </select>
            </p>
            <p>
                <label for="nim">ID Pasien: </label>
                <input type="text" name="nim" placeholder="ID Pasien" value="<?php echo $registrasi['nim']; ?>" />
            </p>
            <p>
                <label for="gejala">Gejala: </label>
                <input type="text" name="gejala" placeholder="Gejala" value="<?php echo $registrasi['gejala']; ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>
