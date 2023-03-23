<?php

$string = file_get_contents('./Todolist.json');
$todoList = json_decode($string, true);

var_dump($todoList);
header('Content-Type: application/jsos');
echo json_encode($todoList);
?>