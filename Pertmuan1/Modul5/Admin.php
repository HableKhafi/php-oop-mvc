<?php
// Pastikan kelas induk User dan Interface dimuat.
require_once 'User.php';
require_once 'LoginInterface.php';

/**
 * Kelas Anak (Child Class) Admin.
 * Mewarisi dari User (extends) dan mematuhi kontrak Login (implements).
 */
class Admin extends User implements LoginInterface
{
    private $akses_level = 'full';

    /**
     * Konstruktor Admin.
     */
    public function __construct($nama)
    {
        // Memanggil konstruktor kelas induk (User)
        parent::__construct($nama);

        // Mengubah properti kelas induk secara langsung karena visibilitasnya protected.
        $this->role = 'admin';
    }

    // ===========================================
    // IMPLEMENTASI DARI LoginInterface
    // ===========================================

    /**
     * Implementasi wajib dari LoginInterface.
     */
    public function login()
    {
        return "Admin **{$this->nama}** berhasil login ke sistem dengan hak akses penuh.";
    }

    /**
     * Implementasi wajib dari LoginInterface.
     */
    public function logout()
    {
        return "Admin **{$this->nama}** berhasil logout dari sistem.";
    }

    // ===========================================
    // METHOD OVERRIDING & KHUSUS ADMIN
    // ===========================================

    /**
     * Method Overriding: Menimpa metode salam() dari kelas User.
     */
    public function salam()
    {
        // Menggunakan parent::salam() untuk mendapatkan sapaan default dari Induk
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

    // Destruktor dari User tetap diwariskan dan dijalankan otomatis.
}