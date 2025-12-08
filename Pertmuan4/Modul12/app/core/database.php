<?php
/*
 * Kelas inti untuk koneksi database menggunakan PDO
 * Berisi logika koneksi, prepared statement, dan error handling
 */
class Database
{
    // Konfigurasi Database telah diperbarui
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db_name = 'uniska_phpmvc'; // Nama database yang direvisi

    private $dbh; // Database Handler (koneksi)
    private $stmt; // Statement Handler (prepared statement)

    /**
     * Konstruktor: Membuat koneksi PDO
     */
    public function __construct()
    {
        // Data Source Name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        // Opsi (options) untuk optimasi koneksi
        $option = [
            PDO::ATTR_PERSISTENT => true, // Menjaga koneksi tetap terbuka
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Mengaktifkan error mode exception
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            // Tangani error koneksi dan hentikan aplikasi
            // Di lingkungan produksi, log error ini, jangan tampilkan pesan mentah ke user!
            die("Koneksi Database Gagal: " . $e->getMessage());
        }
    }

    /**
     * Menyiapkan query SQL menggunakan prepared statements
     * @param string $query Query SQL yang akan disiapkan
     */
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    /**
     * Binding nilai ke parameter placeholder di query
     * @param string $param Nama/indeks parameter
     * @param mixed $value Nilai yang akan di-bind
     * @param int $type Tipe data (optional)
     */
    public function bind($param, $value, $type = null)
    {
        // Tentukan tipe data secara otomatis jika tidak disediakan
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    /**
     * Menjalankan prepared statement
     */
    public function execute()
    {
        $this->stmt->execute();
    }

    /**
     * Mengambil semua hasil data dalam bentuk array asosiatif
     * @return array Hasil query
     */
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Mengambil satu baris data
     * @return array Hasil query
     */
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Menghitung jumlah baris yang terpengaruh (untuk insert, update, delete)
     * @return int Jumlah baris
     */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}