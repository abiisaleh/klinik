<?php
include("config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM registrasi WHERE id=$id";
    $query = mysqli_query($connection, $sql);

    if($query){
        header('Location: data_pasien.php?status=delete_success');
    } else {
        header('Location: data_pasien.php?status=delete_failed');
    }
} else {
    die("Akses dilarang...");
}
?>