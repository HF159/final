<?php
  include('db/connect.php');
  $_SESSION['log_in']= false;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // if (isset($_POST['uploadfile'])) {
  //   $filename = $_FILES['image']['name'];
  //   $filetmpname = $_FILES['image']['tmp_name'];
  //   $folder = 'imagers/';
  //   $foldername ='imagers/'.$filename;

  //   move_uploaded_file($filetmpname, $folder . $filename);
  // }
  $query = "INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
  mysqli_query($con, $query);
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