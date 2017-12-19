<?php
require './vendor/autoload.php';
//通道名字my_logger
$log = new Monolog\Logger('my_logger');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::INFO));
//栈先进后出，warning先调用
$log->pushHandler(new Monolog\Handler\FirePHPHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('哈哈');
$log->addInfo('张三',array('zhang san','10'));

$user=new \User_app1\user();
$factory=new \Factory_app\factory();
echo $user->desc();
echo "<br/>";
echo $factory->desc();

?>