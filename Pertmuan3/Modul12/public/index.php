<?php 
if( !session_id() ) session_start();

// --- BAGIAN INI YANG HILANG DI KODINGAN ANDA ---
// Kita harus memanggil (require) file-file Core yang ada di folder app/core
// Perhatikan besar/kecil huruf sesuai screenshot file Anda:

require_once '../app/core/App.php';        // Huruf 'A' besar
require_once '../app/core/Controller.php'; // Huruf 'C' besar
require_once '../app/core/database.php';   // Huruf 'd' kecil (sesuai screenshot)
require_once '../app/core/flasher.php';    // Huruf 'f' kecil (sesuai screenshot)

// Definisikan BASEURL di sini jika belum ada file config
if (!defined('BASEURL')) {
    // Ganti URL ini sesuai folder project Anda
    define('BASEURL', 'http://localhost/php-oop-mvc/Pertmuan3/Modul12/public');
}

// Jalankan Aplikasi
$app = new App;