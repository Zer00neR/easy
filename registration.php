<?php
    session_start();
    // if ($_SESSION['user']) {
    //     header('Location: lk.php');
    // }
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="registration.css" type="text/css">
    <title>Главная</title>
</head>
<header class="header">
            <div id="logo">Light <br> house</div>
            <ul class="menu-main">
                <li><a href="index.php" class="current">Главная</a></li>
                <li><a href="bronirovanieAdd.php">Бронирование</a></li>
                <li><a href="katalog.php">Каталог</a></li>
                <li><a href="kontact.php">Контакты</a></li>
                <li><a href="registration.php">Регистрация</a></li>

            </ul>
        </header>
<section class="authorization">
        <div class="authorization__title"> Регистрация</div>
        <form class="auth__form" action="vendor/signup.php" method="POST">
            <div class="form-label__wrapper">
                <div class="form-label">Фио
                </div>
                <input class="join-input" type="text" name="full_name" autocomplete="off" required></div>
            <div class="form-label__wrapper">
                <div class="form-label">e-mail
                </div>
                <input class="join-input" type="email" name="email" autocomplete="off" required></div>
            <div class="form-label__wrapper">
                <div class="form-label">телефон</div>
                <input class="join-input" type="text" name="phone" autocomplete="off" required></div>
            <div class="form-label__wrapper">
                <div class="form-label">логин</div>
                <input class="join-input" type="text" name="login" autocomplete="off" required></div>
            <div class="form-label__wrapper">
                <div class="form-label">придумайте пароль
                </div>
                <input class="join-input" type="password" name="password" autocomplete="off" required></div>
            <button class="join-button" type="submit">Зарегистрироваться</button>
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            if ($_SESSION['messageBad']) {
                echo '<p class="msgBad"> ' . $_SESSION['messageBad'] . ' </p>';
            }
            unset($_SESSION['messageBad']);
        ?>
        </form>
    </section>

<div class="footer">
            <div>Адрес:198 West 21th Street,Suite 721<br>Телефон:(+1) 435 3533<br>Email:info@domain.com</div>
        </div>
    </div>

</body>

</html>