<?php
require_once 'vendor/autoload.php';

use app\models\User as User;

$user = new User('santosh', 'pandey');
echo $user->getFullName();

 ?>
