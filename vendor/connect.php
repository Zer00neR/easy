<?php

    $connect = mysqli_connect('localhost', 'root','' , 'easy');

    if (!$connect) {
        die('Error connect to DataBase');
    }