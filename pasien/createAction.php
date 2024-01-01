<?php
require_once "../config.php";

if (isset($_POST)) {
    // ambil data dari formulir
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $nim = $_POST['nim'];
    $gejala = $_POST['gejala'];

    // buat query  
    $sql = "INSERT INTO pendaftaran (kode, nama, jk, tempatlahir, ttl, alamat, jenis,nim, gejala) 
            VALUES ('$kode', '$nama', '$jk', '$tempatlahir', '$ttl', '$alamat', '$jenis', '$nim', '$gejala')";
    $query = mysqli_query($connection, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        $_SESSION['alert'] = [
            'type' => 'success',
            'msg' => 'data berhasil dibuat',
        ];
    } else {
        $_SESSION['alert'] = [
            'type' => 'danger',
            'msg' => 'data gagal disimpan',
        ];
    }
    header('Location: /pasien/');
} else {
    die("Akses dilarang...");
}
