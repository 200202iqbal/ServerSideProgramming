<?php
require_once 'config.php';
require_once 'connect.php';

session_start();

function update($pdo, $data)
{
    $sql = "UPDATE items SET 
            code = :code,
            name = :name,
            price = :price,
            stock = :stock
            WHERE id = :id;";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($data);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['id']) {
        $item = $_POST;
        update($pdo, $item);
    }
    header("Location: edit.php?id={$item['id']}");
}
