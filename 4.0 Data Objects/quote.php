<?php
require_once "classloader.php";

class Quote extends Database implements Crud{

  public function _construct(){
    parent::_construct();//call the parent constructor
  }

  public function insert(){
    $sql = "INSERT INTO quote(quote,author,dob,dod,category)
    VALUES ('In God we trust, all others bring data',
    'Deaming', 1901,1993,'data-science')
    ";
    //run the query
    $this->connection->Query($sql);
  }

    public function get($id = 0){}
      public function delete($id){}
}
$test = new Quote();
$test->insert();
 ?>
