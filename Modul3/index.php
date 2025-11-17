<?php
// 1. Masukkan (include) file class Mahasiswa.
require_once 'Mahasiswa.php';

// 2. Instansiasi Objek DENGAN PARAMETER
// $nim valid (7 digit)
$mhs1 = new Mahasiswa("Muhammad Habiel Khafi", "2310010058");

// $nim TIDAK VALID, akan ditolak oleh konstruktor/setter
$mhs2 = new Mahasiswa("Zeya Zevia Amalia", "23100100"); // NIM 8 digit

// 3. Demonstrasi Akses Data (Setter/Getter)

// Mencoba mengubah NIM (Getter) - Sukses
echo "<h3>Percobaan MENGUBAH NIM (mhs1) ---</h3>";
$mhs1->setNim("1234567"); // 7 digit - Sukses

// Mencoba mengubah NIM (Getter) - Gagal (validasi di dalam setter menolak)
$mhs1->setNim("999"); // 3 digit - Gagal
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 3: Encapsulation</title>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f7f9; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 20px auto; background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        h2 { color: #34495e; margin-top: 30px; }
        .output { background-color: #ecf0f1; border-left: 5px solid #3498db; padding: 15px; margin-bottom: 20px; border-radius: 6px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modul 3: Encapsulation (Pengecekan Data)</h1>

        <h2>Objek Pertama: <?php echo $mhs1->nama; ?></h2>
        <div class="output">
            <?php $mhs1->sayHello(); ?>
            <p><strong>NIM Saat Ini (via Getter):</strong> <span style="font-weight: bold; color: #1e8449;"><?php echo $mhs1->getNim(); ?></span></p>
        </div>

        <h2>Objek Kedua: <?php echo $mhs2->nama; ?></h2>
        <div class="output">
            <?php $mhs2->sayHello(); ?>
            <p><strong>NIM Saat Ini (via Getter):</strong> <span style="font-weight: bold; color: #c0392b;"><?php echo $mhs2->getNim(); ?></span></p>
            <p style="color: red;">*Objek ini dibuat dengan NIM tidak valid, namun Setter mencegahnya masuk ke properti.</p>
        </div>

        <p><em>(Coba hapus method **getNim()** dari kode dan akses NIM secara langsung: **$mhs1->nim**. Anda akan mendapatkan Fatal Error karena NIM bersifat private!)</em></p>
    </div>
</body>
</html>