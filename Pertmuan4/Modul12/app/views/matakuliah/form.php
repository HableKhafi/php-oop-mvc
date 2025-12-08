<div class="container mt-5">
     <h3><?= $data['judul']; ?></h3>
    <div class="card col-lg-8">
        <div class="card-header">
            <?= $data['judul']; ?>
        </div>
        <div class="card-body">
            
            <form action="<?= BASEURL; ?>/matakuliah/<?= ($data['aksi'] == 'tambah') ? 'simpan' : 'update'; ?>" method="post">
                
                <input type="hidden" name="id" value="<?= (isset($data['mk']['id'])) ? $data['mk']['id'] : ''; ?>">

                <div class="form-group mb-3">
                    <label for="kode_mk">Kode MK</label>
                    <input type="text" class="form-control" id="kode_mk" name="kode_mk" 
                           required
                           value="<?= (isset($data['mk']['kode_mk'])) ? $data['mk']['kode_mk'] : ''; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="nama_mk">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" id="nama_mk" name="nama_mk" 
                           required
                           value="<?= (isset($data['mk']['nama_mk'])) ? $data['mk']['nama_mk'] : ''; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="semester">Semester</label>
                    <input type="number" class="form-control" id="semester" name="semester" 
                           required
                           value="<?= (isset($data['mk']['semester'])) ? $data['mk']['semester'] : ''; ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="sks">SKS</label>
                    <input type="number" class="form-control" id="sks" name="sks" 
                           required
                           value="<?= (isset($data['mk']['sks'])) ? $data['mk']['sks'] : ''; ?>">
                </div>

                <button type="submit" class="btn btn-primary">
                    <?= ($data['aksi'] == 'tambah') ? 'Simpan Data' : 'Update Data'; ?>
                </button>
                <a href="<?= BASEURL; ?>/matakuliah" class="btn btn-secondary">Kembali</a>
            
            </form>
        </div>
    </div>

</div>