<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - SMK Bunda Kandung</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Font Roboto -->
    <style>
        /* Mengatur font dan background umum */
body {
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #ff7e5f, #feb47b); /* Gradasi warna yang menarik */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #fff;
}

/* Container utama untuk konten */
.container {
    background-color: rgba(0, 0, 0, 0.7); /* Transparan hitam */
    padding: 40px 50px;
    border-radius: 20px; /* Membulatkan sudut */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 400px;
    animation: slideIn 1s ease-out; /* Animasi form */
}

/* Efek animasi untuk tampilan halaman */
@keyframes slideIn {
    0% { transform: translateY(-50px); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

/* Styling untuk judul selamat datang */
h1 {
    font-size: 28px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 45px
}

/* Styling untuk tombol logout */
a {
    font-size: 18px;
    font-weight: bold;
    color: #ff7e5f;
    text-decoration: none;
    padding: 10px 20px;
    border: 2px solid #ff7e5f;
    border-radius: 8px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Efek hover pada tombol logout */
a:hover {
    background-color: #ff7e5f;
    color: #fff;
}

/* Responsif - Mengatur container agar lebih ramping di layar kecil */
@media (max-width: 600px) {
    .container {
        width: 80%;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang <?php echo $_SESSION['user']; ?></h1>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
