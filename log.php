<?php

    session_start();
    require_once('db.php');
    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");
    if(mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            'id' => $user['id'],
            'login' => $user['login'],
            'fio' => $user['fio'],
            'tel' => $user['tel'],
            'email' => $user['email'],
            'date' => $user['date'],
            'role' => $user['role']
        ];

        header('Location: profile.php');

    } else {
        header('Location: login.php');
    }

?>