<?php
include("config.php");

$sql = "SELECT * FROM registrasi";
$query = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA_PASIEN</title>
</head>

<body>
    <header>
        <h3>DATA_PASIEN</h3>
    </header>

    <nav>
        <a href="registrasi.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Pasien</th>
            <th>Id Pasien</th>
            <th>Gejala</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        while($registrasi = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$registrasi['id']."</td>";
            echo "<td>".$registrasi['kode']."</td>";
            echo "<td>".$registrasi['nama']."</td>";
            echo "<td>".$registrasi['jk']."</td>";
            echo "<td>".$registrasi['tempatlahir']."</td>";
            echo "<td>".$registrasi['ttl']."</td>";
            echo "<td>".$registrasi['alamat']."</td>";
            echo "<td>".$registrasi['jenis']."</td>";
            echo "<td>".$registrasi['nim']."</td>";
            echo "<td>".$registrasi['gejala']."</td>";

            echo "<td>";
            echo "<a href='form_edit.php?id=".$registrasi['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$registrasi['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <!-- Back button -->
    <button onclick="goBack()">Back</button>

    <script>
    function goBack() { 
        window.location.href = 'bagian1.html';
    }
    </script>
</body>
</html>
