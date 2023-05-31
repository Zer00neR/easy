<?php
session_start();
if ($_SESSION['user']) {
    header('Location: index.php');
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="authorization.css" type="text/css">
    <link rel="stylesheet" href="style/custom.css" type="text/css">
    <title>Главная</title>
</head>

<body>
    <header class="header">
        <div id="logo">Light <br> house</div>
        <ul class="menu-main">
            <li><a href="index.php" class="current">Главная</a></li>
            <li><a href="bronirovanieAdd.php">Бронирование</a></li>
            <li><a href="katalog.php">Каталог</a></li>
            <li><a href="kontact.php">Контакты</a></li>
            <li>
                <?php
                if ($_SESSION['user']) {
                    echo '<div >
                                <a href="lk.php" class="join-buttn">' . $_SESSION['user']['full_name'] . '  /  </a>
                                <a href="vendor/logout.php" class="join-buttn join-buttn-last">
                                Выйти из профиля
                                </a>
                        </div>';
                } else {
                    echo '
                        <div >
                            <a href="authorization.php" class="join-buttn">Авторизация /</a>
                            <a href="registration.php" class="join-buttn join-buttn-last">Регистрация</a>
                        </div>';
                }

                ?>
            </li>

        </ul>
    </header>

    <section class="authorization">
        <div class="authorization__title">Авторизация</div>
        <form class="auth__form" action="vendor/signin.php" method="POST">
            <div class="form-label__wrapper">
                <div class="form-label">логин</div>
                <input class="join-input" type="text" name="login" required>
            </div>
            <div class="form-label__wrapper">
                <div class="form-label">пароль</div>
                <input class="join-input" type="password" name="password" autocomplete="off" required>
            </div>
            <button class="join-button join-button-auth">Войти</button><!-- кнопка входа -->

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
        <div class="HaveAnAccaounWrap">
            <div class="auth__form-text">Еще нет аккаунта?</div><!-- Форма регистрации -->
            <a href="registration.php" class="auth__form-text-a">Зарегистрироваться</a>
        </div>

    </section>

    <div class="footer">
        <div>Адрес:198 West 21th Street,Suite 721<br>Телефон:(+1) 435 3533<br>Email:info@domain.com</div>
    </div>
    </div>

</body>

</html>