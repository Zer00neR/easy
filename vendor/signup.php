<?php

session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$login = $_POST['login'];
$password = $_POST['password'];


$password = md5($password);


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_user) > 0) {
    $_SESSION['messageBad'] = 'Такой Логин уже зарегистрирован! Попробуйте другой';
    header('Location: ../registration.php');

} else{

mysqli_query($connect, "INSERT INTO `users` (`full_name`, `email`, `phone`, `login`, `password`) VALUES ('$full_name', '$email', '$phone', '$login', '$password')");
$_SESSION['message'] = 'Регистрация прошла успешно! Авторизуйтесь!';
header('Location: ../authorization.php');
}




// if ($password === $password_confirm) {

//     $path = 'uploads/' . time() . $_FILES['avatar']['name'];
//     if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
//         $_SESSION['message'] = 'Ошибка при загрузке сообщения';
//         header('Location: ../register.php');
//     }

//     $password = md5($password);

//     mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

//     $_SESSION['message'] = 'Регистрация прошла успешно!';
//     header('Location: ../index.php');


// } else {
//     $_SESSION['message'] = 'Пароли не совпадают';
//     header('Location: ../register.php');
// }

?>