<?php
// Oturum başlatılıyor
session_start();

// Oturum kontrolü
include "oturumvar.php";

// Veritabanı bağlantı dosyası dahil ediliyor
include "connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BabyBloom</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/icons8-app-50.png">
</head>
<body>
    
    <div class="banner">
        

        <div class="content">
            <h1> Çocuğunuzun Gelişimini Takip Edin</h1>
            <p>Beslenme, uyku ve fiziksel aktiviteleri kolayca kaydedin, analiz edin ve sağlıklı bir gelişim için uzman önerileri alın.</p>
            <div>
                <a href="./login.php">
                <button type="button"><span></span>Giriş Yap</button>
                </a>
                <a href="./signup.php">
                <button type="button"><span></span>Üye Ol</button>
                 </a>
                 <a href="./expert-login.php">
                    <button type="button"><span></span>Uzman Giriş/Kayıt</button>
                     </a>
                 
            </div>
         
            
            
           
        
    </div>
    
</body>
</html>