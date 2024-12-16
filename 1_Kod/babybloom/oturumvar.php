<?php
/* Oturum veya Çerez için jeton (token) zaten ayarlanmışsa 
Giriş sayfasına yönlendirmeyi engeller */
if(isset($_SESSION["token"]) || isset($_COOKIE["cookieToken"])){
    header("Location: " . "./anasayfa.php");
}
?>