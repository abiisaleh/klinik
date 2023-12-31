<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran mahasiswa | universitas nusaputra</title>
</head>
<body>
    <header>
        <h3>DATA NAMA KELAS</h3>
    </header>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="registrasi.php">Registrasi</a></li>
            <li><a href="data_pasien.php">Data pasien</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "registrasi berhasil!";
                } else {
                    echo "registrasi gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
</body>
</html>
