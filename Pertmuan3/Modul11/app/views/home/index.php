

    <div class="container">
        <h1><?php echo isset($judul) ? htmlspecialchars($judul) : 'Selamat Datang!'; ?></h1>
        <h2>Framework MVC Lokal Anda</h2>
        <p>Aplikasi ini dijalankan oleh **Controller Home** melalui **Metode index()**.</p>

        <?php if (isset($nama)) : ?>
            <div class="info-box">
                <p>Data dinamis berhasil dikirimkan dari Controller:</p>
                <p>Halo, nama saya adalah <strong><?php echo htmlspecialchars($nama); ?></strong>.</p>
            </div>
        <?php endif; ?>

    </div>

