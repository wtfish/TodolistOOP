<?php
require_once __DIR__."/Entity/Todolist.php";
require_once __DIR__."/Repository/TodolistRepository.php";
require_once __DIR__."/Service/TodolistService.php";
require_once __DIR__."/View/TodolistView.php";
require_once __DIR__."/Helper/InputHelper.php";

use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

echo "Applikasi Todolist".PHP_EOL;

$todlistRepository=new TodolistRepositoryImpl();
$todolistService=new TodolistServiceImpl($todlistRepository);
$todolistView= new TodolistView($todolistService);

$todolistView->showTodoList();