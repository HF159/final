<?php
session_start();
include('db/connect.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add a film</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/alls.min.css"/>
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/css1.css">
    <link rel="stylesheet" href="./css/card.css">
</head>

<body>

    <?php require "header.php"; ?>
    <section class="create_film">
        <div class="create-box"  style="margin-top: 200px;">
            <h2>Add a film</h2>
            <form method="post" action="add_film.php" enctype="multipart/form-data">
                <ul>
                    <div class="user-box size2">
                        <input type="text" name="name" >
                        <label>Film_Name</label>
                    </div>
                    <div class="user-box size2">
                        <input type="text" name="series">
                        <label>Series</label>
                    </div>
                </ul>
                <ul> 
                    
                    <div class="user-box size2">
                        <input type="date" name="date" >
                        <label>Date</label>
                    </div>
                    <div class="user-box size1">
                        <input type="text" name="trailer" >
                        <label>Trailer</label>
                    </div>
                </ul>
                <ul>
                    <div class="user-box size1" style="width:100%;">
                        <input type="text" name="description" >
                        <label>Description</label>
                    </div>
                </ul>
                <ul>
                    <div class="user-box size3">
                        <input type="TEXT" name="cat1" >
                        <label>Category 1</label>
                    </div>
                    <div class="user-box size3">
                        <input type="text" name="cat2" >
                        <label>Category 2</label>
                    </div>
                    <div class="user-box size3">
                        <input type="text" name="cat3" >
                        <label>Category 3</label>
                    </div>
                </ul>
                <ul>
                    <div class="user-box size2">
                        <input type="text" name="act1" >
                        <label>Actor 1</label>
                    </div>
                    <div class="user-box size2">
                        <input type="text" name="act_name1" >
                        <label>Actor 1 in film</label>
                    </div>
                </ul>
                <ul>
                    <div class="user-box size2">
                        <input type="text" name="act2" >
                        <label>Actor 2</label>
                    </div>
                    <div class="user-box size2">
                        <input type="text" name="act_name2" >
                        <label>Actor 2 in film</label>
                    </div>
                </ul>
                <ul style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                    <label for="logo">Film Logo: &nbsp; &nbsp;</label>
                    <input type="file" accept="image/*" name="image">
                    
                </ul>
                <ul>
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </button>
                </ul>
            </form>
        </div>
    </section>

    <section class="create_film">
        <div class="create-box"  style="margin-top: 1000px;">
            <h2>Film Picture</h2>
            <form method="post" action="add_film_picture.php" enctype="multipart/form-data">
                <ul>
                    <div class="user-box size2">
                        <input type="text" name="name" >
                        <label>Film_Name</label>
                    </div>
                    <div class="user-box size2">
                        <input type="text" name="series">
                        <label>Series</label>
                    </div>
                </ul>
                
                <ul style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                    <label for="logo">Add some images: &nbsp; &nbsp;</label>
                    <input type="file" name="pictures[]" multiple>
                    
                </ul>
                <ul>
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </button>
                </ul>
            </form>
        </div>
    </section>
    
    <section class="create_film">
        <div class="create-box"  style="margin-top: 1500px;">
            <h2>Actor Picture</h2>
            <form method="post" action="add_actor_picture.php" enctype="multipart/form-data">
                <ul>
                    <div class="user-box size2">
                        <input type="text" name="name" >
                        <label>Actor Name</label>
                    </div>
                </ul>
                
                <ul style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
                    <label for="image">Add a photo: &nbsp; &nbsp;</label>
                    <input type="file" accept="image/*" name="image">
                    
                </ul>
                <ul>
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </button>
                </ul>
            </form>
        </div>
    </section>
    <?php require "footer1.php"; ?>
    <script>
    document.getElementById('imageInput').addEventListener('change', function() {
        var file = this.files[0];
        var maxSizeInBytes = 5 * 1024 * 1024; // 5MB

        if (file && file.size > maxSizeInBytes) {
        alert('Please select an image smaller than 5MB.');
        this.value = null; // Reset the input
        }
    });
    </script>
</body>

</html>