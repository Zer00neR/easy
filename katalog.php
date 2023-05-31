<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://dsimsoi1.beget.tech/katalog.css">
    <link rel="stylesheet" href="style/custom.css" type="text/css">

    <title>Каталог</title>
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
            <h1 class="title">Номера и люксы</h1>


            <div class="slider-wrapper">
                <a class="prev" onclick="minusSlide()">&#10094;</a>
                <div class="slider">

                    <div class="item">
                        <img src="images/slider-2.jpg" alt="Первый слайд">
                        <div class="slideText">Семейный номер<br>120$ / за ночь</div>
                    </div>

                    <div class="item">
                        <img src="images/slider-5.jpg" alt="Второй слайд">
                        <div class="slideText">Президентский зал<br>80 $ / за ночь</div>
                    </div>

                    <div class="item">
                        <img src="images/slider-1.jpg" alt="Третий слайд">
                        <div class="slideText">Одноместный номер<br>40$/за ночь</div>
                    </div>

                    <div class="item">
                        <img src="images/slider-3.jpg" alt="Четвертый слайд">
                        <div class="slideText">Уют номер<br>30$/за ночь</div>
                    </div>

                    <div class="item">
                        <img src="images/slider-4.jpg" alt="Пятый слайд">
                        <div class="slideText">Single<br>10$/за ночь</div>
                    </div>

                    <div class="item">
                        <img src="images/slider-6.jpg" alt="Шестой слайд">
                        <div class="slideText">Triple<br>30$/за ночь</div>
                    </div>
                </div>

                <a class="next" onclick="plusSlide()">&#10095;</a>
            </div>

            <div class="slider-dots">
                <span class="slider-dots_item" onclick="currentSlide(1)"></span>
                <span class="slider-dots_item" onclick="currentSlide(2)"></span>
                <span class="slider-dots_item" onclick="currentSlide(3)"></span>
                <span class="slider-dots_item" onclick="currentSlide(4)"></span>
                <span class="slider-dots_item" onclick="currentSlide(5)"></span>
                <span class="slider-dots_item" onclick="currentSlide(6)"></span>
            </div>
            <script src="script.js"></script>
        </div>
        <div class="footer">
            <div>Адрес:198 West 21th Street,Suite 721<br>Телефон:(+1) 435 3533<br>Email:info@domain.com</div>
        </div>
    </div>






</body>


</html>