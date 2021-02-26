<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList(){
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal Menghapus Todo" . PHP_EOL;
    }else{
        $success = removeTodoList($pilihan);

        if ($success){
            echo "Berhasil Menghapus Todo" . PHP_EOL;
        }else{
            echo "Gagal Menghapus Todo" . PHP_EOL;
        }
    }

}