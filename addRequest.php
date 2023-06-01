<?php
session_start();

$a = $_SESSION['user']['full_name'];
$b = $_POST['checkin'];
$c = $_POST['checkout'];
$d = $_POST['colvzrosl'];
$e = $_POST['coldetey'];
$f = $_POST['nomer'];
$g = $_SESSION['user']['id'];


include 'connect.php';
$mysqli->query("INSERT INTO `bronirovanie` (`fio`,`checkin`,`checkout`,`colvzrosl`,`coldetey`,`nomer`,`id-member`) VALUES ('$a','$b', '$c', '$d', '$e','$f','$g');");
exit('<meta http-equiv="refresh" content="0; url=bronirovanieAdd.php" />');


?>