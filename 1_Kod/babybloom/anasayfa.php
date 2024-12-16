<?php
// Oturum başlatılıyor
session_start();

// Oturum kontrolü
include "oturumyok.php";

// Veritabanı bağlantı dosyası dahil ediliyor
include "connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BabyBloom Ana Sayfa</title>
    <link rel="stylesheet" href="anasayfa.css">
</head>
<body>
    <header class="header">
        <h1>BabyBloom</h1>
        <nav>
            <ul>
                <li><a href="#nutrition">Beslenme</a></li>
                <li><a href="#sleep">Uyku Düzeni</a></li>
                <li><a href="#activity">Fiziksel Aktivite</a></li>
                <li><a href="#recommendations">Öneriler</a></li>
                <li><a href="./logoutcheck.php">Çıkış yap</a></li>
            </ul>
        </nav>
    </header>

    <main class="content">
        <!-- Beslenme -->
        <section id="nutrition" class="section">
            <h2>Çocuğunuzun Beslenme Alışkanlıkları</h2>
            <div class="chart-container">
                <canvas id="nutritionChart"></canvas>
            </div>
            <button class="btn">Yeni Veri Ekle</button>
            <button class="btn">Veriyi Güncelle</button>
            <button class="btn">Veriyi Sil</button>
        </section>

        <!-- Uyku Düzeni -->
        <section id="sleep" class="section">
            <h2>Çocuğunuzun Uyku Düzeni</h2>
            <div class="chart-container">
                <canvas id="sleepChart"></canvas>
            </div>
            <button class="btn">Yeni Veri Ekle</button>
            <button class="btn">Veriyi Güncelle</button>
            <button class="btn">Veriyi Sil</button>
        </section>

        <!-- Fiziksel Aktivite -->
        <section id="activity" class="section">
            <h2>Çocuğunuzun Fiziksel Aktiviteleri</h2>
            <div class="chart-container">
                <canvas id="activityChart"></canvas>
            </div>
            <button class="btn">Yeni Veri Ekle</button>
            <button class="btn">Veriyi Güncelle</button>
            <button class="btn">Veriyi Sil</button>
        </section>

        <!-- Öneriler -->
        <section id="recommendations" class="section">
            <h2>Öneriler</h2>
            <p>Kendi önerinizi yazın veya diğer önerileri görmek için öneriler sayfasına gidin.</p>
            <textarea placeholder="Önerinizi buraya yazın..." id="recommendationText"></textarea>
            <button class="btn" onclick="submitRecommendation()">Önerinizi Paylaş</button>
            <div>
                <a href="./öneriler.php">
                    <button class="btn">Önerileri Görüntüle</button>
                </a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>© 2024 BabyBloom. Tüm Hakları Saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="anasayfa.js"></script>
    <script>
        function submitRecommendation() {
            const text = document.getElementById('recommendationText').value;
            if (text) {
                alert("Öneriniz başarıyla gönderildi!");
                document.getElementById('recommendationText').value = '';
                // Burada öneri veritabanına gönderilebilir.
            } else {
                alert("Lütfen bir öneri yazın.");
            }
        }
    </script>
</body>
</html>
