<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "phone" => $user['phone'],
            "avatar" => $user['avatar'], 
            "email" => $user['email']
        ];

        header('Location: ../index.php');
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
    } else {
        $_SESSION['messageBad'] = 'Не верный логин или пароль';
        header('Location: ../authorization.php');
    }
    ?>
