<?php 
$controller = isset($_GET['c'])?ucfirst($_GET['c']):'User';
$action = isset($_GET['a'])?$_GET['a']:'login';
$config = include('./config.php');


include ('./function.php');
include ('./Controller/Controller.php');
include ('./Controller/'.$controller.'.php');


$obj = new $controller();
$obj->$action();