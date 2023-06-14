
<section class="header" style="position: relative;">
    <h2 class="logo">High-Frequency</h2>
    <div>
      <ul id="navbar">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="blog.php">Films</a></li>
        <li><a href="about.php">About</a></li>
        <?php if(!$_SESSION['log_in']){ ?>
        <li><a href="login.php">register</a></li>
          <?php }?>
          <?php if($_SESSION['log_in']){ ?>
        <li><a href="login.php">logout</a></li>
          <?php }$_SESSION['log_in'] = 0;?>
        <i class="fa-solid fa-xmark" id="close"></i>
      </ul>
    </div>

  </section>