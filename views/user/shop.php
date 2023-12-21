<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/public/css/style.css">

</head>
<body>
   
<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <p> new <a href="login.php">login</a> | <a href="register.php">register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Bookly.</a>

         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="shop.php">shop</a>
            <a href="contact.php">contact</a>
            <a href="orders.php">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
              
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span></span> </a>
         </div>

         <div class="user-box">
            
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>

<div class="heading">
   <h3>our shop</h3>
   <p> <a href="home.php">home</a> / shop </p>
</div>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

     <form action="" method="post" class="box">
      <img class="image"  alt="">
      <div class="name"></div>
      <div class="price"></div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="">
      <input type="hidden" name="product_price" value="">
      <input type="hidden" name="product_image" value="">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
    
   </div>

</section>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="shop.php">shop</a>
         <a href="contact.php">contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="login.php">login</a>
         <a href="register.php">register</a>
         <a href="cart.php">cart</a>
         <a href="orders.php">orders</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
         <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
         <p> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </p>
         <p> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </p>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <p class="credit"> &copy; copyright  @  by <span>mr. web designer</span> </p>

</section>



<!-- custom js file link  -->
<script src="/public/js/script.js"></script>

</body>
</html>