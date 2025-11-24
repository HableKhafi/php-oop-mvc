<?php
/**
 * Class App - Router Sederhana
 * bertanggung jawab memecah URL, memanggil Controller, Method, dan mengirim Parameter.
 */
class App {

    // Properti default
    protected $controller = 'Home'; // Controller Default (jika URL kosong)
    protected $method = 'index'; // Method default
    protected $params = []; // Parameter default

    public function __construct()
    {
        // 1. Dapatkan dan proses URL
        $url = $this->parseURL();

        // 2. Tentukan Controller
        // Cek apakah ada controller dengan nama yang diminta di folder 'app/controllers/'
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]); // Hapus nama controller dari array URL
        }

        // Muat Controller yang benar
        require_once '../app/controllers/' . $this->controller . '.php';

        // Buat Instansi Controller
        $this->controller = new $this->controller;

        // 3. Tentukan Method
        // Cek apakah elemen ke-1 (method) ada setelah controller
        if (isset($url[1])) {
            // Cek apakah method tersebut benar-benar ada di dalam class Controller yang dimuat
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]); // Hapus nama method dari array URL
            }
        }

        // 4. Tentukan Parameter
        // Ambil semua array URL (jika ada) sebagai parameter
        if (!empty($url)) {
            $this->params = array_values($url); // Reset index array agar rapi
        }

        // 5. Jalankan Controller, method, dan kirimkan Parameter
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Metode untuk mengambil dan membersihkan URL
     */
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            // Hilangkan karakter '/' di akhir URL
            $url = rtrim($_GET['url'], '/');
            // Hilangkan karakter-karakter yang tidak diinginkan
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Pecah string URL menjadi array
            $url = explode('/', $url);

            // Konversi elemen pertama ke Huruf Besar Awal (Controller name convention)
            $url[0] = ucfirst($url[0]);
        }
        
        // Jika URL kosong, kembalikan array berisi controller default
        if(empty($url)){
            return [$this->controller];
        }

        // Jika URL tidak kosong dan sudah diproses
        return $url;

        // Jika $_GET['url'] tidak disetel (akses langsung tanpa path), kembalikan controller default
        return [$this->controller];
    }
}