<?php
// Oturum başlatılıyor
session_start();

// Veritabanı bağlantı dosyası dahil ediliyor
include "connectdb.php";
?>
<?php
// Kullanıcıdan gelen veriler alınıyor
$fname = trim($_POST["first-name"]);
$lname = trim($_POST["last-name"]);
$birthdate = trim($_POST["birthdate"]);
$email = trim($_POST["email"]);
$password = trim(strval($_POST["password"]));

// Veriler MD5 algoritması ile 10 kez şifreleniyor
for($i = 1; $i <= 10; $i++) {
    $e_email = md5($email);
    $e_password = md5($password);
    $e_fname = md5($fname);
    $e_lname = md5($lname);
}

// Şifrelendikten sonra kalan şifrelenmemiş veriler sıfırlanıyor
$email = null;
$password = null;
$_POST["email"] = null;
$_POST["password"] = null;
$fname = null;
$lname = null;

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
            header("Location: " . "signup.php");
        }
    }
} else {
    // E-posta kayıtlı değilse, yeni bir kullanıcı oluşturuluyor

    // Yeni kullanıcıyı veritabanına eklemek için sorgu oluşturuluyor
    $sql = "INSERT INTO users (id, email, password, fname, lname, birthdate, regdate, logintime) VALUES ('" . strval(bin2hex(random_bytes(64))) . "', '" . $e_email . "', '" . $e_password . "', '" . $e_fname . "', '" . $e_lname . "', '" . $birthdate . "', '" . date("Y-m-d") . "', '" . date("Y-m-d") . " " . date("H:i:s") . "')";
    $conn->query($sql);

    // Kullanıcı için bir oturum tokeni oluşturuluyor
    $_SESSION["token"] = bin2hex(random_bytes(32));

    // Yeni kullanıcı başarıyla oluşturulduktan sonra anasayfaya yönlendirme yapılıyor
    header("Location: " . "userpage.php");
}
?>
