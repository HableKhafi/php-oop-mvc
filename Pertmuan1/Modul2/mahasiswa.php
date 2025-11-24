<?php

/**
 * Kelas Mahasiswa (Blueprint Objek Mahasiswa)
 * Modul 2: Konstruktor, Destruktor, dan $this
 */
class Mahasiswa
{
    // Properti (Attributes)
    public $nama;
    public $nim;

    /**
     * Konstruktor: Otomatis dipanggil saat objek dibuat (Instansiasi).
     * Digunakan untuk menginisialisasi properti objek.
     * @param string $nama Nama mahasiswa
     * @param string $nim NIM mahasiswa
     */
    public function __construct($nama, $nim)
    {
        // Menggunakan $this untuk mengisi properti kelas
        $this->nama = $nama;
        $this->nim = $nim;
        echo "--> Objek **{$this->nama}** berhasil dibuat (Konstruktor berjalan).<br>";
    }

    /**
     * Metode (Method) - Perilaku yang dapat dilakukan objek
     * Menampilkan salam sapaan.
     */
    public function sayHello()
    {
        // $this digunakan untuk mengakses properti $nama dan $nim
        echo "Halo, saya adalah Mahasiswa " . $this->nama . ".<br>";
        echo "NIM saya adalah " . $this->nim . ". Selamat datang di dunia OOP!";
    }

    /**
     * Destruktor: Otomatis dipanggil saat objek dihapus dari memori atau skrip selesai.
     */
    public function __destruct()
    {
        echo "--> Objek **{$this->nama}** telah dihancurkan (Destruktor berjalan).<br>";
    }
}