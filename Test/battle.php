<?php
require_once 'Brave.php';
require_once 'Wizard.php';
require_once 'Monster.php';

$brave = new Brave();
$brave->name = 'ヒーロー';
$brave->hp = 30;
$brave->attack_power = 8;
$brave->defense_power = 4;

$wizard = new Wizard();
$wizard->name = 'バーバラ';
$wizard->hp = 20;
$wizard->mp = 10;
$wizard->attack_power = 3;
$wizard->defense_power = 1;

$monster = new Monster();
$monster ->name = 'ボス';
$monster->hp = 50;
$monster->attack_power = 8;
$monster->defense_power = 5;

//続きのプログラミング
//手順 1 - 4
$monster->damaged($brave->attack());
echo $monster->message.PHP_EOL;
echo "Monster : ",$monster->hp.PHP_EOL;
$monster->damaged($wizard->magic(2));
echo $monster->message.PHP_EOL;
echo "Monster : ",$monster->hp.PHP_EOL;

$brave->damaged($monster->attack());
echo $brave->message.PHP_EOL;
echo "Brave : ",$brave->hp.PHP_EOL;

$wizard->damaged($monster->attack());
echo $wizard->message.PHP_EOL;
echo "Wizard : ",$wizard->hp.PHP_EOL;

while($monster->is_live and $brave->is_live and $wizard->is_live)
{
    $monster->damaged($brave->attack());
    echo "Monster : ",$monster->hp.PHP_EOL;

    $monster->damaged($wizard->magic(2));
    echo $monster->message.PHP_EOL;

    $brave->damaged($monster->attack());
    echo "Brave : ",$brave->hp.PHP_EOL;
    
    $wizard->damaged($monster->attack());
    echo "Wizard : ",$wizard->hp.PHP_EOL;
    
}