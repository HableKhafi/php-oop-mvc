<?php 

class Matakuliah extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mata Kuliah';
        $data['mks'] = $this->model('Matakuliah_model')->getAllMatakuliah();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    // -- BAGIAN TAMBAH --
    public function tambah()
    {
        $data['judul'] = 'Tambah Data Mata Kuliah';
        $data['aksi'] = 'tambah'; // Untuk penanda di form
        
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    public function simpan()
    {
        if( $this->model('Matakuliah_model')->tambahDataMatakuliah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    // -- BAGIAN UBAH --
    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Mata Kuliah';
        $data['aksi'] = 'ubah';
        $data['mk'] = $this->model('Matakuliah_model')->getMatakuliahById($id);
        
        $this->view('templates/header', $data);
        $this->view('matakuliah/form', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        if( $this->model('Matakuliah_model')->ubahDataMatakuliah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }

    // -- BAGIAN HAPUS --
    public function hapus($id)
    {
        if( $this->model('Matakuliah_model')->hapusDataMatakuliah($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/matakuliah');
            exit;
        }
    }
}