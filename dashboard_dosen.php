<?php
// dashboard_dosen.php
session_start();

// Cek login sederhana
if (!isset($_SESSION['dosen'])) {
    $_SESSION['dosen'] = "Dr. Ahmad Rofi'i, S.Kom., M.T.I";
}

// Data contoh untuk ditampilkan di dashboard
$mata_kuliah = [
    ["nama" => "Basis Data", "kelas" => "TI-2A", "jadwal" => "Senin, 08.00 - 10.00"],
    ["nama" => "Pemrograman Web", "kelas" => "TI-2B", "jadwal" => "Rabu, 09.00 - 11.00"],
    ["nama" => "Sistem Informasi", "kelas" => "TI-2C", "jadwal" => "Jumat, 10.00 - 12.00"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e7f0ed;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #355e3b;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        th {
            background-color: #b6d7a8;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang, <?= $_SESSION['dosen'] ?> 👋</h1>
    <h2>Daftar Mata Kuliah</h2>

    <table>
        <tr>
            <th>Nama Mata Kuliah</th>
            <th>Kelas</th>
            <th>Jadwal</th>
        </tr>
        <?php foreach ($mata_kuliah as $mk): ?>
        <tr>
            <td><?= $mk['nama'] ?></td>
            <td><?= $mk['kelas'] ?></td>
            <td><?= $mk['jadwal'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
