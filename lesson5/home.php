<?php
    //セッションを開始
    session_start();

    if(isset($_SESSION["user"]))
    {
        //セッションにユーザデータがあったら
        $user=$_SESSION["user"];
    }
    else{
        //セッションにユーザデータがなかったら
        //ログイン画面に戻す
        header("Location:login.php");
    }
    date_default_timezone_set('Asia/Tokyo');
    $date = new DateTime();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホームページ</title>
</head>
<style>
    h1{
        margin-bottom: 0em;
    }
    body{
        margin: 1em 0 0 1em;
    }
    .btn{
        box-sizing: border-box;
        padding:0.8em;
        background-color: #F14646;
        border: none;
        cursor: pointer;
        color:white;
        border-radius: 3px;
        font-size: 0.9em;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom:0.5em;
    }
    .container
    {
        width: 80%;
        border:1px solid #BFBFBF;
        display: block;
        text-align: center;
        box-shadow: 16px 16px 37px -3px rgba(0,0,0,0.28);
    }
    .container > p
    {
        font-size: 1.5em;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        box-sizing: border-box;
        margin-bottom: 0.4em;

    }
    #todayDate
    {
        font-size:1em;
    }
</style>
<body>
    <h1>ホーム</h1>
    
    <p id="todayDate">
    今日は <?= date("y年m月d日")?>
    </p>
    <hr>
    <div class="container">
        <p>
            <?= $user["name"] ?>さん、ようこそ!
        </p>
        <a href="logout.php">
            <input class="btn btn-red" type="button" value="Logout">
        </a>
        
    </div>
    
    
</body>
</html>