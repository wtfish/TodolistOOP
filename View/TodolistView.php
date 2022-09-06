<?php
namespace View{
    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView{
        private TodolistService $todolistService;
        function __construct(TodolistService $todolistService){
            $this->todolistService=$todolistService;
        }
        function showTodoList():void{
            while (true) {
                $this->todolistService->showTodolist();
                echo "MENU". PHP_EOL;
                echo "1. Tambah Todo". PHP_EOL;
                echo "2. Hapus Todo". PHP_EOL;
                echo "x. Keluar". PHP_EOL;
                $pilihan=InputHelper::input("Pilih");
                if ($pilihan==="1") {
                    $this->AddTodoList();
                }
                else if ($pilihan==="2") {
                    $this->RemoveTodoList();
                }
                else if ($pilihan==="x") {
                    break;
                }
                else {
                    echo "PILIHAN TIDAK DIMENGERTI!". PHP_EOL;
                }
            }
            echo "Sampai Jumpa !". PHP_EOL;
        }
        function addTodoList():void{
            while(true){
                echo "MENAMBAH TODO".PHP_EOL;
                $todo=InputHelper::input("Todo ('x' untuk batal) : ");
                
                if($todo ==='x'||$todo ==="X"){
                    echo "BATAL MENAMBAH TODO". PHP_EOL;
                    break;
                }else{
                    $this->todolistService->addTodoList($todo);
                }
            }
        }
        function removeTodoList():void{
            while(true){
                echo "MENGHAPUS TODO". PHP_EOL;
                $pilihan = InputHelper::input("Nomor : ");
                if($pilihan==="x"||$pilihan==="X"){
                    echo "Batal Menghapus". PHP_EOL;
                    break;
                }
                else{
                    $Success=$this->todolistService->removeTodoList($pilihan);
                }
            }
        }
    }
}