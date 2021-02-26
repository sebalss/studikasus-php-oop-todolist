<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Mochammad");
addTodoList("Iqbal");
addTodoList("Iskandar");

var_dump($todoList);