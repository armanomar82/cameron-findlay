<?php

    $sname = "localhost";
    $uname = "mari";
    $password = "mari";

    $db_name = "crud";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if(!$conn){
        echo "connect fild!";
    }