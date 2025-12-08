<?php 
class Flasher {
    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function flash() {
        if( isset($_SESSION['flash']) ) {
            // Menggunakan class 'pesan-flash' yang didefinisikan di Header
            echo '<div class="pesan-flash pesan-' . $_SESSION['flash']['tipe'] . '">
                    Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                  </div>';
            unset($_SESSION['flash']);
        }
    }
}