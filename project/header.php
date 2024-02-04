<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Iwata.Appliances</a>

         <nav class="navbar">
               <a href="home.php">Home</a>
               <a href="about.php">About</a>
               <a href="shop.php">Shop</a>
               <a href="contact.php">Contact</a>
               <div class="dropdown">
               <a href="shop.php">Products ⮛</a>
                  <div class="dropdown-content">
                     <a href="contact.php">Evaporative Air Cooler</a>
                     <a href="#">Non-Industrial Air Cooler</a>
                     <a href="#">Industrial Fan</a>
                     <a href="#">HVLS Industrial Ceiling Fan</a>
                     <a href="#">Electricfan</a>
                     <a href="#">Rechargeable Portable Mini Fan</a>
                     <a href="#">Ultrasonic Mist Fan</a>
                     <a href="#">Air Ventilation</a>
                     <a href="#">Air Curtain</a>
                     <a href="#">Home and Kitchen Appliances</a>
                     <a href="#">Water Dispenser</a>
                     <a href="#">Vacuum Cleaner</a>
                     <a href="#">Hand dryers</a>
                     <a href="#">Rechargeable Emergency Led Lights</a>
                     <a href="#">Tornado Brand</a>
                  </div>
            </div>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>