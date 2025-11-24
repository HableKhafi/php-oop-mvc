<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Framework MVC Sederhana</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
        }

        h1 {
            color: #007bff;
            margin-bottom: 10px;
            font-size: 2.5em;
        }

        h2 {
            color: #28a745;
            margin-top: 5px;
            font-size: 1.5em;
        }

        p {
            margin: 15px 0;
            line-height: 1.6;
        }

        .info-box {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 25px;
            border-left: 5px solid #007bff;
            text-align: left;
        }

        .info-box strong {
            color: #dc3545;
        }
    </style>
</head>

<body>
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

        <p>Lanjutkan ke Modul 9 untuk integrasi Model dan data yang sesungguhnya!</p>
    </div>
</body>

</html>