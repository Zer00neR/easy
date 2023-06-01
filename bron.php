<?php
include 'connect.php';

if($result = $mysqli->query("SELECT * FROM bronirovanie")){
    foreach($result as $row){
         
        $bronfio = $row["fio"];
        $bronin = $row["checkin"]; 
        $bronout = $row["checkout"];
        $bronvzrosl = $row["colvzrosl"];
        $brondetey = $row["coldetey"];
        $nomer = $row["nomer"];
   
        echo "<tr>";
        echo "<td>${bronfio}</td>";
        echo "<td>${bronin}</td>";
        echo "<td>${bronout}</td>";
        echo "<td>${bronvzrosl}</td>";
        echo "<td>${brondetey}</td>";
        echo "<td>${nomer}</td>";
        echo "</tr>";
    }
}
?>