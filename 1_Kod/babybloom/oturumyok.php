<?php
/* Oturum veya Çerez için jeton (token) hiç ayarlanmamışsa 
Giriş sayfasına yönlendirmeye zorlar */
if( !(isset($_SESSION["token"]) || isset($_COOKIE["cookieToken"])) ){
    header("Location: " . "index.php");
}
?>