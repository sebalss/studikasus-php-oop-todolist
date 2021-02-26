<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(){

    $todolistRepository = new TodolistRepositoryImpl();

    $todolistRepository->todolist[1] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP DATABASE");

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();

}

function testAddTodolist(){

    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP DATABASE");

    $todolistService->showTodolist();

}

function testRemoveTodolist(){

    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP DATABASE");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(3);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(5);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();

}
testRemoveTodolist();