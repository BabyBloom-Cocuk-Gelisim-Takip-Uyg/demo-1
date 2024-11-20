<?php
// Oturum başlatılıyor
session_start();

// Oturum kontrolü
include "oturumvar.php";

// Veritabanı bağlantı dosyası dahil ediliyor
include "connectdb.php";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Ol</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="Logo" class="logo-image">
            <h1>BabyBloom</h1>
        </div>
    </header>

    <!-- Üye Ol Formu -->
    <div class="signup-container">
        <h2>Üye Ol</h2>
        <form id="signup-form" action="signupcheck.php" method="post">
            <label for="first-name">Ad:</label>
            <input type="text" id="first-name" name="first-name" required>

            <label for="last-name">Soyad:</label>
            <input type="text" id="last-name" name="last-name" required>

            <label for="birthdate">Doğum Tarihi:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required placeholder="example@domain.com">

            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Şifreyi Onayla:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <label for="email-confirm">E-posta Onayla:</label>
            <input type="email" id="email-confirm" name="email-confirm" required>

            <div class="captcha">
                <label for="captcha">Ben robot değilim:</label>
                <input type="checkbox" id="captcha" name="captcha" required>
            </div>

            <button type="submit" id="signup-submit">Üye Ol</button>
        </form>
        <p>Hesabınız var mı? Giriş yapmak için <a href="index.php">Anasayfa'ya</a> dönün</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
