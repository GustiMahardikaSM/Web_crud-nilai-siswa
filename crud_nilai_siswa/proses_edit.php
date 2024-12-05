<?php
// Include file koneksi untuk mendapatkan koneksi ke database
include 'koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];

// Query untuk update data siswa
$query = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', nilai = $nilai WHERE id = $id";
$result = mysqli_query($koneksi, $query);

// Redirect ke halaman utama setelah edit berhasil
if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal mengupdate data: " . mysqli_error($koneksi);
}
?>
