<?php

use App\config\SessionManager;
use App\models\Book;

require __DIR__ .'/../../../../vendor/autoload.php';
    $session=new SessionManager();
    $user_id = $_SESSION['user_id'];

    $book=new Book('','','','','','','','','','');
    $books=$book->display();
    foreach($books as $book){ ?>
<form action="app/controllers/utilisateur/book/cart.php" method="post" class="box">
        <img class="image" src="<?php echo $book['image_path']; ?>" alt="">
        <div class="name"><?php echo $book['title']; ?></div>
        <div class="name"><?php echo $book['author']; ?></div>
        <input type="text"name="reservation_date" id="form3Example1c" class="form-control" value="" pattern="\d{4}-\d{2}-\d{2}" />
        <a href="../../../../views/utilisateur/add.php?id=<?php echo $book['id']?>" class="btn" role="button">Add to Cart</a>
    </form>
<?php } ?>
      <?php
         
         ?>

   