<?php

include 'config.php';

session_start();

$user_id= isset($user_id) ? $user_id:"User";


//$user_id = $_SESSION['user_id'];


if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us | Iwata Appliances</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Contact Us</h3>
   <!-- <p class="slider-nav"><a href="index.php">home</a> / shop</p> -->
   <!-- Slider Container -->
   <div class="slider">
    <div class="slides">
        <div class="slide"><img src="images/Iwata-Appliances-Set-1.jpg" alt="Iwata Philippines Office Equipment Products"></div>
        <div class="slide"><img src="images/Iwata-Appliances-Set-2.jpg" alt="Iwata Philippines Water Dispenser Products"></div>
        <div class="slide"><img src="images/Iwata-Appliances-Set-3.jpg" alt="Iwata Philippines Air Ventilation Products"></div>
        <div class="slide"><img src="images/Iwata-Appliances-Set-4.jpg" alt="Iwata Philippines Vacuum Cleaner Products"></div>
        <div class="slide"><img src="images/Iwata-Appliances-Set-5.jpg" alt="Iwata Philippines Industrial Fan Products"></div>
        <div class="slide"><img src="images/Iwata-Appliances-Set-6.jpg" alt="Iwata Philippines Industrial Ceiling Fan Products"></div>
    </div>
    <!-- Optional: Navigation Arrows
    <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
    <a class="next" onclick="moveSlide(1)">&#10095;</a> -->
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("slide");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000); // Change image every 4 seconds
}

function moveSlide(n) {
  slideIndex += n - 1;
  showSlides();
}
</script>

<section class="contact">

   <form method="post">
      <h3>Say something!</h3>
      <input type="text" name="name" required placeholder="Enter your name" class="box">
      <input type="email" name="email" required placeholder="Enter your email" class="box">
      <input type="number" name="number" required placeholder="Enter your number" class="box">
      <textarea name="message" class="box" placeholder="Enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>