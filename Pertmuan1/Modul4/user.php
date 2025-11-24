<?php

/**
 * Kelas Induk (Parent Class) untuk semua pengguna.
 * Mewakili pengguna dasar dengan properti nama dan peran.
 */
class User
{
    protected $nama; // Menggunakan protected agar bisa diakses oleh kelas anak
    protected $role = 'user';

    /**
     * Konstruktor User.
     */
    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "--> Objek User **{$this->nama}** berhasil dibuat.<br>";
    }

    /**
     * Metode dasar sapaan.
     */
    public function salam()
    {
        return "Halo, saya **{$this->nama}**, peran saya adalah **{$this->role}**.";
    }

    /**
     * Metode yang bisa diakses oleh kelas anak.
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Destruktor (untuk modul sebelumnya, dipertahankan sebagai contoh)
     */
    public function __destruct()
    {
        echo "--> Objek User **{$this->nama}** telah dihancurkan.<br>";
    }
}