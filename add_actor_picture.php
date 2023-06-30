<?php
session_start();
include("db/connect.php");
$actor_name = $_POST['name'];
$directory= './images/actors/';


// Check if the target directory exists, and create it if not
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}


$image = $_FILES['image']['tmp_name'];
$targetFilePath = $directory.$actor_name.'.jpg';
move_uploaded_file($image, $targetFilePath);

$query = "INSERT INTO actor(name, image) VALUES ('$actor_name','$targetFilePath')";
$result = mysqli_query($con, $query);


if ($result) {
    // Query was successful
    // Store the data in a session variable
    header('location:index.php');
} else {
    // Query failed
    header("location:crate.php?flag=1");
}

?>