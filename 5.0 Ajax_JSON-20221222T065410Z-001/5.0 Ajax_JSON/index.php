<?php
//database
$books  = [
    'author 1' => ['title 1','title 2'],
    'author 2' => ['title 3'],
    'author 3' => ['title 4','title 5']
];
//@ - used to supress warnings
@$request = $_GET['value'];
if(isset($_GET['value'])){
    $results = $books[$request];
}else{
    $results =  $books;
}
?>

<ul>
    <li><a href="index.php">All</a></li>
    <li><a href="index.php?value=author 1">Author 1</a></li>
    <li><a href="index.php?value=author 2">Author 2</a></li>
</ul>

<?php foreach($results as $key => $value):
    if(is_array($value))
        echo "<p>" .$key . " : </p>". implode('<br>',$value);
    else
        echo $value.'&nbsp;';
endforeach; ?>