<?php 
class Mahasiswa extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    // Menampilkan Form Tambah
    public function tambah() {
        $data['judul'] = 'Tambah Data Mahasiswa';
        $data['aksi'] = 'prosesTambah'; 
        $this->view('templates/header', $data);
        $this->view('mahasiswa/form', $data);
        $this->view('templates/footer');
    }

    // Menampilkan Form Ubah (dengan data lama)
    public function ubah($id) {
        $data['judul'] = 'Ubah Data Mahasiswa';
        $data['aksi'] = 'prosesUbah';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/form', $data);
        $this->view('templates/footer');
    }

    // Proses Simpan Data Baru
    public function prosesTambah() {
        if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    // Proses Simpan Perubahan
    public function prosesUbah() {
        if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id) {
        if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}