<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
</head>
<body>
    <header>
        <h3>REGISTRASI_PASIEN</h3>
    </header>
    <form action="proses_registrasi.php" method="POST">
        <fieldset>
            <p>
                <label for="kode">Kode:</label>
                <input type="text" name="kode" placeholder="kode pasien"/>
            </p>

            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="nama lengkap"/>
            </p>

            <p>
            <label>Jenis Kelamin:</label>
            <br><br>
            <input type="radio" name="jk" id="perempuan" value="p">
            <label for="perempuan">Perempuan</label>

            <input type="radio" name="jk" id="laki-laki" value="l">
            <label for="laki-laki">Laki-laki</label>

            </p>
            <p>
                <label for="tempatlahir">Tempat Lahir:</label>
                <input type="text" name="tempatlahir" placeholder="tempat lahir"/>
            </p>
            <p>
            <label for="ttl">Tanggal Lahir:</label>
            <input type="date" name="ttl" id="ttl">
            </p>

            <p>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" placeholder="masukkan alamat lengkap"/>
            </p>
            <p>
            <label for="jenis">Jenis pasien:</label>
            <select name="jenis" id="jenis">
                <option value="" disabled selected>Pilih jenis pasien</option>
                <option value="umum">Umum</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="dosen">Dosen</option>
            </select>
            </p>
            <p>
                <label for="nim">ID Pasien:</label>
                <input type="text" name="nim" placeholder="masukkan id pasien"/>
            </p>
            <p>
                <label for="gejala">Gejala:</label>
                <input type="text" name="gejala" placeholder="masukkan gejala pasien"/>
            </p>

            <p>
                <input type="submit" value="DAFTAR" name="daftar"/>
            </p>
        </fieldset>
    </form>
</body>
</html>
