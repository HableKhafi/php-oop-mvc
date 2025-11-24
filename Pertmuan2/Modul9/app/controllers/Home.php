<?php

/**
 * Controller Default: Home
 * Mewarisi fungsionalitas dasar dari Base Controller
 */
class Home extends Controller // <- Mewarisi Base Controller
{
    /**
     * Method default untuk Home Controller
     */
    public function index()
    {
        // 1. Siapkan data yang akan dikirimkan ke View
        $data = [
            'judul' => 'Halaman Utama',
            'nama' => 'User MVC' // Data dinamis yang akan digunakan di View
        ];

        // 2. Panggil metode view dari Base Controller
        // Parameter pertama: path view relatif dari app/views/ (tanpa ekstensi .php)
        // Parameter kedua: array data
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}