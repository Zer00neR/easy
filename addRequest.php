<?php
$a= $_POST['fio'];
$b= $_POST['checkin'];
$c= $_POST['checkout'];
$d= $_POST['colvzrosl'];
$e= $_POST['coldetey'];
include 'connect.php';
$mysqli->query("INSERT INTO bronirovanie VALUES('$a', '$b', '$c', '$d', '$e')");
exit('<meta http-equiv="refresh" content="0; url=bronirovanieAdd.php" />');
?>