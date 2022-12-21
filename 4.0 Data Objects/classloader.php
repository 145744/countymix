<?php
function loader($className){
  require_once $className.".php";
}

//register the autoload function
spl_autoload_register("loader");

 ?>
