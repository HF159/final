
<?php
    session_start();
    include("./db/connect.php");
    $id =  $_POST['id'];
    $query1 = "SELECT * FROM film WHERE id='$id'";
    $result = mysqli_query($con,$query1);
    if(mysqli_num_rows($result) > 0){   
        $row = mysqli_fetch_assoc($result);
        $_SESSION['film_info']=$row;
    }
    $videoURL = $_SESSION['film_info']['trailer'];
    $convertedURL = str_replace("watch?v=","embed/", $videoURL);
    $actor1 = $_SESSION['film_info']['actor1'];
    $actor2 = $_SESSION['film_info']['actor2'];
    $query2 = "SELECT * FROM actor WHERE name='$actor1'";
    $result2 = mysqli_query($con,$query2);
    if(mysqli_num_rows($result2) > 0){   
        $row2 = mysqli_fetch_assoc($result2);
        $_SESSION['actor_info1']=$row2;
    }
    $query2 = "SELECT * FROM actor WHERE name='$actor2'";
    $result2 = mysqli_query($con,$query2);
    if(mysqli_num_rows($result2) > 0){   
        $row2 = mysqli_fetch_assoc($result2);
        $_SESSION['actor_info2']=$row2;
    }
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
<link rel="stylesheet" href="./css/card.css">
<title><?php  echo$_SESSION['film_info']['name']; ?></title>
</head>
<body>
    <?php  require"header.php"; ?>
    <section style="display: flex;width:80%;height:0 auto;margin: 2%; margin-left: 10%;
    justify-content:space-between" >
        <?php if($_SESSION['film_info']['series']){?>
        <h1><?php echo $_SESSION['film_info']['name'].": ".$_SESSION['film_info']['series'] ?></h1>
        <?php } else{ ?>
        <h1><?php echo $_SESSION['film_info']['name'].$_SESSION['film_info']['series'] ?></h1>
        <?php } ?>
        <h2><?php echo $_SESSION['film_info']['date']; ?></h2>
    </section>
    <section style="width:83%;height: 500px;margin-left: 8%;
    display:flex;">
        <div style="background-image:url('<?php echo $_SESSION['film_info']['image'].'logo.jpg'; ?>');;
        background-size:contain;
        background-position:center  ;
        background-repeat: no-repeat;
        float: left;
        display: block;
        margin-right: 2%;
        width: 30%;">
        </div>
        <div style=" width:68%;">
            <iframe   frameborder="0" allowfullscreen="1" style="width: 100%; height:100%;" src="<?php echo $convertedURL; ?>" ></iframe>
        </div>
    </section>
    <section style="display:flex; margin:0  10%;">
        <div style="width:100%; margin:40px 0;float:left;display:block;">
            <div class="category">
                <a href="#" role="button" class="categorya">
                    <span><?php echo $_SESSION['film_info']['cat1'] ?></span>
                </a>
                <a href="#" role="button" class="categorya">
                    <span><?php echo $_SESSION['film_info']['cat2'] ?></span>
                </a>
                <a href="#" role="button" class="categorya">
                    <span><?php echo $_SESSION['film_info']['cat3'] ?></span>
                </a>
            </div>
            <hr id="hr">
            <div class="description" style="float: left;
        width: 100%;margin-left:10px; margin-bottom:30px;">
                <span style="color:white;">
                    <?php echo $_SESSION['film_info']['desc1']; ?>
                </span>
            </div>
            <hr id="hr">
            <span class="stars" >stars:</span>
            <a href="#img1" role="button" class="categorya">
                <span><?php echo $_SESSION['film_info']['actor1'] ?></span>
            </a>
            <a href="#img2" role="button" class="categorya">
                <span><?php echo $_SESSION['film_info']['actor2'] ?></span>
            </a>
            <hr id="hr">
            <div style="width:850px; height:480px;margin-top:80px;">
            <?php require"swiper.php"?>
            </div>
        </div>
        <div class="body">
            <div class="containerr" id="img1">
                <div class="box">
                    <div class="imgBox">
                        <img src="<?php echo $_SESSION['actor_info1']['image'];?>" alt="">
                    </div>
                    <div class="contentt">
                        <h2><?php echo $_SESSION['film_info']['actor1'];?></br>
                        <span><?php echo $_SESSION['film_info']['actor_name1'];?></span></h2>
                    </div>
                </div>

                <div class="box" style="margin-top: 150px;" id="img2">
                    <div class="imgBox">
                        <img src="<?php echo $_SESSION['actor_info2']['image'];?>" alt="">
                    </div>
                    <div class="contentt">
                        <h2><?php echo $_SESSION['film_info']['actor2'];?></br>
                        <span><?php echo $_SESSION['film_info']['actor_name2'];?></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require"footer1.php" ?>
</body>
