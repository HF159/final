
<section class="header" style="position: relative;">
    <h2 class="logo">High-Frequency</h2>
    <div>
      <ul id="navbar">
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'film.php') ? 'active' : ''; ?>" href="film.php">Film</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'actor.php') ? 'active' : ''; ?>" href="actor.php">Actors</a></li>
        <li><a class="<?php echo (basename($_SERVER['PHP_SELF']) == 'create.php') ? 'active' : ''; ?>" href="create.php">Create</a></li>
        <?php if(!$_SESSION['log_in']){ ?>
        <li><a href="login.php">Login</a></li>
          <?php }?>
          <?php if($_SESSION['log_in']){ ?>
        <li><a href="login.php">logout</a></li>
          <?php }$_SESSION['log_in'] = 0;?>
        <i class="fa-solid fa-xmark" id="close"></i>
      </ul>
    </div>

  </section>