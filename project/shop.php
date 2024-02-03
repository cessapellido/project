<?php

include 'config.php';

session_start();

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
   <title>Shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>our shop</h3>
   <p> <a href="home.php">home</a> / shop </p>
</div>

<section class="products">

   <p class="title">Promo Products</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Promo Products'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Evaporative Air Cooler</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Evaporative Air Cooler'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Non-Industrial Air Cooler</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Non-Industrial Air Cooler'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Industrial Fan</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Industrial Fan'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">HVLS Industrial Ceiling Fan</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'HVLS Industrial Ceiling Fan'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Electricfan</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Electricfan'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Rechargeable Portable Mini Fan</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Rechargeable Portable Mini Fan'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Ultrasonic Mist Fan</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Ultrasonic Mist Fan'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Air Ventilation</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Air Ventilation'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Air Curtain</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Air Curtain'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Home and Kitchen Appliances</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Home and Kitchen Appliances'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Water Dispenser</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Water Dispenser'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Vacuum Cleaner</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Vacuum Cleaner'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Hand dryers</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Hand dryers'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Rechargeable Emergency Led Lights</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Rechargeable Emergency Led Lights'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <p class="title">Tornado Brand</p>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE category = 'Tornado Brand'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
   <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">PHP <?php echo $fetch_products['price']; ?></div>
      <div class="description"><?php echo $fetch_products['description']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <textarea type=hidden name="description" value="<?php echo $fetch_products['description']; ?>"></textarea>
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
   </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>