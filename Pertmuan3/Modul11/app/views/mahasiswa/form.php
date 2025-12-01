<div class="container">
    <h3><?= $data['judul']; ?></h3>

    <form action="<?= BASEURL; ?>/mahasiswa/<?= $data['aksi']; ?>" method="post">
        
        <?php if(isset($data['mhs']['id'])): ?>
            <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
        <?php endif; ?>

        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= isset($data['mhs']['nama']) ? $data['mhs']['nama'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>NPM:</label>
            <input type="text" name="npm" value="<?= isset($data['mhs']['npm']) ? $data['mhs']['npm'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?= isset($data['mhs']['email']) ? $data['mhs']['email'] : ''; ?>">
        </div>

        <div class="form-group">
            <label>Jurusan:</label>
            <select name="jurusan">
                <?php $j = isset($data['mhs']['jurusan']) ? $data['mhs']['jurusan'] : ''; ?>
                <option value="Teknik Informatika" <?= $j == 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
                <option value="Sistem Informasi" <?= $j == 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
                <option value="Teknik Industri" <?= $j == 'Teknik Industri' ? 'selected' : ''; ?>>Teknik Industri</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary">Kembali</a>
    </form>
</div>