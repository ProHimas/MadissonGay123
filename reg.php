<?php

    session_start();
    require_once('db.php');
    $login = $_POST['login'];
    $password = $_POST['password'];
    $fio = $_POST['fio'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    if(empty($login) || empty($password) || empty($fio) || empty($tel) || empty($email) || empty($date)) {
        header('Location: index.php');
    } else {
        mysqli_query($conn, "INSERT INTO `users` (`login`, `password`, `fio`, `tel`, `email`, `date`) VALUES ('$login', '$password', '$fio', '$tel', '$email', '$date')");
        header('Location: login.php');
    }
    
?>