<?php
// Include file koneksi untuk mendapatkan koneksi ke database
include 'koneksi.php';

// Ambil ID siswa dari parameter URL
$id = $_GET['id'];

// Query untuk mendapatkan data siswa berdasarkan ID
$query = "SELECT * FROM siswa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// Jika data tidak ditemukan, redirect ke halaman utama
if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <!-- Tautkan file CSS -->
    <link rel="stylesheet" href="styletambah.css">
</head>
<body>
    <div class="container">
        <h1>Edit Data Siswa</h1>
        <form action="proses_edit.php" method="post">
            <!-- Input tersembunyi untuk ID siswa -->
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <!-- Input untuk Nama -->
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>

            <!-- Input untuk Kelas -->
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" value="<?php echo $data['kelas']; ?>" required>

            <!-- Input untuk Nilai -->
            <label for="nilai">Nilai:</label>
            <input type="number" id="nilai" name="nilai" value="<?php echo $data['nilai']; ?>" required>

            <!-- Tombol Simpan -->
            <button type="submit">Simpan Perubahan</button>
        </form>
        <!-- Tombol Kembali -->
        <div style="text-align: center; margin-top: 10px;">
            <a href="index.php" style="text-decoration: none; background-color: #FF0000; color: white; padding: 10px 20px; border-radius: 5px; display: inline-block; font-weight: bold;">Kembali</a>
        </div>
    </div>
</body>
</html>
