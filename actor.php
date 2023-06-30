
<?php
    session_start();
    include("./db/connect.php");
    $query = "SELECT * FROM actor";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0){
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/alls.min.css"/>
<link rel="stylesheet" href="./css/header.css" />
<link rel="stylesheet" href="./css/css1.css">
<link rel="stylesheet" href="./css/actor2.css">
<title>High Frequency</title>
</head>
<body>
    <?php  require"header.php"; ?>
    <section class="section">
        <?php   while ($row = mysqli_fetch_assoc($result)) {
            $actorName = $row['name'];
            $actorPicture = $row['image'];

            // Retrieve the films the actor has participated in
            $query2 = "SELECT name, series, image FROM film WHERE actor1 LIKE '%$actorName%' or actor2 LIKE '%$actorName%' ";
            $result2 = mysqli_query($con, $query2);

            if ($result2 && mysqli_num_rows($result2) > 0) {?>
        <div class="main">
                <?php } $i = 4 - mysqli_num_rows($result2)?>
            <?php while ($row2 = mysqli_fetch_assoc($result2)) {
                    $filmName = $row2['name'];
                    $series = $row2['series'];
                    $image = $row2['image'];
                    ;?>
            <div class="card" id="<?php echo 'c'.$i ?>" style="
            background-image:url('<?php echo $image?>logo.jpg');
            background-size: cover;
            background-position:center  ;
            background-repeat: no-repeat; ">
                <p class="text" style="align-self: flex-end;"><?php  echo $filmName.' '.$series ;?></p>
            </div>
            <?php $i++; }?>
            <div class="card" id="c4" style="
            background-image:url('<?php echo $actorPicture?>');
            background-size: cover;
            background-position:center  ;
            background-repeat: no-repeat; ">
            <p style="align-self: flex-end;justify-item:center;z-index:1;"><?php  echo $actorName ;?></p>
            </div>
        </div>
        <?php } } ?>
    </section>
    <?php require"footer1.php" ?>
</body>
