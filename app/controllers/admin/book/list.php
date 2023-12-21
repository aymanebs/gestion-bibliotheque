<?php

use App\models\Book;

require '../../../vendor/autoload.php';

    $book=new Book('','','','','','','','','','');
    $books=$book->display();
    foreach($books as $book){ ?>
        <tr>
            <td><?php echo $book['id']?></td>
            <td><?php echo $book['title']?></td>
            <td><?php echo $book['author']?></td>
            <td><?php echo $book['genre']?></td>
            <td><?php echo $book['description']?></td>
            <td><?php echo $book['publication_year']?></td>
            <td><?php echo $book['total_copies']?></td>
            <td><?php echo $book['avaible_copies']?></td>
            <td>
            <a href='/./views/admin/book/edit.php?id=<?php echo $book['id']?>'><i class='fas fa-edit btndit' style='cursor: pointer;'></i></a>
            <a href='/./app/controllers/admin/book/delete.php?id=<?php echo $book['id']?>'><i class='fas fa-trash-alt btndelete' style='cursor: pointer; padding-left: 20px;'></i></a>
            </td>
        </tr>
 <?php   }

?>