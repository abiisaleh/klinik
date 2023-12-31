<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir']; // tambahkan titik koma di akhir baris ini
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $nim = $_POST['nim'];
    $gejala = $_POST['gejala'];

    // tambahkan variabel id yang digunakan dalam pernyataan UPDATE
    $id = $_POST['id'];

    // buat query update
    $sql = "UPDATE registrasi SET id='$id',kode='$kode', nama='$nama', jk='$jk', tempatlahir='$tempatlahir', ttl='$ttl', alamat='$alamat', jenis='$jenis', nim='$nim', gejala='$gejala' WHERE id=$id";
    $query = mysqli_query($connection, $sql);

    // apakah query update berhasil?
    if($query) {
        // kalau berhasil alihkan ke halaman data_pasien.php
        header('Location: data_pasien.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>
