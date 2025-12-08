<div class="container">
    
    <?php Flasher::flash(); ?>

    <h1>Daftar Mahasiswa</h1>
    
    <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-primary">+ Tambah Data</a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach( $data['mhs'] as $mhs ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['npm']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-success">Ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>