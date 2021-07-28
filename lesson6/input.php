<?php
//定義
define("CSV_PATH","data/users.csv");
if (!empty($_POST))
{
    //POSTがあれば書き込み
    
    $errors=insert($_POST);
}
//ユーザ読み込み
$users=load();
//データを書き込む
function insert($posts)
{
    initCSV();
    //データチェック
    $errors = validate($posts);
    if($errors)
    {
        //エラーがあったら返す
        return $errors;
    }
    //パスワードの暗号化
    $posts["password"] = password_hash($posts["password"],PASSWORD_BCRYPT);
    //ファイルを開く(add)
    $file = fopen(CSV_PATH,"a");
    //データの追加を書き込み
    fputcsv($file,$posts);
    //ファイルを閉じる
    fclose($file);
}

function validate($data)
{
    $errors = [];
    if(empty($data["name"]))
    {
        $errors["name"] = "氏名が入力されていません";
    }
    if(empty($data["email"]))
    {
        $errors["email"] = "Emailが入力されていません";
    }
    if(empty($data["password"]))
    {
        $errors["password"] = "パスワードが入力されていません";
    }
    return $errors;
}

function load()
{
    $items =[];
    if(file_exists(CSV_PATH))
    {
        //ファイルがあればファイルを開く(read only)
        $file=fopen(CSV_PATH,"r");
        //カラムを読み込む
        $columns = fgetcsv($file);
        //var_dump($column);
        //var_dump($columns);
        //1行ずつCSV読み込み
        while($data = fgetcsv($file))
        {
            //カラムを繰り返す
            foreach($columns as $index => $column)
            {
                $item[$column] = $data[$index];
            }
                //商品を追加
                $items[] = $item;
            }
            fclose($file);
        }
    return $items;
}


//CSVの初期化
function initCSV()
{
    //ファイルを開く
    //a+ = add & read
    $file=fopen(CSV_PATH,"a+");
    if(!fgets($file))
    {
        //もしデータがなければ
        $data = ["name","email","password"];
        //ファイルに書き込み(write)
        fputcsv($file,$data);
    }
    fclose(($file));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .itemContainer{
        margin-top: 0.8em;
    }
</style>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="itemContainer">
                <h2>氏名</h2>
                <input type="text" name="name">
                <p></p>
            </div>
           <div class="itemContainer">
                <h2>Email</h2>
                <input type="text" name="email">
           </div>
            <div class="itemContainer">
                <h2>パスワード</h2>
                <input type="password" name="password">
            </div>
            <div class="itemContainer">
                <button>登録</button>
            </div>
            
        </form>
    </div>
    <h2>ユーザ</h2>
    <table>
        <?php if($users): ?>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user["name"]?></td>
                <td><?= $user["email"]?></td>
            </tr>
        <?php endforeach?>
        <?php endif ?>
    </table>
</body>
</html>