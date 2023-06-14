<footer class="section-p1">
      <div class="col">
        <a href="#" class="logo logo-f">High-Frequency</a>
        <h4>Contact</h4>
        <p>
          <strong>Address:  </strong>  Iul Wardaniye
        </p>
        <p><strong>Phone: </strong> +961 76681436</p>

        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col2">
      <p>   
      <?php     
        $sql = "SELECT * FROM category";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
          
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['cat_id'];
                $name = $row['cat_name'];
                ?>
        <a href="#" style="padding: 10px;"><?php echo $name;?>    
             </a>
             <?php }} ?> </p>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>

        <a href="#">Privacy Policy</a>
        <a href="#">Terms & conditions</a>
        <a href="#">Contact Us</a>
      </div>


      <div class="copyright">
        <p>Ali Makki, @ 2023, Hadi Fares</p>
      </div>
    </footer>