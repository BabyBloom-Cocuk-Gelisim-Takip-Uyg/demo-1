<?php
// Oturum başlatılıyor
session_start();

// Veritabanı bağlantı dosyası dahil ediliyor
include "connectdb.php";
?>
<?php
// Kullanıcıdan gelen veriler alınıyor
$email = trim($_POST["email"]);
$password = strval($_POST["password"]);

// Veriler MD5 algoritması ile 10 kez şifreleniyor
for($i = 1; $i <= 10; $i++) {
    $e_email = md5($email);
    $e_password = md5($password);
}

// Şifrelendikten sonra kalan şifrelenmemiş veriler sıfırlanıyor
$email = null;
$password = null;
$_POST["email"] = null;
$_POST["password"] = null;

// Veritabanında e-posta adresinin kayıtlı olup olmadığını kontrol eden sorgu
$sql = "SELECT email, password FROM users WHERE email = '" . $e_email . "'";
$result = $conn->query($sql);

// Eğer e-posta adresi bulunursa
if($result->num_rows > 0){
    // Veritabanındaki eşleşen kayıtlar işleniyor
    while($row = $result->fetch_assoc()){
        $vt_email = $row["email"];

        // Eğer e-posta adresi mevcutsa, kullanıcı kayıt sayfasına yönlendirilir
        if($vt_email == $e_email){
            $_SESSION["epostakayitli"] = true;
            header("Location: " . "signup.php");
        }
    }
} else {
    // E-posta kayıtlı değilse, yeni bir kullanıcı oluşturuluyor

    // Yeni kullanıcıyı veritabanına eklemek için sorgu oluşturuluyor
    $sql = "INSERT INTO users (email, password, regdate, logintime) VALUES ('" . $e_email . "', '" . $e_password . "', '" . date("Y-m-d") . "', '" . date("Y-m-d") . " " . date("H:i:s") . "')";
    $conn->query($sql);

    // Kullanıcı için bir oturum tokeni oluşturuluyor
    $_SESSION["token"] = bin2hex(random_bytes(32));

    // Eğer "Beni Hatırla" seçeneği işaretlenmişse
    if(boolval($_POST["rememberme"]) == true){
        // Tarayıcıya bir çerez oluşturuluyor
        setcookie("cookieToken", bin2hex(random_bytes(32)), time() + (86400 * 7), "");
    } else {
        // "Beni Hatırla" seçeneği sıfırlanıyor
        $_POST["rememberme"] = null;
    }

    // Yeni kullanıcı başarıyla oluşturulduktan sonra anasayfaya yönlendirme yapılıyor
    header("Location: " . "anasayfa.php");
}
?>
