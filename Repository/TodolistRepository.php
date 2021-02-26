<?php

namespace Repository{

    use Entity\Todolist;

    interface TodolistRepository
    {
        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository{

        public array $todolist = array();

        public function save(Todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        public function remove(int $number): bool
        {
            // TODO: Implement remove() method.
        }

        public function findAll(): array
        {
            return $this->todolist;
        }
    }

}