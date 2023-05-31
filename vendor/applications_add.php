<?php

    session_start();
    require_once '../connect.php';

    $current_date = gmDate("Y-m-d\ H:i:s\ ");
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    mysqli_query($connect, "INSERT INTO `applications` (`date`,`full_name`, `email`, `phone`) VALUES ('$current_date','$full_name', '$email', '$phone')");

    $_SESSION['messageApplicationAdd'] = 'Ваша заявка создана, спасибо! ';
    header('Location: ../applications.php');
?>