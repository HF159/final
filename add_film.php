<?php
session_start();
include("db/connect.php");
$film_name = $_POST['name'];
$series = $_POST['series'];
if ($series == 'none'){
    $series ='';
}
$directory= './images/'.$film_name.$series.'/';


$trailer = $_POST['trailer'];
$cat1 = $_POST['cat1'];
$cat2 = $_POST['cat2'];
$cat3 = $_POST['cat3'];
$act1 = $_POST['act1'];
$act_name1 = $_POST['act_name1'];
$act2 = $_POST['act2'];
$act_name2 = $_POST['act_name2'];
$description = $_POST['description'];
$date = date('Y-m-d');
// Create the directory if it doesn't exist
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}

// Handle image upload and rename as "logo.jpg"
$image = $_FILES['image']['tmp_name'];
$targetFilePath = $directory . 'logo.jpg';
move_uploaded_file($image, $targetFilePath);

$query = "INSERT INTO film (name, series, trailer,image, cat1, cat2, cat3, actor1, actor_name1, actor2, actor_name2, desc1, date) 
          VALUES ('$film_name', '$series', '$trailer','$directory', '$cat1', '$cat2', '$cat3', '$act1', '$act_name1', '$act2', '$act_name2', '$description', '$date')";
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