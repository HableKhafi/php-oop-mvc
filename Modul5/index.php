<?php
// Masukkan (include) semua file kelas dan interface
require_once 'User.php';
require_once 'LoginInterface.php'; // Penting: Muat Interface
require_once 'Admin.php';

// 1. Instansiasi Objek User Biasa
$user1 = new User("Zeviyaa");

// 2. Instansiasi Objek Admin (Kelas Anak yang juga mengimplementasikan Interface)
$admin1 = new Admin("Hable Khafi");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 5: Abstraction & Interface</title>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f7f9; margin: 0; padding: 20px; }
        .container { max-width: 700px; margin: 20px auto; background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        h2 { color: #34495e; margin-top: 30px; }
        .output { background-color: #ecf0f1; border-left: 5px solid #3498db; padding: 15px; margin-bottom: 20px; border-radius: 6px; }
        .role-user { color: #27ae60; font-weight: bold; }
        .role-admin { color: #e74c3c; font-weight: bold; }
        .action { color: #16a085; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modul 5: Abstraction & Interface (Kontrak Perilaku)</h1>

        <h2>Administrator (Kelas Admin)</h2>
        <div class="output">
            <p><?php echo $admin1->salam(); ?></p>

            <p class="action">Action 1: <?php echo $admin1->login(); ?></p>
            <p class="action">Action 2: <?php echo $admin1->kelolaSistem(); ?></p>
            <p class="action">Action 3: <?php echo $admin1->logout(); ?></p>
        </div>

        <h2>Pengguna Biasa (Kelas User)</h2>
        <div class="output">
            <p><?php echo $user1->salam(); ?></p>
            <p style="color: red;">*Objek User tidak dapat memanggil login() karena tidak mengimplementasikan LoginInterface.</p>
        </div>

        <p><em>(Kelas Admin kini memiliki semua metode dari User PLUS semua metode yang diwajibkan oleh LoginInterface.)</em></p>
    </div>
</body>
</html>