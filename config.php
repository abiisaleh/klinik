<?php
$server = "localhost";
$user = "root";
$password = ""; 
$db = "klinik";

$connection = mysqli_connect($server, $user, $password, $db);

if (!$connection) {
    die("Gagal..." . mysqli_connect_error());
}
?>
