<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="bronirovanie.css" type="text/css">
    <title>Бронирование</title>

</head>

<body>

    <div class="table__wrapper">
        <h1 class="title">Забронированные номера</h1>
        <table class="table">
            <thead>
                <tr>
                    <th >ФИО</th>
                    <th>Дата въезда</th>
                    <th>Дата выезда</th>
                    <th>Кол-во взрослых</th>
                    <th>Кол-во детей</th>
                </tr>
            </thead>
            <?php include 'bron.php'?>
        </table>
    </div>
</body>

</html>