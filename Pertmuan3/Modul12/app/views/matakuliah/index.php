<div class="container mt-3">

    <div class="row">
      <div class="col-lg-12">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a href="<?= BASEURL; ?>/matakuliah/tambah" class="btn btn-primary mb-3">
                Tambah Data Mata Kuliah
            </a>
            
            <h3>Daftar Mata Kuliah</h3>
            
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width: 5%;">No</th>
                        <th scope="col">Kode MK</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col" style="width: 10%;">Smstr</th>
                        <th scope="col" style="width: 10%;">SKS</th>
                        <th scope="col" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach( $data['mks'] as $mk ) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $mk['kode_mk']; ?></td>
                        <td><?= $mk['nama_mk']; ?></td>
                        <td><?= $mk['semester']; ?></td>
                        <td><?= $mk['sks']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/matakuliah/ubah/<?= $mk['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                            
                            <a href="<?= BASEURL; ?>/matakuliah/hapus/<?= $mk['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
    </div>

</div>