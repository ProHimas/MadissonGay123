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
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="row1">Кроссфит</td>
                            <td class="row2">10.11.2026 9:30</td>
                            <td class="row3">Ильин</td>
                            <td><input type="text" name="pozilanie"></td>
                            <td>
                                <select name="status" id="status">
                                    <option value="new">Новая</option>
                                    <option value="accept">Подтверждена</option>
                                    <option value="end">Завершена</option>
                                    <option value="cancel">Отменена</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="row1">Йога</td>
                            <td class="row2">11.11.2026 10:30</td>
                            <td class="row3">Галимов</td>
                            <td><input type="text" name="pozilanie"></td>
                            <td>
                                <select name="status" id="status">
                                    <option value="new">Новая</option>
                                    <option value="accept">Подтверждена</option>
                                    <option value="end">Завершена</option>
                                    <option value="cancel">Отменена</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="row1">Кардио</td>
                            <td class="row2">12.11.2026 15:00</td>
                            <td class="row3">Жиганов</td>
                            <td><input type="text" name="pozilanie"></td>
                            <td>
                                <select name="status" id="status">
                                    <option value="new">Новая</option>
                                    <option value="accept">Подтверждена</option>
                                    <option value="end">Завершена</option>
                                    <option value="cancel">Отменена</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
        .
    </div>
</body>
</html>