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
    <title>SignUp Form </title>
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" type="image/png" href="images/icon.png">
</head>
<body>
    <div class="wrapper">
        <form action="./signupcheck.php" method="post">
          <h1>Üye ol</h1>
          <?php
          if(isset($_SESSION["epostakayitli"])){
            echo "<br><p>Girilen e-posta zaten kayıtlı.</p>";
            $_SESSION["epostakayitli"] = null;
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
          </div>
          <button type="submit" class="btn">Üye ol</button>
        
        </form>
      </div>
    
</body>
</html>