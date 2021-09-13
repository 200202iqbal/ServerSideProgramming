<?php
require_once "Cat.php";
require_once "Dog.php";

$cat = new Cat("ミケ");
echo "$cat->name",PHP_EOL;
echo "猫声： ",$cat->cry();
echo PHP_EOL;
$cat->escape();

echo PHP_EOL;
$dog = new Dog("ぼち");
echo "犬声： ",$dog->cry();
echo PHP_EOL;
$dog->follow();
