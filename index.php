
  <?php
      session_start();
      include("./db/connect.php");
      ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/alls.min.css"
    />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/css2.css">
    <link rel="stylesheet" href="./css/posterr.scss">
    <title>High Frequency</title>
  </head>
  <body>
    <?php require"header.php"?>
    <br><br><br>
    <section >
      <div class="container">
        <div class="item">
            <div class="quote">
              <p>That really is America's ass.<span>Captain America</span></p>
            </div>
        </div>
        <div class="item">
          <div class="quote">
            <p>You'r the head of security and your password is 'password'&nbsp;?<span>Peter Parker</span></p>
          </div>
        </div>

        <div class="item">
          <div class="quote">
            <p>I am Groot.<span>Groot</span></p>
          </div>
        </div>
        <div class="item">
          <div class="quote">
            <p>The hardest choices require the strongest wills.<span>Thanos</span></p>
          </div>
        </div>
        <div class="item">
          <div class="quote">
            <p>Genius, billionaire, playboy, philanthropist.<span>Tony Stark</span></p>
          </div>
        </div>
        <div class="item">
          <div class="quote">
            <p>We never lose our demons. We only learn to live above them.<span>Ancient One</span></p>
          </div>
        </div>
    </div>
  </section>
  <br><br><br><br>
  <hr  style="margin-left: 10%;width:80%;margin-bottom:50px;">
  
  <section class="page-content">
      
    
        
        <?php

$sql = "SELECT * FROM film";

// Execute the query
$result = mysqli_query($con, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        
        $name = $row['name'];
        $image1 = $row['image'];
        $date = $row['date'];

?>
    <div  class="card" style="background-image:url('<?php echo $image1.'logo.jpg'?>');
background-size: cover;
background-position:center  ;
background-repeat: no-repeat;
margin-bottom:70px;">
        <div  class="content" >
          
            <div><h2 class="title"><?php echo $name; ?></h2>
              <form action="film.php" method = "post">
                <button class="btn" name="id" value="<?php  echo $row['id']; ?>">More Info</button>
              </form>
            </div>
          </div>
        </div>
  <?php }    } else {
    echo "No data found.";
} ?>
    
    </section>
    <hr  style="margin-left: 10%;width:80%;margin-bottom:50px;">
    <?php
    $query1 = "SELECT cat_name FROM category";
    $result = mysqli_query($con,$query1);
    
    ?>
  <div class="category" style="display: flex;
  align-items: center;
  margin-left:25%;">
      <?php  if ($result) {
      while ($row = mysqli_fetch_array($result)) {
        $cat_name = $row['cat_name'];?>
                <a href="#" role="button" class="categorya1" >
                    <span><?php echo $cat_name ?></span>
                </a>
      <?php } }?>
  </div>
  
    <?php require"footer1.php" ?>
    <script src="script.js"></script>
  </body>
</html>
