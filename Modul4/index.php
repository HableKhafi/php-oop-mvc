<?php
// Masukkan (include) kedua file kelas
require_once 'User.php';
require_once 'Admin.php';

// 1. Instansiasi Objek User Biasa
$user1 = new User("Zeya Zevia Amalia");

// 2. Instansiasi Objek Admin (Kelas Anak)
$admin1 = new Admin("Muhammad Habiel Khafi");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 4: Inheritance (Pewarisan)</title>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f7f9; margin: 0; padding: 20px; }
        .container { max-width: 700px; margin: 20px auto; background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        h2 { color: #34495e; margin-top: 30px; }
        .output { background-color: #ecf0f1; border-left: 5px solid #3498db; padding: 15px; margin-bottom: 20px; border-radius: 6px; }
        .role-user { color: #27ae60; font-weight: bold; }
        .role-admin { color: #e74c3c; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modul 4: Inheritance (Pewarisan dan Admin)</h1>

        <h2>Pengguna Biasa (Kelas User)</h2>
        <div class="output">
            <p style="color: #27ae60; font-size: 1.1em;"><?php echo $user1->salam(); ?></p>
            <p>Peran yang diwarisi: <span class="role-user"><?php echo $user1->getRole(); ?></span></p>
        </div>

        <h2>Administrator (Kelas Admin)</h2>
        <div class="output">
            <p style="color: #e74c3c; font-size: 1.1em;"><?php echo $admin1->salam(); ?></p>
            <p><?php echo $admin1->kelolaSistem(); ?></p>
            <p>Peran yang diwarisi: <span class="role-admin"><?php echo $admin1->getRole(); ?></span></p>
        </div>

        <p><em>(Perhatikan bahwa objek Admin memiliki metode **salam()** yang berbeda dan dapat menggunakan metode dasar **getRole()** dari kelas User.)</em></p>
    </div>
</body>
</html>