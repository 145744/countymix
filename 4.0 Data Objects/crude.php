<?php

interface Crud{
  public function insert();
  public function get($id = 0);//optional parameters/args
  public function delete($id);
}




?>
