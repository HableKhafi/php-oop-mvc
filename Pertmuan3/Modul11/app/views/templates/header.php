<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($judul) ? htmlspecialchars($judul) : 'CRUD'; ?> | MAHASISWA</title>

    <style>
        body { font-family: 'Arial', sans-serif; margin: 0; background-color: #f4f4f9; color: #333; }
        .navbar { background-color: #007bff; padding: 15px 30px; color: white; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        .navbar a { color: white; text-decoration: none; margin-left: 20px; font-weight: bold; }
        .navbar a:hover { text-decoration: underline; }
        .container { padding: 30px; max-width: 900px; margin: 40px auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); }
        h1 { color: #007bff; border-bottom: 2px solid #ccc; padding-bottom: 10px; }
        
    </style>
</head>
<body>
    <div class="navbar">
        <span class="logo">Simple MVC App</span>
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
        </div>
    </div>

<div class="container">