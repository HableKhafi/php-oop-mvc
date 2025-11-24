<?php
// 1. Definisikan Variabel Informasi Diri
$nama_lengkap = "Muhammad Habiel Khafi";
$nim = "2310010058";
$tahun_masuk = 2023;

// 2. Definisikan Array untuk Hobi
$hobi_list = [
    "Desain & Motion Grafis",
    "Membaca",
    "Badminton"
];
?>
<!-- // 3. Tampilkan Informasi menggunakan HTML dan PHP -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Praktikan - Bagian 0</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        h1 { color: #333; }
        .data { border: 1px solid #ccc; padding: 15px; border-radius: 8px; max-width: 400px; }
    </style>
</head>
<body>
    <div class="data">
        <h1>Data Diri Praktikan</h1>
        <p><strong>Nama:</strong> <?php echo $nama_lengkap; ?></p>
        <p><strong>NIM:</strong> <?php echo $nim; ?></p>
        <p><strong>Tahun Masuk:</strong> <?php echo $tahun_masuk; ?></p>
        
        <h3>Daftar Hobi</h3>
        <ul>
            <?php foreach ($hobi_list as $hobi): ?>
                <li><?php echo $hobi; ?></li>
            <?php endforeach; ?>
        </ul>
        
        <em>Pastikan output ini tampil sempurna di browser Anda.</em>
    </div>
</body>
</html>