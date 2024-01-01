<?php
include("../config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM pendaftaran WHERE id=$id";
    $query = mysqli_query($connection, $sql);

    session_start();

    if ($query) {
        $_SESSION['alert'] = [
            'type' => 'danger',
            'msg' => 'data berhasil dihapus',
        ];
    } else {
        $_SESSION['alert'] = [
            'type' => 'danger',
            'msg' => 'data gagal dihapus',
        ];
    }
    header('Location: /pasien/');
} else {
    die("Akses dilarang...");
}
