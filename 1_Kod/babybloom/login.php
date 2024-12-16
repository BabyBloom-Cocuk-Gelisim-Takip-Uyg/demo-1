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
  <title>Login Form </title>
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" type="image/png" href="images/WhatsApp Görsel 2024-11-28 saat 22.08.44_b38dcf4d.jpg">
</head>
<body>
  
  <div class="wrapper">
    <form action="./logincheck.php" method="post">
      <h1>Giriş yap</h1>
      <?php
      if(isset($_SESSION["hataligiris"])){
        echo "<br><p>E-posta veya şifre hatalı.</p>";
        $_SESSION["hataligiris"] = null;
      }
      ?>
      <div class="input-box">
        <input type="email" name="email" placeholder="E-posta" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Şifre" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox" name="rememberme">Beni hatırla</label>
        <a href="#">Şifremi unuttum</a>
      </div>
      
      <button type="submit" class="btn">Giriş yap</button>
      <div class="register-link">
        <p>Hesabınız yok mu? <a href="./signup.php">Üye ol</a></p>
      </div>
    </form>
  </div>
</body>
</html>