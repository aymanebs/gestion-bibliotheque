<?php

use App\models\Book;

require '../../../vendor/autoload.php';

    $book=new Book('','','','','','','','');
    $users=$book->display();
    foreach($users as $user){ ?>
        <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['title']?></td>
            <td><?php echo $user['author']?></td>
            <td><?php echo $user['genre']?></td>
            <td><?php echo $user['description']?></td>
            <td><?php echo $user['publication_year']?></td>
            <td><?php echo $user['total_copies']?></td>
            <td><?php echo $user['avaible_copies']?></td>
            <td>
            <a href='edit.php'?id=<?php echo $user['id']?>><i class='fas fa-edit btndit' style='cursor: pointer;'></i></a>
            <a href='delete.php'?id=<?php echo $user['id']?>><i class='fas fa-trash-alt btndelete' style='cursor: pointer; padding-left: 20px;'></i></a>
            </td>
        </tr>
 <?php   }

?>