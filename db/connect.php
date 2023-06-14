<?php

    $host="localhost";
    $db_username="root";
    $db_pass="";
    $db_name="final";

    $con=mysqli_connect($host,$db_username,$db_pass,$db_name);
    if(!empty($con)){
    }else{
        echo("connection error");
    }

?>