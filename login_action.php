<?php

    session_start();
    $_SESSION['log_in']= 0;
    include("db/connect.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from user where email = '$email' && password ='$password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0){   
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_info']=$row;
        $_SESSION['log_in']= 1;
        header('location:index.php');
    }else{
        header("location:login.php?flag=1");
    }

?>