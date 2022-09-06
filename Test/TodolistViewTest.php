<?php
require_once __DIR__."/../Service/TodolistService.php";
require_once __DIR__."/../Repository/TodolistRepository.php";
require_once __DIR__."/../Entity/Todolist.php";
require_once __DIR__."/../View/TodolistView.php";
require_once __DIR__."/../Helper/InputHelper.php";

use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;
function testViewShowTodolist():void{
    $todlistRepository=new TodolistRepositoryImpl();
    $todolistService=new TodolistServiceImpl($todlistRepository);
    $todolistView= new TodolistView($todolistService);

    $todolistService->addTodolist("makan");
    $todolistView->showTodoList();
}
function testViewAddTodolist():void{
    $todlistRepository=new TodolistRepositoryImpl();
    $todolistService=new TodolistServiceImpl($todlistRepository);
    $todolistView= new TodolistView($todolistService);
    
    $todolistService->addTodolist("makan");
    $todolistService->addTodolist("mandi");
    $todolistService->viewTodolist();
    
    $todolistView->addTodoList();
}
function testViewRemoveTodoList():void{
    $todlistRepository=new TodolistRepositoryImpl();
    $todolistService=new TodolistServiceImpl($todlistRepository);
    $todolistView= new TodolistView($todolistService);
    
    $todolistService->addTodolist("makan");
    $todolistService->addTodolist("mandi");
    $todolistService->showTodolist();

    $todolistView->removeTodoList();
}
testViewRemoveTodolist();