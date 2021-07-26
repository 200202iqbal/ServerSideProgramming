<?php
//定義
define("CSV_PATH","data/users.csv");
if (!empty($_POST))
{
    //POSTがあれば書き込み
    insert($_POST);
}
//データを書き込む
function insert($posts)
{
    initCSV();
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
</body>
</html>