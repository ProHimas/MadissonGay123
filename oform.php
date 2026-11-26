<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: login.php');
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
    <header>
        <div class="head">
            <a href="profile.php">Мои Заявки</a>
            <a href="logout.php">Выйти</a>
        </div>
    </header>
    <div class="reglog">
        <form action="" method="post">
            <select name="type" id="type">
                <option value="ioga">Йога</option>
                <option value="sila">Силовая тренировка</option>
                <option value="kardio">Кардио</option>
                <option value="kros">Кроссфит</option>
                <option value="pilat">Пилатес</option>
            </select>
            <label for="datetime">Желаемая дата и время</label>
            <input type="date" name="datet" id="datet">
            <input type="time" name="time" id="time">
            <select name="type" id="type">
                <option value="gal">Галимов</option>
                <option value="jig">Жиганов</option>
                <option value="dyl">Дульцев</option>
                <option value="ilin">Ильин</option>
                <option value="mens">Меньшиков</option>
            </select>
            <input type="text" name="pozilanie" id="pozilanie" placeholder="Пожелания">
            <button type="submit">Забронировать</button>
        </form>
    </div>
</body>
</html>