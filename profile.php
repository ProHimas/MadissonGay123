<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: login.php');
    } else {
        if($_SESSION['user']['role'] === 'admin') {
        header('Location: admin.php');
        }
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
            <a href="oform.php">Оформить заявку</a>
            <a href="logout.php">Выйти</a>
        </div>
    </header>
    <div class="container">
            <div class="zaiavki">
                <h2>Мои заявки</h2>
                <table class="tabl">
                    <thead>
                        <tr>
                            <th class="row1">Тип</th>
                            <th class="row2">Дата и время</th>
                            <th class="row3">Тренер</th>
                            <th>Пожелания</th>
                            <th>Отзыв</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="row1">Кроссфит</td>
                            <td class="row2">10.11.2026 9:30</td>
                            <td class="row3">Ильин</td>
                            <td><input type="text" name="pozilanie"></td>
                            <td><input type="text" name="otziv"></td>
                        </tr>
                        <tr>
                            <td class="row1">Йога</td>
                            <td class="row2">11.11.2026 10:30</td>
                            <td class="row3">Галимов</td>
                            <td><input type="text" name="pozilanie"></td>
                            <td><input type="text" name="otziv"></td>
                        </tr>
                        <tr>
                            <td class="row1">Кардио</td>
                            <td class="row2">12.11.2026 15:00</td>
                            <td class="row3">Жиганов</td>
                            <td><input type="text" name="pozilanie"></td>
                            <td><input type="text" name="otziv"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="posetil">
                <h2>Посещенные тренировки</h2>
                <table class="tabl">
                    <thead>
                        <tr>
                            <th class="row1">Тип</th>
                            <th class="row2">Дата и время</th>
                            <th class="row3">Тренер</th>
                            <th>Пожелания</th>
                            <th>Отзыв</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="row1">Кроссфит</td>
                            <td class="row2">10.11.2026 9:30</td>
                            <td class="row3">Ильин</td>
                            <td><input type="text" name="pozilanie"></td>
                            <td><input type="text" name="otziv"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="profile">
                <h2>Профиль</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Логин:</td>
                            <td><?= $_SESSION['user']['login'] ?></td>
                        </tr>
                        <tr>
                            <td>ФИО:</td>
                            <td><?= $_SESSION['user']['fio'] ?></td>
                        </tr>
                        <tr>
                            <td>Телефон:</td>
                            <td><?= $_SESSION['user']['tel'] ?></td>
                        </tr>
                        <tr>
                            <td>Почта:</td>
                            <td><?= $_SESSION['user']['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Дата рождения:</td>
                            <td><?= $_SESSION['user']['date'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
    </div>
</body>
</html>