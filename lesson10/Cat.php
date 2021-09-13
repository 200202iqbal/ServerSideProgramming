<?php
require_once "Animal.php";

class Cat extends Animal
{
    public $sound = "にゃー";

    public function escape()
    {
        echo "{$this->name}が{$this->sound}鳴いて逃げた。";
    }
}