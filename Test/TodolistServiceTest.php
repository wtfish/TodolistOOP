<?php
require_once __DIR__."/../Service/TodolistService.php";
require_once __DIR__."/../Repository/TodolistRepository.php";
require_once __DIR__."/../Entity/Todolist.php";
function testShowTodolist(){
    $todolistRepository=new \Repository\TodolistRepositoryImpl();
    $todolistRepository->todolist[]=new \Entity\Todolist("ress");
    $todolistService=new \Service\TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();
}
function testAddTodolist(){
    $todolistRepository=new \Repository\TodolistRepositoryImpl();
    $todolistService=new \Service\TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar");
    $todolistService->showTodolist();
}
function testRemoveTodolist(){
    $todolistRepository=new \Repository\TodolistRepositoryImpl();
    $todolistService=new \Service\TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar1");
    $todolistService->addTodolist("Belajar2");
    $todolistService->addTodolist("Belajar3");

    $todolistService->removeTodolist(2);

    $todolistService->showTodolist();
}
testRemoveTodolist();