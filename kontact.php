<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="kontact.css">
    <link rel="stylesheet" href="style/custom.css" type="text/css">
    <title>Контакты</title>
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
            <a class="operation__link" href="index.php">Вернуться на главную</a>
            <h1 class="title">Наши контакты</h1>
            <div class="carta__wrapper">
                <div class="carta">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48365.77374146663!2d-74.06251788139346!3d40.743087103546905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bb65ffb4b7%3A0xfb6f9cef91401b93!2sEvents%20Coverage%20and%20Photography!5e0!3m2!1sru!2sru!4v1651788723075!5m2!1sru!2sru"
                        width="100%" height="100%" allowfullscreen="false" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="center">
                    <p>Почта: LiHouse2022@mail.ru</p>
                    <p>Инстаграмм: @Li_House</p>
                    <p>+7 999 782 234</p>
                    <p>987-690</p>
                </div>
            </div>

        </div>


        <div class="footer">
            <div>Адрес:198 West 21th Street,Suite 721<br>Телефон:(+1) 435
                3533<br>Email:info@domain.com
            </div>
        </div>
    </div>
</body>

</html>