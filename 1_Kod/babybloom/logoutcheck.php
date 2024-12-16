<?php
// Oturum başlatılıyor. Bu, oturum değişkenlerini temizlemek için gereklidir.
session_start();

// Tüm oturum değişkenleri temizleniyor
session_unset();

// Oturum tamamen sonlandırılıyor
session_destroy();

// Tarayıcıda saklanan "cookieToken" çerezi iptal ediliyor (geçmiş bir zamana ayarlanarak siliniyor)
setcookie("cookieToken", "", time() - 3600);

// Kullanıcı giriş sayfasına yönlendiriliyor
header("Location: " . "index.php");
?>
