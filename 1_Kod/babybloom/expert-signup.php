<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzman Üye Ol</title>
    <link rel="stylesheet" href="expert.css">
    <link rel="icon" type="image/png" href="images/icon.png">
</head>
<body>
    <div class="wrapper">
        <form action="register-expert.aspx" method="POST">
            <h1>Üye Ol </h1>
            <div class="input-box">
                <input type="text" name="name" placeholder="Ad Soyad" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="E-posta" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Şifre Belirleyin" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" name="expertCode" placeholder="Uzman Doğrulama Kodu" required>
                <i class='bx bxs-key'></i>
            </div>
            <button type="submit" class="btn">Üye Ol</button>
        </form>
    </div>
</body>
</html>
