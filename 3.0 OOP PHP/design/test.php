<?php

//require_once "Classes/Main.php";
//require_once "Design/Main.php";

//Aliasing

function loader($className){
  require_once $className.'.php';
}
spl_autoload_register("loader");

$object = new Classes\Main();
$object = new Classes\Main();
 ?>
