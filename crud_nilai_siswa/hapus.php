<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM siswa WHERE id = $id";
mysqli_query($koneksi, $query);

header("Location: index.php");
?>
