<?php
class Character
{
    public $name;
    public $job;
    public $hp;
    public $mp;
    public $message;

    public function attack()
    {
        $this->message = "{$this->message}のこうぎき";
    }
    
    public function damage($point)
    {
        $this-> hp -= $point;
    }
}