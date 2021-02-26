<?php

namespace View{

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView{

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }


        function showTodoList(): void{
            while(true){
                $this->todolistService->showTodolist();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1"){
                    $this->addTodolist();
                }elseif ($pilihan == "2"){
                    $this->removeTodolist();
                }elseif ($pilihan == "x"){
                    break;
                }else{
                    echo "menu tidak tersedia" .PHP_EOL;
                }

            }
        }

        function addTodoList(): void{

        }

        function removeTodoList(): void{

        }
    }
}