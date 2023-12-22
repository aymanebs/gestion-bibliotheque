<?php

use App\config\SessionManager;

require __DIR__ . '/../../../vendor/autoload.php';

$session=new SessionManager();
$session->startSession();
$session->endSession();
header('Location:../../../views/auth/login.php');
exit();
?>