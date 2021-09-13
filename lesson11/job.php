<?php
require_once "Brave.php";
require_once "Wizard.php";

$brave = new Brave();
$brave->name = "YSE";
$brave->hp = 100;
$brave->attack();
$brave->damage(3);

$wizard = new Wizard();
$wizard->name = "Smith";
$r = range(2021,2019);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Name</h2>
    <p><?= $brave->name?> </p>
    <h2>Job</h2>
    <p><?= $brave->job?></p>

    <h2>Name</h2>
    <p><?= $wizard->name?> </p>
    <h2>Job</h2>
    <p><?= $wizard->job?></p>

    <h2>バトル</h2>
    <p> <?= $brave->message?></p>
    <p><?= $brave->hp ?></p>
</body>
</html>