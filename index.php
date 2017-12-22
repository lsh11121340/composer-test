<?php
require './vendor/autoload.php';
//通道名字my_logger
$user=new \User_app\user();
$factory=new \Factory_app\factory();
echo $user->desc();
echo "<br/>";
echo $factory->desc();
?>