<?php

use App\models\Book;

require __DIR__ .'/../../../../vendor/autoload.php';

    $book=new Book('','','','','','','','','','');
    $books=$book->display();
    foreach($books as $book){ ?>
     <form action="" method="post" class="box">
      <img class="image"  src="<?php echo $book['image_path']; ?>" alt="">
      <div class="name"><?php echo $book['title']; ?></div>
      <div class="name"><?php echo $book['author']; ?></div>
      <!-- <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>"> -->
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
         ?>