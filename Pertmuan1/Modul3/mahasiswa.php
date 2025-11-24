<?php

/**
 * Kelas Mahasiswa (Blueprint Objek Mahasiswa)
 * Modul 3: Encapsulation (Enkapsulasi)
 */
class Mahasiswa
{
    // Properti (Attributes)
    public $nama;
    private $nim; // <-- NIM DIBUAT PRIVATE (Enkapsulasi)

    /**
     * Konstruktor: Otomatis dipanggil saat objek dibuat.
     * Menggunakan metode setNim() untuk memastikan validasi berjalan saat inisialisasi.
     */
    public function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->setNim($nim); // <-- Menggunakan Setter saat Konstruksi
        echo "--> Objek **{$this->nama}** berhasil dibuat (Konstruktor berjalan).<br>";
    }

    /**
     * Setter (Mutator) untuk properti NIM.
     * Tempat logik validasi data diletakkan.
     */
    public function setNim($nim)
    {
        // Validasi Sederhana: NIM harus memiliki panjang 10
        if (strlen($nim) == 10) {
            $this->nim = $nim;
            return true;
        } else {
            echo "<span style='color: red;'>[ERROR ENKAPSULASI] NIM '{$nim}' tidak valid (Harus 10 digit). NIM tidak diubah.</span><br>";
            return false;
        }
    }

    /**
     * Getter (Accessor) untuk properti NIM.
     * Mengambil nilai properti privat.
     */
    public function getNim()
    {
        return $this->nim;
    }

    /**
     * Metode sayHello()
     */
    public function sayHello()
    {
        // Properti $nim diakses langsung karena di dalam kelas yang sama
        echo "Halo, saya adalah Mahasiswa " . $this->nama . ".<br>";
        echo "NIM saya adalah " . $this->nim . ". (NIM diakses via properti internal)";
    }

    /**
     * Destruktor
     */
    public function __destruct()
    {
        // Menggunakan Getter untuk memastikan nilainya bisa diakses jika properti dibuat private
        $nim_display = $this->getNim() ?? "N/A";
        echo "--> Objek **{$this->nama}** [NIM: {$nim_display}] telah dihancurkan (Destruktor berjalan).<br>";
    }
}