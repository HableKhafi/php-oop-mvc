<?php
// Pastikan kelas induk User dimuat terlebih dahulu.
require_once 'User.php';

/**
 * Kelas Anak (Child Class) Admin.
 * Mewarisi semua properti dan metode dari kelas User.
 */
class Admin extends User
{
    private $akses_level = 'full';

    /**
     * Konstruktor Admin.
     * Tidak perlu parameter role karena sudah disetel di sini.
     */
    public function __construct($nama)
    {
        // 1. Memanggil konstruktor kelas induk (User)
        parent::__construct($nama);

        // 2. Mengubah properti kelas induk secara langsung karena visibilitasnya protected.
        $this->role = 'admin';
    }

    /**
     * Method Overriding: Menimpa metode salam() dari kelas User.
     */
    public function salam()
     {
        // Menggunakan parent::salam() untuk mendapatkan sapaan default dari Induk,
        // lalu menambahkannya dengan pesan khusus Admin.
        $pesan_induk = parent::salam();
        return $pesan_induk . " Sebagai admin, saya memiliki **akses {$this->akses_level}**.";
    }

    /**
     * Metode khusus Admin.
     */
    public function kelolaSistem()
    {
        return "Admin {$this->nama} sedang mengelola data sistem.";
    }
}