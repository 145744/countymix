<?php

$books  = [
    'author 1' => ['title 1','title 2'],
    'author 2' => ['title 3'],
    'author 3' => ['title 4','title 5']
];
@$request = $_GET['value'];
if(isset($_GET['value'])){
    echo json_encode($books[$request]);
}else{
    echo json_encode($books);
}