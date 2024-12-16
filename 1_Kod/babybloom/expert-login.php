<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzman Girişi</title>
    <link rel="stylesheet" href="expert.css">
    <link rel="icon" type="image/png" href="images/icon.png">
</head>
<body>
    <div class="wrapper">
        <form action="verify-expert.aspx" method="POST">
            <h1>Uzman Girişi</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="E-posta" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Şifre" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" name="expertCode" placeholder="Uzman Kodu" required>
                <i class='bx bxs-key'></i>
            </div>
            <button type="submit" class="btn">Giriş Yap</button>
            <div class="register-link">
                <p>Üye değil misiniz? <a href="./expert-signup.php">Üye Ol</a></p>
            </div>
        </form>
    </div>
</body>
</html>
