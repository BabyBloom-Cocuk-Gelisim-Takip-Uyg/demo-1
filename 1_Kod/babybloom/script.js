// Menü açma / kapama
const menuBtn = document.getElementById('menu-btn');
const sidebar = document.getElementById('sidebar');

menuBtn.addEventListener('click', () => {
    if (sidebar.style.left === '0px') {
        sidebar.style.left = '-250px';
    } else {
        sidebar.style.left = '0px';// Modal açma ve kapama işlemleri
document.getElementById('login-btn').addEventListener('click', function() {
    document.getElementById('login-modal').style.display = 'flex';
});

document.getElementById('signup-btn').addEventListener('click', function() {
    document.getElementById('signup-modal').style.display = 'flex';
});

document.getElementById('close-btn').addEventListener('click', function() {
    document.getElementById('login-modal').style.display = 'none';
});

document.getElementById('close-signup-btn').addEventListener('click', function() {
    document.getElementById('signup-modal').style.display = 'none';
});

// Giriş yap butonuna tıklanınca modal'ı aç
const loginBtn = document.getElementById('login-btn');
const loginModal = document.getElementById('login-modal');
const closeBtn = document.getElementById('close-btn');

// Modal'ı açma
loginBtn.addEventListener('click', () => {
    loginModal.style.display = 'flex';
});

// Modal'ı kapama
closeBtn.addEventListener('click', () => {
    loginModal.style.display = 'none';
});

// Modal dışına tıklayınca kapanma
window.addEventListener('click', (event) => {
    if (event.target === loginModal) {
        loginModal.style.display = 'none';
    }
});

// Üye ol linkine tıklayınca üye ol sayfasına yönlendirme (şu an için sadece link)
const signupLink = document.getElementById('signup-link');
signupLink.addEventListener('click', () => {
    alert("Üye olma sayfasına yönlendirilecek...");
});

// Formu doğrulama işlemi
document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Formun sayfayı yeniden yüklemesini engeller

    const firstName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const birthdate = document.getElementById('birthdate').value;
    const email = document.getElementById('email').value;
    const emailConfirm = document.getElementById('email-confirm').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const captchaChecked = document.getElementById('captcha').checked;

    // E-posta doğrulama
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Geçerli bir e-posta adresi giriniz.");
        return;
    }

    // E-posta onayla
    if (email !== emailConfirm) {
        alert("E-posta adresleri uyuşmuyor!");
        return;
    }

    // Şifre doğrulama (en az 8 karakter, bir büyük harf, bir küçük harf ve bir rakam)
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!passwordRegex.test(password)) {
        alert("Şifre en az 8 karakter olmalı, küçük harf, büyük harf ve rakam içermelidir.");
        return;
    }

    // Şifre doğrulama
    if (password !== confirmPassword) {
        alert("Şifreler uyuşmuyor! Lütfen tekrar girin.");
        return;
    }

    // CAPTCHA kontrolü
    if (!captchaChecked) {
        alert("Lütfen 'Ben robot değilim' kutusunu işaretleyin.");
        return;
    }

    // Tüm doğrulama başarılıysa formu gönderebilirsiniz
    alert("Başarıyla kaydoldunuz!");

    // Gerçek bir uygulamada burada form verilerini sunucuya gönderebilirsiniz
});

function onerileriGoster() {
    // Formdan yaş bilgisini al
    const yas = document.getElementById('yas').value;
    const sonucDiv = document.getElementById('sonuc');

    // Geçerli bir yaş girildiğini kontrol et
    if (!yas || yas <= 0) {
        sonucDiv.innerHTML = "<p>Lütfen geçerli bir yaş girin.</p>";
        return;
    }

    // Yaşa göre önerileri belirle
    let uyku, beslenme, fizikselAktivite;

    if (yas <= 2) {
        uyku = "Günde 14-16 saat uyku önerilir.";
        beslenme = "Anne sütü veya formül sütü ile beslenme önerilir.";
        fizikselAktivite = "Yavaşça hareket etme, karın üstü zamanı ve yuvarlanma.";
    } else if (yas <= 5) {
        uyku = "Günde 10-13 saat uyku önerilir.";
        beslenme = "Sofra yemeklerinden yavaşça başlanabilir, protein ve sebze ağırlıklı beslenme.";
        fizikselAktivite = "Yürüyüş, oyun oynama ve basit egzersizler.";
    } else if (yas <= 12) {
        uyku = "Günde 9-12 saat uyku önerilir.";
        beslenme = "Dengeli bir öğün: Sebzeler, meyveler, proteinler ve tam tahıllar.";
        fizikselAktivite = "Bisiklet sürme, yüzme, futbol gibi aktif oyunlar.";
    } else if (yas <= 18) {
        uyku = "Günde 8-10 saat uyku önerilir.";
        beslenme = "Sağlıklı atıştırmalıklar ve düzenli öğünler, protein ağırlıklı beslenme.";
        fizikselAktivite = "Yoğun spor aktiviteleri ve takım oyunlarına katılım.";
    } else {
        uyku = "Günde 7-9 saat uyku önerilir.";
        beslenme = "Dengeli beslenme: Sebzeler, meyveler, protein ve sağlıklı yağlar.";
        fizikselAktivite = "Ağırsız sporlar, yoga, yürüyüş gibi egzersizler.";
    }

    // Sonuçları tablo şeklinde ekrana yazdır
    sonucDiv.innerHTML = `
        <h3>Yaşa Göre Öneriler</h3>
        <table style="width: 100%; border: 1px solid #ccc; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Öneri Türü</th>
                    <th style="padding: 10px; text-align: left; border: 1px solid #ddd;">Öneri</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Uyku</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">${uyku}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Beslenme</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">${beslenme}</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">Fiziksel Aktivite</td>
                    <td style="padding: 10px; border: 1px solid #ddd;">${fizikselAktivite}</td>
                </tr>
            </tbody>
        </table>
    `;
}


// Yorum yapma işlemi
document.getElementById('submit-comment').addEventListener('click', function() {
    let comment = document.getElementById('comment-input').value;
    if (comment) {
        let commentDiv = document.createElement('div');
        commentDiv.classList.add('comment');
        commentDiv.textContent = comment;
        document.getElementById('comments-list').appendChild(commentDiv);
        document.getElementById('comment-input').value = ''; // Input'u temizle
    }
});

    }
});

// Giriş yap modal'ı açma/kapatma
const loginBtn = document.getElementById('login-btn');
const loginModal = document.getElementById('login-modal');
const closeBtn = document.getElementById('close-btn');

loginBtn.addEventListener('click', () => {
    loginModal.style.display = 'flex';
});

closeBtn.addEventListener('click', () => {
    loginModal.style.display = 'none';
});

// Modal dışına tıklanarak kapatma
window.addEventListener('click', (event) => {
    if (event.target === loginModal) {
        loginModal.style.display = 'none';
    }
});
