<?php
session_start();
include("db/connect.php");
$film_name = $_POST['name'];
$series = $_POST['series'];
if ($series == 'none'){
    $series ='';
}
$directory= './images/'.$film_name.$series.'/';


// Check if the target directory exists, and create it if not
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}


$uploadedFiles = $_FILES['pictures'];

// Get the total number of uploaded files
$totalFiles = count($uploadedFiles['name']);

// Iterate through each uploaded file
for ($i = 0; $i < $totalFiles; $i++) {
    $tempFilePath = $uploadedFiles['tmp_name'][$i];
    
    // Generate the filename with consecutive numbers
    $newFileName = ($i + 1) . '.jpg';
    
    $targetFilePath = $directory . $newFileName;

    // Move the file to the target directory with the new filename
    move_uploaded_file($tempFilePath, $targetFilePath);

    // Perform further processing or store the file path in a database, if needed
    // Example: Insert $targetFilePath into the database

    // Output the filename for reference
    
}
header('location:index.php');

?>