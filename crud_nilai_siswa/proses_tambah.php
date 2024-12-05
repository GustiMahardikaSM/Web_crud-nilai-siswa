<?php
// Include file koneksi untuk terhubung ke database
include 'koneksi.php';

// Cek apakah data dikirim melalui POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];

    // Validasi data (opsional, bisa ditambahkan)
    if (!empty($nama) && !empty($kelas) && !empty($nilai)) {
        // Query untuk menyimpan data ke database
        $query = "INSERT INTO siswa (nama, kelas, nilai) VALUES ('$nama', '$kelas', '$nilai')";
        $result = mysqli_query($koneksi, $query);

        // Redirect ke halaman utama jika berhasil
        if ($result) {
            header("Location: index.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Semua field harus diisi!";
    }
} else {
    header("Location: tambah.php"); // Redirect ke form tambah jika tidak ada POST
}
?>
