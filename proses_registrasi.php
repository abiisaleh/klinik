<?php
include("config.php");

if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = isset($_POST['jk']) ? $_POST['jk'] : '';
    $tempatlahir = $_POST['tempatlahir'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $nim = $_POST['nim'];
    $gejala = $_POST['gejala'];
  
    // buat query  
    $sql = "INSERT INTO registrasi (id, kode, nama, jk, tempatlahir, ttl, alamat, jenis,nim, gejala) 
            VALUES ('$id','$kode', '$nama', '$jk', '$tempatlahir', '$ttl', '$alamat', '$jenis', '$nim', '$gejala')";
    $query = mysqli_query($connection, $sql);

    // apakah query simpan berhasil?
    if($query) {
        // kalau berhasil alihkan ke halaman menu.php dengan status=sukses
        header('Location: data_pasien.php');
    } else {
        // kalau gagal alihkan ke halaman menu.php dengan status=gagal
        header('Location: menu.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
