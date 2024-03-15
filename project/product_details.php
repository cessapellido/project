<?php
include 'config.php';
session_start();

// Retrieve product details from the POST request
if(isset($_POST['product_name']) && isset($_POST['product_image'])) {
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $description = $_POST['view_description'];
    $product_price = $_POST['product_price'];
} else {
    // Handle the case where product details are not provided
    // Redirect the user back to the main shop page or display an error message
    header("Location: shop.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product_name; ?> - Product Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php include 'header.php'; ?>

<div class="product-details">
<a href="shop.php" class="back-button"><i class="fas fa-arrow-left"></i> Back to Shop</a>

    <div class="product-container">
        <div class="product-image">
            <img src="uploaded_img/<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>">
        </div>
        <div class="product-info">
            <h1 class="product-title"><?php echo $product_name; ?></h1>
            <div class="product-description"><?php echo nl2br($description); ?></div>
            <div class="product-cart">
                <span class="price"> Price: PHP <?php echo $product_price; ?></span>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product_name; ?> - Product Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .back-button {
            position: absolute;
            top: 140px;
            left: 40px;
            z-index: 9999;
            text-decoration: none;
            color: #000;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
            
            /* Responsive positioning */
            @media screen and (max-width: 768px) {
            top: 110px;
            left: 20px;
            font-size: 16px; /* Adjust font size for smaller screens */
            }

        }
    </style>
</head>
