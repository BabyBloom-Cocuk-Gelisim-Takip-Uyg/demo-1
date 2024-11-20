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
    <title>BabyBloom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src= "images/logo.jpg" alt="Logo" class="logo-image">
            <h1 class="brand-name">Hoşgeldiniz</h1>
        </div>
        <div class="auth-buttons">
            <button class="logout-btn" id="logout-btn">Çıkış Yap</button>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.getElementById("logout-btn").addEventListener("click", function() {
                        window.location.href = "logoutcheck.php";
                    });
                });
            </script>

            <button class="menu-btn" id="menu-btn">☰</button>
        </div>
    </header>


     <!-- Giriş Yap Modal -->
     <div id="login-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="close-btn">&times;</span>
            <h2>Giriş Yap</h2>
            <form id="login-form">
                <label for="email">E-posta:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" id="login-submit">Giriş Yap</button>
            </form>
            <p>Hesabınız yok mu? <a href="signup.html">Üye Ol</a> linkine tıklayın.</p>
            <div class="main-content">
            <p>Uygulamaya kaydolmak için <a href="signup.html">Üye Ol</a> linkine tıklayın.</p>
            </div>
        
        </div>
    </div>

    <!-- Menü -->
    <aside class="sidebar" id="sidebar">
        <nav>
            <ul>
                <li><a href="userpage.php">Ana Sayfa</a></li>
                <li><a href="child-info.php">Çocuk Bilgilerini Gir</a></li> <!-- Yeni link -->
                <li><a href="haftalik-oneriler.php">Haftalık Öneriler</a></li><!-- Yönlendirme -->
            </ul>
        </nav>
    </aside>

    <!-- Ana Sayfa İçeriği -->
    <div class="main-content" id="main-content">
        <section class="app-intro">
            <h2>Uygulamanın Amacı</h2>
            <p>Çocuk Gelişimi Takip Uygulaması, çocuklarınızın gelişim sürecini takip etmek için geliştirilmiştir. Uygulama, uyku, fiziksel aktivite, beslenme ve diğer önemli verileri kaydederek, gelişimlerini izleme imkanı sunar.</p>
        </section>
        
        <section class="parent-info">
            <h2>Ebeveynler için Bilgiler</h2>
            <p>Çocuklarınızın gelişimini desteklemek için uyku düzenine dikkat edin, sağlıklı beslenmelerine özen gösterin ve fiziksel aktivitelerini takip edin. Uygulama, ebeveynlere gelişim sürecinde yol gösterici bilgiler sunar.</p>
        </section>
        
        <section class="weekly-tips">
            <h2>Haftalık Öneriler</h2>
            <p>Her hafta, çocuk gelişimi ile ilgili en güncel öneriler ve tavsiyeler sizlerle. Bu öneriler, çocuklarınızın sağlıklı bir şekilde büyümesine yardımcı olacaktır.</p>
        </section>
        
        <section class="blog-post">
            <h2>Blog Yazısı</h2>
            <p>Blog yazılarımızla çocuk gelişimi hakkında ipuçları ve öneriler sunuyoruz. Her hafta yeni yazılarla çocukların fiziksel ve zihinsel gelişimini desteklemeye yardımcı oluyoruz.</p>
        </section>
        <!-- Blog Yazısı -->
        <h3>Yorumlar</h3>
        <div id="comment-list"></div> <!-- Yorumlar buraya eklenecek -->
        <textarea id="comment-box" placeholder="Yorumunuzu yazın..."></textarea>
        <button id="submit-comment">Yorum Yap</button>
    </div>
</section>

    </div>
    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>
