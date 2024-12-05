<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Nilai Siswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = "SELECT * FROM siswa";
        $result = mysqli_query($koneksi, $query);
        $no = 1;

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['kelas']}</td>
                    <td>{$row['nilai']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin ingin dihapus?\")'>Hapus</a>
                    </td>
                </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
