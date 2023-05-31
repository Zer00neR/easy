<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="glavnaya.css" type="text/css">
    <link rel="stylesheet" href="style/custom.css" type="text/css">
    <title>Главная</title>
    
</head>

<body>
    <div class="wrapper">
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

        <div class="content">
            <h1 class="title">ДОБРО ПОЖАЛОВАТЬ<br> В Гостиницу Light house</h1>
        </div>
        <div class="footer">
            <div>Адрес:198 West 21th Street,Suite 721<br>Телефон:(+1) 435 3533<br>Email:info@domain.com</div>
        </div>
    </div>

</body>

</html>