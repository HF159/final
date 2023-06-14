<?php
session_start();
include("db_config/connect.php");

$description = $_POST['description'];
$user_id = $_SESSION['user_info']['id'];
$date = date('Y-m-d H:i:s');
$foldername = '';
if (isset($_POST['uploadfile'])) {
    $filename = $_FILES['image']['name'];
    $filetmpname = $_FILES['image']['tmp_name'];
    $folder = 'imagers/';
    $foldername = 'imagers/' . $filename;
    move_uploaded_file($filetmpname, $folder . $filename);
}

$query = "INSERT INTO post(desc1, user_id, date, image) VALUES('$description','$user_id','$date','$foldername')";
$result = mysqli_query($con, $query);


if ($result) {
    // Query was successful
    // Store the data in a session variable
    header('location:view.php');
} else {
    // Query failed
    header("location:create.php?flag=1");
}
?>