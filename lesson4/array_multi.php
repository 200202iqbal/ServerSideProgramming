<?php
//多次元配列
[
    [1,2,3,4,5,],
    [6,7,8,9,10,],
];

$rows = [ 
    [90, 78, 82,], 
    [62, 70, 68,], 
    [68, 88, 72,], 
]; 

$userData = [
    ["id" => 1, "name" => "Aline", "email" => "alice@example.com","tel" => "03-1111-2222"],
    ["id" => 2, "name" => "Bob", "email" => "Bob@example.com","tel" => "090-3333-5555"],
    ["id" => 3, "name" => "Chris", "email" => "Chris@example.com","tel" => "050-1234-5678"],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多次元配列 / Multidimensional Array</title>
</head>
<style>

</style>
<body>
    <h2>90のデータ</h2>
    <p><?=$rows[0][0]?></p>

    <h2>88のデータ</h2>
    <p><?=$rows[2][1]?></p>
    <h2>0行のデータ</h2>
    <p><?=var_dump($rows[0])?></p>

    <h2>ユーザリスト</h2>
    <p>Name</p>
    <ul>
        <li><?=$userData[0]["name"]?></li>
        <li><?=$userData[1]["name"]?></li>
        <li><?=$userData[2]["name"]?></li>
    </ul>
    <p>Email</p>
    <ul>
        <li><?=$userData[0]["email"]?></li>
        <li><?=$userData[1]["email"]?></li>
        <li><?=$userData[2]["email"]?></li>
    </ul>
    <p>Telephone</p>
    <ul>
        <li><?=$userData[0]["tel"]?></li>
        <li><?=$userData[1]["tel"]?></li>
        <li><?=$userData[2]["tel"]?></li>
    </ul>
</body>
</html>