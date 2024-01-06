<?php
require_once "../model/pasienModel.php";

if (isset($_GET['id'])) {

    $model = new pasienModel;

    session_start();

    if ($model->delete($_GET['id'])) {
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
