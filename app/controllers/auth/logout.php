<?php

use App\config\SessionManager;

require './vendor/autoload.php';

$session=new SessionManager();
$session->startSession();
$session->endSession();
?>