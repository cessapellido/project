<?php

session_start();

include 'config.php';

$user_id= isset($user_id) ? $user_id:"User";


//$user_id = $_SESSION['user_id'];


if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

//   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

//   if(mysqli_num_rows($check_cart_numbers) > 0){
//      $message[] = 'already added to cart!';
//   }else{
//      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
//      $message[] = 'product added to cart!';
//   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | Iwata Appliances</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>SHOP AT HOME</h3>
      <p>Home Solutions, One Click Away!</p>
      <a href="about.php" class="white-btn">Discover More</a>
   </div>

</section>

<section class="authors">

   <h1 class="title">PRODUCTS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Iwata-Home-Evaporative.jpeg" alt="Iwata Appliances Evaporative">
         <div href = "shop.php#evaporative-coolers" class="share">
            <a href = "shop.php#evaporative-coolers" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Evaporative Air Cooler</h3>
         </a>
      </div>

      <div class="box">
         <img src="images/Iwata-Home-Non-industrial.jpeg" alt="Iwata Appliances Non-industrial">
         <div class="share">
            <a href = "shop.php#non-industrial-coolers" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Non-Industrial Air Cooler</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Industrial-fan.jpeg" alt="Iwata Appliances Industrial fan">
         <div class="share">
            <a href = "shop.php#industrial-fans" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Industrial Fan</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Hvls-fans.jpeg" alt="Iwata Appliances Industrial Ceiling Fan">
         <div class="share">
            <a href = "shop.php#hvls-fans" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>HVLS Industrial Ceiling Fan</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Electricfans.jpeg" alt="Iwata Appliances Electricfan">
         <div class="share">
            <a href = "shop.php#electricfans" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Electricfan</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Rechargeable-fans.jpeg" alt="Iwata Appliances Rechargeable Fans">
         <div class="share">
            <a href = "shop.php#rechargeable-fans" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Rechargeable Portable Mini Fan</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Ultrasonic-fans.jpeg" alt="Iwata Appliances Ultrasonic Fans">
         <div class="share">
            <a href = "shop.php#ultrasonic-fans" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Ultrasonic Mist Fan</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Air-ventilation.jpeg" alt="Iwata Appliances Air Ventilation">
         <div class="share">
            <a href = "shop.php#air-ventilation" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Air Ventilation</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Air-curtain.jpeg" alt="Iwata Appliances Air Curtain">
         <div class="share">
            <a href = "shop.php#air-curtain" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Air Curtain</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Kitchen-Appliances.jpeg" alt="Iwata Home and Kitchen Appliances">
         <div class="share">
            <a href = "shop.php#home-appliances" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Home and Kitchen Appliances</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Water-Dispenser.jpeg" alt="Iwata Appliances Water Dispenser">
         <div class="share">
            <a href = "shop.php#water-dispenser" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Water Dispenser</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Vacuum-Cleaner.jpeg" alt="Iwata Appliances Vacuum Cleaner">
         <div class="share">
            <a href = "shop.php#vacuum-cleaner" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Vacuum Cleaner</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Hand-Dryer.jpeg" alt="Iwata Appliances Hand Dryer">
         <div class="share">
            <a href = "shop.php#hand-dryers" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Hand Dryers</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Rechargeable-Lights.jpeg" alt="Iwata Appliances Rechargeable Light">
         <div class="share">
            <a href = "shop.php#rechargeable-lights" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Rechargeable Emergency Led Lights</h3>
         </a>
      </div>

      <div class="box">
      
         <img src="images/Iwata-Home-Tornado-Brand.jpeg" alt="Iwata Appliances Tornado Brand">
         <div class="share">
            <a href = "shop.php#tornado-brand" class="fa fa-shopping-bag">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Tornado Brand</h3>
         </a>
      </div>

   </div>

</section>


<section class="products">

   <h1 class="title">Latest Products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="product_details.php" method="post" class="box">
     <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="Iwata Products">
         <div class="name"><?php echo $fetch_products['name']; ?></div>
         <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
         <button type="submit" class="view-description" name="view_description" value="<?php echo $fetch_products['description']; ?>">View Description</button>
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">Load More</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/Iwata-Home-All-Appliances.jpeg" alt="Iwata Appliances">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p>Welcome to Iwata Appliances - Your Ultimate Destination for Innovative Home Solutions! Founded in 2006, Iwata Appliances began with a simple vision: to offer high-quality, innovative home appliances that make daily living more comfortable and efficient.</p>
         <a href="about.php" class="btn">Read More</a>
      </div>

   </div>

</section>


<section class="home-contact">

   <div class="content">
      <h3>Have any questions?</h3>
      <p>Do you have any questions about our products? Ask away! Get in touch with me through any of the available different platforms and channels, and I'd be more than happy to assist you and meet your home appliances needs!</p>
      <a href="contact.php" class="white-btn">Contact Us</a>
   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>