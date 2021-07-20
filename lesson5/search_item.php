<?php
    $items = [
        "コーヒー",
        "紅茶",
        "ほうじ茶",
    ];

    //検索アイテム
    $item = "";
    //キーワード
    $keyword = "";
    //キーワードを取得
    if(!empty($_GET["keyword"])){
        $keyword = $_GET["keyword"];
        //$keywordで商品検索
        $index = array_search($keyword,$items);
        //商品が見つかった = (index)が整数だったら
        if(is_int($index)){
            $item= $items[$index];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
        margin:1em;
    }

</style>
<body>
    <!-- div.container -->
    <div class="container">
        <h2 class="h2">商品検索</h2>
        <form action="" method="get">
            <input type="text" name="keyword" class="form-control" id="inputItem">
            <button class="btn btn-primary">検索</button>
        </form>

        <?php if($item): ?>
            <p class="alert alert-info">
                <?= $item?>が見つかりました。
            </p>
        <?php else: ?>
            <p class="alert alert-danger">
                <?= $keyword ?>が見つかりませんでした。
            </p>
        <?php endif?>
    </div>
</body>
</html>