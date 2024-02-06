<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="travel";

    $conn=mysqli_connect($server, $user, $pass, $db);
    if (mysqli_connect_errno()){
        echo 'Помилка підключення до ДБ ('.mysqli_connect_errno.'):'.mysqli_connect_error();
        exit();
    }
 ?>