<?php
require_once 'config.php';
require_once 'connect.php';

session_start();

//商品コードで検索
function findByCode($pdo,$code)
{
    $sql = "SELECT *FROM items WHERE code= '{$code}'";
    $stmt = $pdo->query($sql);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insert($pdo,$data)
{
    $sql = "INSERT INTO items(code,name,price,stock)
            VALUES (:code,:name,:price,:stock)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($data);
}

function check($posts)
{
    if(empty($posts)) return;
    foreach ($posts as $column => $post )
    {
        $posts[$column] = htmlspecialchars($post,ENT_QUOTES,"UTF-8");
    }return $posts;
}

function validate($data)
{
    $errors = [];
    if(empty($data["code"])) $errors["code"] = "商品コードを入力してください。";
    if(empty($data["name"])) $errors["name"] = "商品コードを入力してください。";
    if(empty($data["price"])) $errors["price"] = "価格を入力してください。";
    if($data["stock"]<0) $errors["stock"] = "在庫数を入力してください。";
    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    //サニタイズ
    $posts = check($_POST);
    $errors = validate($posts);

    //商品コードで検索
    $item = findByCode($pdo,$posts["code"]);
    if ($item) $errors["code"] = "商品コードが既にあります";
    
    //セッション登録
    $_SESSION["item"] = $posts;
    $_SESSION["errors"] = $errors;
    
    if($errors)
    {

    }else{
        if(insert($pdo,$_POST))
        {
            if (isset($_SESSION["item"])) unset($_SESSION["item"]);
        }
    }
    header("Location: input.php");
}

