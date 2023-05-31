<?php

    session_start();
    require_once '../connect.php';

    if($result = $connect->query("SELECT * FROM applications")){
        foreach($result as $row){
            $date = $row["date"];
            $full_name = $row["full_name"];
            $email = $row["email"]; 
            $phone = $row["phone"];
          
    
            echo "<tr class='table__tr'>";
            echo "<td class='table__td'>${date}</td>";
            echo "<td class='table__td'>${full_name}</td>";
            echo "<td class='table__td'>${email}</td>";
            echo "<td class='table__td'>${phone}</td>";
            echo "</tr>";
        }
    }
?>