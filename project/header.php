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
            <a href="#" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Iwata Appliances</a>
         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="shop.php">Shop</a>
            <a href="contact.php">Contact Us</a>
            <div class="dropdown">
               <a href="javascript:void(0)">Products</a>
               <div class="dropdown-content">
               <div class="dropdown">
                        <a href="javascript:void(0)" class="sub-dropdown-btn">Tornado Brand</a>
                        <div class="dropdown-content">
                           <a href="shop.php#tornado-air-cooler">Tornado Air Cooler</a>
                           <a href="shop.php#tornado-industrial-fan">Tornado Industrial Fan</a>
                        </div>
                  </div>
                  <a href="shop.php#evaporative-coolers">Evaporative Air Cooler</a>
                  <a href="shop.php#non-industrial-coolers">Non-Industrial Air Cooler</a>
                  <a href="shop.php#industrial-fans">Industrial Fan</a>
                  <a href="shop.php#hvls-fans">HVLS Industrial Ceiling Fan</a>
                  <a href="shop.php#electricfans">Electricfan</a>
                  <a href="shop.php#rechargeable-fans">Rechargeable Portable Mini Fan</a>
                  <a href="shop.php#ultrasonic-fans">Ultrasonic Mist Fan</a>
                  <a href="shop.php#air-ventilation">Air Ventilation</a>
                  <a href="shop.php#air-curtain">Air Curtain</a>
                  <a href="shop.php#home-appliances">Home and Kitchen Appliances</a>
                  <a href="shop.php#water-dispenser">Water Dispenser</a>
                  <a href="shop.php#vacuum-cleaner">Vacuum Cleaner</a>
                  <a href="shop.php#hand-dryers">Hand dryers</a>
                  <a href="shop.php#rechargeable-lights">Rechargeable Emergency Led Lights</a>
               </div>
            </div>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div id="dropdown-menu" class="dropdown-content">
               <a href="home.php">Home</a>
               <a href="about.php">About</a>
               <a href="shop.php">Shop</a>
               <a href="contact.php">Contact</a>
            </div>
            <script>
               document.getElementById("menu-btn").onclick = function() {
               var dropdown = document.getElementById("dropdown-menu");
                  if (dropdown.style.display === "none" || !dropdown.style.display) {
                     dropdown.style.display = "block";
                  } else {
                     dropdown.style.display = "none";
                     }
               }
            </script>
            <a href="search_page.php" class="fas fa-search"></a>
            <!-- <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?> -->
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>