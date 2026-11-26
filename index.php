<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Мой Фитнес</title>
</head>
<body>
    <div class="reglog">
        <form action="reg.php" method="post">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="text" name="fio" placeholder="ФИО">
            <input type="tel" name="tel" placeholder="Телефон">
            <input type="email" name="email" placeholder="Почта">
            <label for="date">Дата рождения</label>
            <input type="date" name="date" id="date">
            <button type="submit">Зарегистрироваться</button>
            <a href="login.php" class="ssilki">Есть аккаунт?<br>Войти</a>
        </form>
    </div>
</body>
</html>