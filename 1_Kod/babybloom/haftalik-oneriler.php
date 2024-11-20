<?php
// Oturum başlatılıyor
session_start();

// Oturum kontrolü
include "oturumyok.php";

// Veritabanı bağlantı dosyası dahil ediliyor
include "connectdb.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haftalık Öneriler</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="Logo" class="logo-image">
            <h1>BabyBloom</h1>
        </div>
    </header>
    
    <main>
        <h2>Haftalık Öneri</h2>
        <form id="onerilerForm">
            <label for="yas">Çocuğun Yaşı:</label>
            <input type="number" id="yas" name="yas" required><br><br>
            <button type="button" onclick="onerileriGoster()">Önerileri Göster</button>
        </form>

        <div id="sonuc"></div>
    </main>

    <script src="scripts.js"></script>
</body>
</html>
