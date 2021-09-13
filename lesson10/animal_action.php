<?php

require_once "Animal.php";

//インスタンス作成
$animal = new Animal();
$animal->speak("こんにちは");

//名前を決める
$animal->name = "ぼち";
$animal->run();

$animal_2 = new Animal();
$animal_2->name = "Taro";
$animal_2->run();
$animal_2->speak("Hello");