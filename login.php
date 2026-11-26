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
        <form action="log.php" method="post">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <button type="submit">Войти</button>
            <a href="index.php" class="ssilki">Еще не зарегистрированы?<br>Создать аккаунт</a>
        </form>
    </div>
</body>
</html>