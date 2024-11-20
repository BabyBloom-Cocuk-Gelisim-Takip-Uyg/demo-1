<?php
// Oturum başlatılıyor
session_start();

// Veritabanı bağlantı dosyası dahil ediliyor
include "connectdb.php";
?>
<?php
// Kullanıcıdan gelen veriler alınıyor
$email = trim($_POST["email"]);
$password = trim(strval($_POST["password"]));

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

// Veritabanında kullanıcıyı doğrulamak için sorgu oluşturuluyor
$sql = "SELECT email, password FROM users WHERE email = '" . $e_email . "' AND password = '" . $e_password . "'";
$result = $conn->query($sql);

// Eğer kullanıcı bulunursa
if($result->num_rows > 0){
    // Kullanıcı bilgileri işleniyor
    while($row = $result->fetch_assoc()){
        
        // Veritabanındaki e-posta ve şifre alınıyor
        $vt_email = $row["email"];
        $vt_password = strval($row["password"]);

        // Eğer veritabanından gelen değerler eşleşiyorsa
        if($vt_email == $e_email && $vt_password == $e_password){

            // Eğer "Beni Hatırla" seçeneği işaretlenmişse
            if(boolval($_POST["rememberme"]) == true){
                // Tarayıcıya bir çerez oluşturuluyor
                setcookie("cookieToken", bin2hex(random_bytes(32)), time() + (86400 * 7), "");
            } else {
                // "Beni Hatırla" seçeneği sıfırlanıyor
                $_POST["rememberme"] = null;
            }

            // Kullanıcının giriş zamanı güncelleniyor
            $sql = "UPDATE users SET logintime = '" . date("Y-m-d") . " " . date("H:i:s") . "' WHERE email = '" . $e_email . "' AND password = '" . $e_password . "'";
            $conn->query($sql);

            // Kullanıcı için oturum tokeni oluşturuluyor
            $_SESSION["token"] = bin2hex(random_bytes(32));

            // Başarıyla giriş yaptıktan sonra anasayfaya yönlendirme yapılıyor
            header("Location: " . "userpage.php");
        } else {
            // Giriş başarısızsa giriş sayfasına yönlendiriliyor
            header("Location: " . "index.php");
        }
    }
}
?>
