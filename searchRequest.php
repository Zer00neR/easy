<?php
session_start();

$b = $_POST['checkin'];
$c = $_POST['checkout'];
$d = $_POST['colvzrosl'];
$e = $_POST['coldetey'];


include 'connect.php';

if($result = $mysqli->query("SELECT * FROM bronirovanie")){
    foreach($result as $row){
        

    }
}




$mysqli->query("SELECT * FROM `bronirovanie` WHERE;");




exit('<meta http-equiv="refresh" content="0; url=bronirovanieAdd.php" />');




// $_SESSION['user'] = [
//     "id" => $user['id'],
//     "full_name" => $user['full_name'],
//     "phone" => $user['phone'],
//     "avatar" => $user['avatar'], 
//     "email" => $user['email']
// ];



?>