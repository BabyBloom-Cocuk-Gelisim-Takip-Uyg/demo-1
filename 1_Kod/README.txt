## Çocuk Gelişimi Takip Uygulaması - Kod Dosyaları

# Giriş
Bu proje, çocuk gelişimini takip etmek için geliştirilen bir dijital platformdur. Kullanıcıların çocuklarının beslenme, uyku ve fiziksel aktivitelerini izleyebileceği bir arayüz sunar.

# Gerekenler
- PHP 7.4 veya üzeri
- MySQL Veritabanı
- XAMPP (veya herhangi bir yerel sunucu yazılımı) (XAMPP 8.2.12 sürümü önerilir.)
- Web tarayıcısı

# Kurulum Adımları
1. XAMPP ile Proje Çalıştırma:
- "babybloom" adlı proje klasörünü htdocs klasörüne yerleştiriniz.
- XAMPP Kontrol Paneli'nden Apache ve MySQL servislerini başlatınız.

2. Veritabanı Kurulumu:
- Apache ve MySQL Modülleri servislerini başlatın.
- XAMPP Kontrol Paneli'nden MySQL satırında "Admin" adlı butonuna basınız.
veya tarayıcı adres çubuğuna "localhost/phpmyadmin" yazarak enter tuşuna basınız.
- Açılan sayfada "babybloom" adında yeni bir veritabanı oluşturunuz.
- Sol menüde çıkan "babybloom" veritabanına tıklayınız.
- Üst kısımda "İçe aktar" butonuna basınız.
- "İçe aktarmak için dosya:" başlığı altındaki "Gözat..." butonunu kullanarak "babybloom_v3.1.sql" dosyasını seçiniz.
- En alta inip "İçe aktar" butonuna basınız.
- Tabloların eklendiğine dair veritabanına tıklayarak kontrol ediniz.

3. Projenin Çalıştırılması:
- Tarayıcınızın adres çubuğuna şu URL'yi açın: http://localhost/babybloom

# Dosya Açıklamaları
- index.php: Sitenin ana sayfası.
- connectdb.php: Veritabanına bağlanma dosyası.
- logincheck.php: Giriş yapma işlemlerini içeren dosya.
- logoutcheck.php: Çıkış yapma işlemlerini içeren dosya.
- signupcheck.php: Üye olma işlemlerini içeren dosya.
- oturumvar.php: Oturumun varlığını kontrol eden dosya.
- oturumyok.php: Oturumun yokluğunu kontrol eden dosya.
- anasayfa.php: Genellikle çocuğun yaptığı aktivitelerini grafiksel olarak gösteren kullanıcı sayfası.
- öneriler.php: Haftalık önerilerini gösteren sayfa.
- style.css, signup.css, login.css, öneriler.css, expert.css, anasayfa.css: Tüm stil kurallarını içerir.
- anasayfa.js: JavaScript dosyaları.
- babybloom_v3.1.sql: Veritabanı SQL Komut dosyası.
- expert-login.php: Uzman giriş sayfası.
- expert-signup.php: Uzman üye olma sayfası.
- login.php: Giriş sayfası.
- signup.php: Üye olma sayfası.

# Sorun Giderme
Eğer proje çalışmazsa:
- XAMPP servislerinin açık olduğundan emin olunuz.
- Veritabanı bilgilerini config.php dosyasından kontrol ediniz.
- Tarayıcınızda doğru URL'yi açtığınızdan emin olunuz.
- XAMPP programını yeniden kurunuz.

Teşekkürler!
