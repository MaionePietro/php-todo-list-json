<?php

$string = file_get_contents('./Todolist.json');
header('Content-Type: application/jsos');

$todoList = json_decode($string, true);

var_dump($todoList);
echo $todoList;
?>