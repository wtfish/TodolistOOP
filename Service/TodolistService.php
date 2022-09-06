<?php
namespace Service{
    use Repository\TodolistRepositoryImpl;
    use Entity\Todolist;
    interface TodolistService{
        function showTodolist():void;
        function addTodolist(string $todo):void;
        function removeTodolist(int $number):void;
    }
    class TodolistServiceImpl implements TodolistService{
        private TodolistrepositoryImpl $todolistRepository;

        function __construct(TodolistRepositoryImpl $todolistRepository){
            $this->todolistRepository=$todolistRepository;
        }

        function showTodolist():void{
            
            echo "TODOLIST". PHP_EOL;
            foreach($this->todolistRepository->findAll() as $number=>$value){
                echo "{$number}. {$value->getTodo()} ". PHP_EOL;
            }
        }
        function addTodolist(string $todo):void{
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAH TODOLIST".PHP_EOL;

        }
        function removeTodolist(int $number):void{
            if($this->todolistRepository->remove($number)){
                echo "SUKSES MENGHAPUS TODOLIST".PHP_EOL;
            }
            else{
                echo "GAGAL MENGHAPUS TODOLIST".PHP_EOL;
            }
        }
    }
}