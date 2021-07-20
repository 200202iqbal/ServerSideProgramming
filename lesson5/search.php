<?php
//検索キーワード
$keyword = "";
//空欄でなければ$keyword にいれる
if(!empty($_GET["q"])) {
    $keyword = $_GET["q"];
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
    body{
        background-color: black;
        color:light-grey;
    }
    #container{
        display: column;
        
    }
</style>
<body>
    
    <div id="container">
        <div>
            <img src="images/googleimage.png" alt="">
        </div>    
        <form action="" method="get">
            <input type="text" name="q" value="<?= $keyword ?>">
            <p>
                <button>Google検索</button>
            </p>
        </form>
    </div>
    
</body>
</html>