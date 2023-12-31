<!DOCTYPE html>
<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
 <h1>Pencarian Mahasiswa - Share28s.COM</h1>
 
 <form method="GET" action="cari.php" >
  <label>Kata Pencarian : </label>
  <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
  <button type="submit">Cari</button>
 </form>
 <br/>
 <table border="1">
  <thead>
   <tr>
    <th>ID KELAS</th>
    <th>NAMA KELAS</th>
    <th>DOSEN KELAS</th>
   </tr>
  </thead>

  <tbody>
   <?php
   //untuk menyambungkan dengan file koneksi.php
   include('config.php');
    //jika kita klik cari, maka yang tampil query cari ini
    if(isset($_GET['kata_cari'])) {
     //menampung variabel kata_cari dari form pencarian
     $kata_cari = $_GET['kata_cari'];
     // mencari data dengan query
     $query = "SELECT * FROM mahasiswa WHERE id like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR jk like '%".$kata_cari."%' ORDER BY id ASC";
    } else {
     //jika tidak ada pencarian, default yang dijalankan query ini
     $query = "SELECT * FROM mahasiswa ORDER BY id ASC";
    }
    $result = mysqli_query($connection, $query);
    if(!$result) {
     die("Query Error : ".mysqli_errno($connection)." - ".mysqli_error($connection));
    }
    //kalau ini melakukan foreach atau perulangan
    while ($row = mysqli_fetch_assoc($result)) {
   ?>
   <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['jk']; ?></td>
    <td><?php echo $row['alamat']; ?></td>
   </tr>
   <?php
   }
   ?>
  </tbody>
 </table>
</body>
</html>