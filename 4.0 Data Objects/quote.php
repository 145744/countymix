<?php
require_once "ClassLoader.php";
class Quote extends Database implements Crud{

  public function __construct(){
    parent:: __construct(); // call the parent constructor
  }
  public function insert(){
    //form - pass the data
    $sql = "INSERT INTO quote(quote, author, dob, dod,category)
    VALUES('The problem with self-esteem - whether it is high or low- is that every single day we are in the courtroom', 'Tim Keller', 1950,0 , 'self-esteem')";

    //run the query
    $this->connection->query($sql);
  }
  public function get($id=0){
    //if id is set, then we return one record get(1)
    //Security - SQL injection
    if($id!=0)
      $sql = "SELECT * FROM quote WHERE qid = $id";
      else
        $sql = "SELECT * FROM quote";
        //execute the query
        $results = $this->connection->query($sql);
        //get the resultset
        if($id!=0)
          return $results->fetch_assoc();
          else
          return $results->fetch_all(MYSQLI_ASSOC);
      }
    //else we return all (quotes)
  public function delete($id){
    try {
      if($this->get($id)){

      $sql = "DELETE FROM quote WHERE qid = $id";
      //execute the query
      $this->connection->query($sql);

      echo "RECORD DELETED SUCCESSFULLY";
    }
    else {
      echo "RECORD DOES NOT EXIST";
    }
    } catch (Exception $e) {
      echo "SOMETHIG WENT WRONG CONTACT YOUR ADMIN";
      //LOGGING: @TODOO
    }
}
}
$test = new Quote();
//$test->insert();
$singleQuote= ($test->get(2));
echo '<p>'.$singleQuote['qid'].'</p>';
echo '<p>'.$singleQuote['quote'].'</p>';
echo '<p>'.$singleQuote['author'].'</p>';

$allQuotes = $test->get();
foreach($allQuotes as $quote)
  echo '<p>'.$quote['qid'].'</p>';
  echo '<p>'.$quote['quote'].'</p>';
  echo '<p>'.$quote['author'].'</p>';

//Object Relational Mappers
$test->delete(1);
 ?>