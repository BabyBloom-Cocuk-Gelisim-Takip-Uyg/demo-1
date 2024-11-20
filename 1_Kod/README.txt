## Çocuk Gelişimi Takip Uygulaması - Kod Dosyaları

# Giriş
Bu proje, çocuk gelişimini takip etmek için geliştirilen bir dijital platformdur. Kullanıcıların çocuklarının beslenme, uyku ve fiziksel aktivitelerini izleyebileceği bir arayüz sunar.

# Gerekenler
- PHP 7.4 veya üzeri
- MySQL Veritabanı
- XAMPP (veya herhangi bir yerel sunucu yazılımı)
- Web tarayıcısı

# Kurulum Adımları
1. XAMPP ile Proje Çalıştırma:
- "babybloom_1" adlı proje klasörünü htdocs klasörüne yerleştiriniz.
- XAMPP Kontrol Paneli'nden Apache ve MySQL servislerini başlatınız.

2. Veritabanı Kurulumu:
- Apache ve MySQL Modülleri servislerini başlatın.
- XAMPP Kontrol Paneli'nden MySQL satırında "Admin" adlı butonuna basınız.
veya tarayıcı adres çubuğuna "localhost/phpmyadmin" yazarak enter tuşuna basınız.
- Açılan sayfada "babybloom" adında yeni bir veritabanı oluşturunuz.
- Sol menüde çıkan "babybloom" veritabanına tıklayınız.
- Üst kısımda "İçe aktar" butonuna basınız.
- "İçe aktarmak için dosya:" başlığı altındaki "Gözat..." butonunu kullanarak "babybloom.sql" dosyasını seçiniz.
- En alta inip "İçe aktar" butonuna basınız.
- Tabloların eklendiğine dair veritabanına tıklayarak kontrol ediniz.

3. Projenin Çalıştırılması:
- Tarayıcınızın adres çubuğuna şu URL'yi açın: http://localhost/babybloom

# Dosya Açıklamaları
- index.php: Sitenin ana sayfası.
- signup.php: Üye olma sayfası.
- connectdb.php: Veritabanına bağlanma dosyası.
- logincheck.php: Giriş yapma işlemlerini içeren dosya.
- logoutcheck.php: Çıkış yapma işlemlerini içeren dosya.
- signupcheck.php: Üye olma işlemlerini içeren dosya.
- oturumvar.php: Oturumun varlığını kontrol eden dosya.
- oturumyok.php: Oturumun yokluğunu kontrol eden dosya.
- child-info.html: Çocuk bilgilerini içeren sayfa.
- grafik.html: Çocuğun yaptığı aktivitelerini grafiksel olarak gösteren sayfa.
- haftalik-oneriler: Haftalık önerilerini gösteren sayfa.
- style.css: Tüm stil kurallarını içerir.
- script.js, child-info.js: JavaScript dosyaları.
- babybloom.sql: Veritabanı SQL Komut dosyası.

# Sorun Giderme
Eğer proje çalışmazsa:
- XAMPP servislerinin açık olduğundan emin olunuz.
- Veritabanı bilgilerini config.php dosyasından kontrol ediniz.
- Tarayıcınızda doğru URL'yi açtığınızdan emin olunuz.
- XAMPP programını yeniden kurunuz.

Teşekkürler!