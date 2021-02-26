<?php
namespace Entity{

    class Todolist{

        private string $todo;

        public function __constructor(string $todo = ""){
            $this->todo;
        }

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo)
        {
            $this->todo = $todo;
        }
    }

}

