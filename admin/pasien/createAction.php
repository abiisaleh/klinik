<?php
require_once "../../model/pasienModel.php";

if (isset($_POST)) {
    $model = new pasienModel;

    session_start();

    // apakah query simpan berhasil?
    if ($model->create($_POST)) {
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
    header('Location: /admin/pasien/');
} else {
    die("Akses dilarang...");
}
