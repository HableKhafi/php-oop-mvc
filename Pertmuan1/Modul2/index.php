<?php
// 1. Masukan (include) file class Mahasiswa
require_once 'Mahasiswa.php';

// 2. Instansiasi Objek DENGAN PARAMETER (Menggunakan Konstruktor __construct)
$mhs1 = new Mahasiswa("Muhammad Habiel Khafi", "2310010058");

// 3. Instansiasi Objek Kedua DENGAN PARAMETER
$mhs2 = new Mahasiswa("Zeya Zevia Amalia", "2310010178");

// Catatan: Proses destruktor (__destruct) akan berjalan di akhir eksekusi skrip,
// namun di lingkungan tertentu (seperti iframe), outputnya mungkin tidak selalu terlihat.
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 2: Konstruktor dan $this</title>
    <style>
        body { 
            font-family: 'Inter', sans-serif;
            background-color: #f4f7f9;
            margin: 0; 
            padding: 20px; }
        .container { 
            max-width: 600px; 
            margin: 20px auto; 
            background-color: white; 
            padding: 30px; 
            border-radius: 12px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
        h1 { 
            color: #2c3e50; 
            border-bottom: 2px solid #3498db; 
            padding-bottom: 10px; }
        h2 { 
            color: #34495e; 
            margin-top: 30px; }
        .output { 
            background-color: #ecf0f1; 
            border-left: 5px solid #3498db; 
            padding: 15px; 
            margin-bottom: 20px; 
            border-radius: 6px;
         }
        .constructor-output { 
            font-weight: bold; 
            color: #1e8449; 
            margin-bottom: 10px; }
        .destructor-output { 
            font-style: italic; 
            color: #c0392b; 
            margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modul 2: Konstruktor, Destruktor, dan $this</h1>

        <h2>Objek Pertama: <?php echo $mhs1->nama; ?></h2>
        <div class="output">
            <?php $mhs1->sayHello(); ?>
        </div>

        <h2>Objek Kedua: <?php echo $mhs2->nama; ?></h2>
        <div class="output">
            <?php $mhs2->sayHello(); ?>
        </div>

        <p><em>(Output konstruktor ada di atas hasil sapaan. Output destruktor akan muncul terakhir.)</em></p>
    </div>
</body>
</html>