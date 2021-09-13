<?php
$db_name = "my_shop";
$host = "localhost";
$user_name = "root";
$password = "";

//DSN を定義
$dsn = "mysql:dbname={$db_name};host{$host}";

$pdo = new PDO($dsn, $user_name, $password);

try {
    echo "success";
} catch (PDOException $e) {
    echo "failed";
    echo $e->getMessage();
}
echo PHP_EOL;

//PDOの中を確認
var_dump($pdo);

$sql = "SELECT * FROM users LIMIT 10;";
//SQL を実行
$query = $pdo->query($sql);

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}

if ($rows) {
    $i = 1;
    foreach ($rows as $row) {
        echo "$i. {$row["name"]}" . PHP_EOL;
        $i++;
    }
}
if ($rows) {
    foreach ($rows as $row) {
        var_dump($row);
    }
}
