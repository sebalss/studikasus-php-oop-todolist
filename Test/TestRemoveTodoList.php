<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Eko");
addTodoList("Kurniawan");
addTodoList("Khannedy");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(4);
showTodoList();

$success = removeTodoList(4);
var_dump($success);
showTodoList();