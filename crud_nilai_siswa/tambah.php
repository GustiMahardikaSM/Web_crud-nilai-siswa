<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <!-- Tautkan file CSS -->
    <link rel="stylesheet" href="styletambah.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Siswa</h1>
        <form action="proses_tambah.php" method="post">
            <!-- Input untuk Nama -->
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama siswa" required>

            <!-- Input untuk Kelas -->
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas siswa" required>

            <!-- Input untuk Nilai -->
            <label for="nilai">Nilai:</label>
            <input type="number" id="nilai" name="nilai" placeholder="Masukkan nilai siswa" required>

            <!-- Tombol Simpan -->
            <button type="submit">Simpan</button>
        </form>
        <!-- Tombol Kembali -->
        <div style="text-align: center; margin-top: 10px;">
            <a href="index.php" style="text-decoration: none; background-color: #FF0000; color: white; padding: 10px 20px; border-radius: 5px; display: inline-block; font-weight: bold;">Kembali</a>
        </div>
    </div>
</body>
</html>
