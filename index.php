

<?php 
require __DIR__ .'/vendor/autoload.php';

Use App\config\SessionManager;

$session= new SessionManager();
$session->startSession();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</html> <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/public/css/style.css">

</head>
<body>

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">
<?php
   require __DIR__ ."/app/controllers/utilisateur/book/list.php";
   ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus, amet ullam voluptatibus?</p>
      <a href="contact.php" class="white-btn">contact us</a>
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