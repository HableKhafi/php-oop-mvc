<?php

/**
 * Class Controller - Kelas Dasar (Base Controller)
 * Menyediakan fungsionalitas dasar seperti memuat View.
 * Semua Controller aplikasi akan mewarisi kelas ini.
 */
class Controller
{
    /**
     * Metode untuk memuat View (Tampilan HTML)
     * @param string $view Nama file view (path relatif dari app/views/)
     * @param array $data Data yang akan dikirimkan ke view
     */
    public function view($view, $data = [])
    {
        // Ekstrak data array menjadi variabel individual.
        // Contoh: $data['nama'] menjadi $nama, tersedia langsung di View.
        extract($data);

        // Tentukan path lengkap file view
        $viewPath = '../app/views/' . $view . '.php';

        // Cek apakah file view ada
        if (file_exists($viewPath)) {
            // Muat file view. Variabel $data yang diekstrak sudah tersedia di sini.
            require_once $viewPath;
        } else {
            // Tampilkan pesan error jika view tidak ditemukan
            die("Error: File View tidak ditemukan di " . $viewPath);
        }
    }

    /**
     * Metode untuk memuat Model (akan diimplementasikan di Modul 9)
     * @param string $model Nama kelas Model
     * @return object Instansi dari kelas Model
     */
    public function model($model)
    {
        // Placeholder untuk Modul 9
        // Logika Model akan ditulis di sini nanti.
        die("Error: Metode Model() belum sepenuhnya diimplementasikan.");
    }
}
