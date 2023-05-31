<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="bronirovanie.css" type="text/css">
    <link rel="stylesheet" href="style/custom.css" type="text/css">
    <title>Бронирование</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
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
            <h1 class="title">Добавить бронь</h1>

            <!-- <div class="form__wrapper">
                <form class="form" method="POST" action="addRequest.php">
                    <input class="operation__field" type="text" name="fio" placeholder="ФИО">
                    <input class="operation__field" type="text" name="checkin" placeholder="Дата въезда">
                    <input class="operation__field knop" type="text" name="checkout" placeholder="Дата выезда">
                    <input class="operation__field" type="text" name="colvzrosl" placeholder="Кол-во взрослых">
                    <input class="operation__field" type="text" name="coldetey" placeholder="Кол-во детей">
                    <div class="operation__bottom">
                        <button class="button button--common operation__buttom" type="submit">Добавить</button>
                    </div>
                </form>
            </div> -->
            <section class="section bg-light pb-0"  >
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>

            <?php include 'bronirovanie.php' ?>
        </div>

        <div class="footer">
            <div>Адрес:198 West 21th Street,Suite 721<br>Телефон:(+1) 435 3533<br>Email:info@domain.com</div>
        </div>
    </div>
    <script src="js/scriptchecker.js"></script>

</body>

</html>