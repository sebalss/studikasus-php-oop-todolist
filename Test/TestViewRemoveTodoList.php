<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";

addTodoList("Mochammad");
addTodoList("Iqbal");
addTodoList("Iskandar");

showTodoList();

viewRemoveTodoList();

showTodoList();