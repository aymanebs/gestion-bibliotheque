<?php
require '../../../vendor/autoload.php';

use App\models\User;

$user = new User('','','','','','');
$users = $user->display();
foreach ($users as $user) {
?>
    <tr>
        <td><?php echo $user['id'] ?></td>
        <td><?php echo $user['fullname'] ?></td>
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['phone'] ?></td>
        <td>
            <a href='/./views/admin/users/edit.php?id=<?php echo $user['id']?>'><i class='fas fa-edit btndit' style='cursor: pointer;'></i></a>
            <a href='/./app/controllers/admin/users/delete.php?id=<?php echo $user['id']?>'><i class='fas fa-trash-alt btndelete' style='cursor: pointer; padding-left: 20px;'></i></a>
        </td>
    </tr>
<?php
}
?>