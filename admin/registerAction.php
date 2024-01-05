<?php
include("../config.php");

if (!empty($_POST)) {

   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $role = $_POST['role'];

   if ($password != $cpassword) {
      header('Location: /admin/register.php');
   }

   $sql = "INSERT INTO user (nama, email, password, role) VALUES ('$kode', '$nama', '$jk', '$tempatlahir', '$ttl', '$alamat', '$jenis', '$nim', '$gejala')";

   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';
   } else {

      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO user(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};
