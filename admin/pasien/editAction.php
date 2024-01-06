<?php
require_once "../../model/pasienModel.php";

// cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST)) {

    $model = new pasienModel;

    session_start();

    // apakah query update berhasil?
    if ($model->update($_POST['id'], $_POST)) {
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
    header('Location: /admin/pasien/');
} else {
    die("Akses dilarang...");
}
