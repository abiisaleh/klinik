<?php
include("../config.php");

session_start();

if (!empty($_POST)) {

   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $role = $_POST['role'];

   $sql = "SELECT * FROM user WHERE email = '$email' && password = '$password' && level = '$role'";

   $result = mysqli_query($connection, $sql);

   if (mysqli_num_rows($result) > 0) {

      $row = $result->fetch_array();

      if ($row['level'] == 'admin') {

         $_SESSION['login'] = [
            'nama' => $row['nama'],
            'email' => $row['email'],
            'level' => $row['level'],
            'islogin' => true,
         ];
         header('location: /admin');
      } elseif ($row['level'] == 'dokter') {

         $_SESSION['login'] = [
            'nama' => $row['nama'],
            'email' => $row['email'],
            'level' => $row['level'],
            'islogin' => true,
         ];
         header('location: /dokter');
      } elseif ($row['level'] == 'pimpinan') {

         $_SESSION['login'] = [
            'nama' => $row['nama'],
            'email' => $row['email'],
            'level' => $row['level'],
            'islogin' => true,
         ];
         header('location: /pimpinan');
      }
   } else {
      $error[] = 'incorrect email or password!';
   }
};
