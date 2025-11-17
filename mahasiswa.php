<?php

// Kelas Mahasiswa (Blueprint Objek Mahasiswa)
// Modul 1: Konsep Dasar Class & Object

class Mahasiswa
{
    // Properti (Attributes) - Data yang memiliki objek
    public $nama;
    public $nim;

    public function sayHello()
    {
        // Menggunakan varibel internal kelas
        echo "Halo, saya adalah Mahasiswa". $this->nama . ".<br>";
        echo "NIM saya adalah ". $this->nim . ". Selamat datang di dunia OOP!";

    }
}
// Catatan : Kelas Mahasiswa tidak akan dieksekusi disini, 
// Melainkan di file index.php.
?>