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
   <title>Home</title>

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
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="authors">

   <h1 class="title">PRODUCTS</h1>

   <div class="box-container">

      <div class="box">
         <a href = "shop.php#evaporative-coolers">
         <img src="images/evaporative.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Evaporative Air Cooler</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#non-industrial-coolers">
         <img src="images/non-industrial.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Non-Industrial Air Cooler</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#industrial-fans">
         <img src="images/industrial-fan.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Industrial Fan</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#hvls-fans">
         <img src="images/hvls-fans.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>HVLS Industrial Ceiling Fan</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#electricfans">
         <img src="images/electricfans.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Electricfan</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#rechargeable-fans">
         <img src="images/rechargeable-fans.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Rechargeable Portable Mini Fan</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#ultrasonic-fans">
         <img src="images/ultrasonic-fans.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Ultrasonic Mist Fan</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#air-ventilation">
         <img src="images/air-ventilation.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Air Ventilation</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#air-curtain">
         <img src="images/air-curtain.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Air Curtain</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#home-appliances">
         <img src="images/home-appliances.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Home and Kitchen Appliances</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#water-dispenser">
         <img src="images/water-dispenser.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Water Dispenser</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#vacuum-cleaner">
         <img src="images/vacuum-cleaner.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Vacuum Cleaner</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#hand-dryers">
         <img src="images/hand-dryers.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Hand Dryers</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#rechargeable-lights">
         <img src="images/rechargeable-lights.jpeg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/raymond.mesayra.9" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/raym_ondmagallanes?igsh=OGQ5ZDc2ODk2ZA==" class="fab fa-instagram"></a>
            <a href="https://msng.link/o?639303891618=vi" class="fab fa-viber"></a>
         </div>
         <h3>Rechargeable Emergency Led Lights</h3>
         </a>
      </div>

      <div class="box">
      <a href = "shop.php#tornado-brand">
         <img src="images/tornado-brand.jpeg" alt="">
         <div class="share">
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

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="product_details.php" method="post" class="box">
     <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
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
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/all-in-appliances.jpeg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Welcome to Iwata Appliances - Your Ultimate Destination for Innovative Home Solutions! Founded in 2006, Iwata Appliances began with a simple vision: to offer high-quality, innovative home appliances that make daily living more comfortable and efficient. </p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Do you have any questions about our products? Ask away! Get in touch with me through any of the available different platforms and channels, and I'd be more than happy to assist you and meet your home appliances needs!</p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>