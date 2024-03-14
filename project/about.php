<?php

include 'config.php';

session_start();

$user_id= isset($user_id) ? $user_id:"User";


//$user_id = $_SESSION['user_id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <!-- <p class="slider-nav"><a href="home.php">home</a> / shop</p> -->
   <!-- Slider Container -->
   <div class="slider">
    <div class="slides">
        <div class="slide"><img src="images/cover1.jpg" alt="Image 1"></div>
        <div class="slide"><img src="images/cover2.jpg" alt="Image 2"></div>
        <div class="slide"><img src="images/cover3.jpg" alt="Image 3"></div>
        <div class="slide"><img src="images/cover5.jpg" alt="Image 5"></div>
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

<section class="sales-info">
    <div class="container">
        <img src="images/sales.jpg" alt="Sales Representative">
        <div class="content">
            <h1>Sales Executive Info</h1>
            <ul>
                <li><i class="fas fa-envelope"></i> raymondmagallanes23@gmail.com</li>
                <li><i class="fas fa-phone"></i> +63 (930) 389 1618</li>
                <li><i class="fab fa-facebook-f"></i> Raymond Mesayra</li>
                <li><i class="fas fa-home"></i> sampaloc, manila - 400104</li>
            </ul>
            <p>Raymond Mesayra is a dedicated Sales Executive at IWATA, known for delivering exceptional customer service. With years of experience under his belt, Raymond has become proficient in understanding client needs and providing tailored solutions. He stands out for his responsiveness and commitment to assisting clients through every step of their purchasing journey. His approachable demeanor and in-depth product knowledge make him a reliable point of contact for customers seeking advice and support. Whether you are a new customer exploring IWATA's offerings or a returning client, Raymond is there to ensure a seamless and satisfying experience.</p>
            <a href="contact.php" class="btn">Keep In Touch</a>
        </div>
    </div>
</section>


<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/About-pic.jpg" alt="">
      </div>

      <div class="content">
         <h3>Our Philosophy</h3>
         <p>At Iwata Appliances, we believe in the power of innovation to transform homes. Our products are designed to blend seamlessly into your lifestyle, providing functionality and elegance in equal measure. We are dedicated to offering appliances that not only look great but also stand the test of time.</p>
         <h3>Why Choose Iwata</h3>
         <p>Quality Assurance: Every Iwata product undergoes rigorous testing to ensure it meets our high standards.</p>
         <p>Innovation: We continuously evolve our product line to incorporate the latest technology and design trends.</p>
         <p>Customer Focus: Your satisfaction is our priority. We offer excellent customer service and support to ensure a seamless experience.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <p>Thank you for very good service and to your good quality product</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr. Caranzo</h3>
      </div>

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <p>Raymond is the right sales person for IWATA, providing immediate delivery and technical support for your unit, maraming salamat Raymond</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr. Feliciano</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <p>As promised by the Vice President Sara Duterte when she visited the Municipality of Jordan las Aug 25, 2022, the industrial ceiling fan is now inside Jordan Municipal Covered Gym. Hon. Cresente "Engue" P. Chavez, Jr. and the people of the Municipality of Jordan is very greatful of your assistance. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>LGU Jordan</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <p>I highly recommend Reymund. He never fails to help me with our orders. He also makes sure that we are well assisted even if he is not at work. Excellent Customer Service!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Johanna Ramos, VP of Oneshot Equipment & Supplies Corp.</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <p>I highly recommend Raymond Mesayra. Quick shipping, quality products, and superb customer service. A reliable seller! Thank you</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ms. Pareja</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <p>Sellers Strength: Punctuality, Communication and Fair Pricing</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr. Arnold</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

