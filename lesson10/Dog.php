<?php
require_once "Animal.php";

class Dog extends Animal
{
    public $sound = "わん";

    public function follow()
    {
        echo "{$this->name}が{$this->sound}鳴いてよってきた。!";
    }
}