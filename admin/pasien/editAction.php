<?php
include("../config.php");

// cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST)) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $nim = $_POST['nim'];
    $gejala = $_POST['gejala'];

    // tambahkan variabel id yang digunakan dalam pernyataan UPDATE
    $id = $_POST['id'];

    // buat query update
    $sql = "UPDATE pendaftaran SET id='$id',kode='$kode', nama='$nama', jk='$jk', tempatlahir='$tempatlahir', ttl='$ttl', alamat='$alamat', jenis='$jenis', nim='$nim', gejala='$gejala' WHERE id=$id";
    $query = mysqli_query($connection, $sql);

    session_start();

    // apakah query update berhasil?
    if ($query) {
        $_SESSION['alert'] = [
            'type' => 'warning',
            'msg' => 'data berhasil diubah',
        ];
    } else {
        $_SESSION['alert'] = [
            'type' => 'danger',
            'msg' => 'Gagal menyimpan perubahan...',
        ];
    }
    header('Location: /pasien/');
} else {
    die("Akses dilarang...");
}
