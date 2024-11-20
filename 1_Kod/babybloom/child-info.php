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
    <title>Çocuk Bilgileri</title>
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

    

    <!-- Çocuk Bilgileri Formu -->
    <div class="child-info-form">
        <h2>Çocuk Bilgilerini Girin</h2>
        <form id="child-info-form">
            <label for="child-name">Adı Soyadı:</label>
            <input type="text" id="child-name" name="child-name" required>

            <label for="child-dob">Doğum Tarihi:</label>
            <input type="date" id="child-dob" name="child-dob" required>

            <label for="child-height">Boyu (cm):</label>
            <input type="number" id="child-height" name="child-height" required>

            <label for="child-sleep">Uyku Saati:</label>
            <input type="time" id="child-sleep" name="child-sleep" required>

            <label for="child-activities">Yaptığı Aktiviteler:</label>
            <textarea id="child-activities" name="child-activities" rows="4" required></textarea>

            <button type="submit" id="submit-btn">Devam Et</button>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="child-info.js"></script>
</body>
</html>

