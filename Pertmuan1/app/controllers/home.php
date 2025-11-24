<?php

/**
 * Controller Default: Home
 * Controller ini akan dipanggil jika tidak ada controller spesifik yang diminta di URL.
 */
class Home
{

    /**
     * Method default untuk Home Controller
     */
    public function index()
    {
        echo "<h1> Selamat Datang di Aplikasi MVC Sederhana!</h1>";
        echo "<p>Anda saat ini berada di: <strong>Controller Home</strong>, Method: <strong>index</strong></p>";
        echo "<p>Sistem Routing (Modul 7) sudah berhasil mendeteksi request Anda!</p>";
        echo "<p>Coba ubah URL Anda menjadi: <strong>/Home/test/parameter1/parameter2</strong></p>";
    }

    /**
     * Method untuk menguji parameter routing
     */
    public function test($param1 = 'TIDAK ADA', $param2 = 'TIDAK ADA')
    {
        echo "<h1> Uji Coba Parameter Routing</h1>";
        echo "<p>Anda berhasil memanggil: <strong>Controller Home</strong>, Method: <strong>test</strong></p>";
        echo "<p>Parameter 1: <strong>{$param1}</strong></p>";
        echo "<p>Parameter 2: <strong>{$param2}</strong></p>";
    }
}