<?php

    //セッションを開始
    session_start();
    
    //ユーザデータを用意
    $users = [
        ['id' => 1, 'name' => 'user1', 'email' => 'user1@test.com', 'password' => '1111'],
        ['id' => 2, 'name' => 'user2', 'email' => 'user2@test.com', 'password' => '2222'],
        ['id' => 3, 'name' => 'user3', 'email' => 'user3@test.com', 'password' => '3333'],
        ];
    
    //POSTデータが送信されていれば、ユーザーを検索
    if(!empty($_POST))
    {
        $user = searchUser($users,$_POST["email"],$_POST["password"]);
        //もしユーザが見つかったら
        if($user)
        {
            //セッションにユーザを登録する
            $_SESSION["user"] = $user;
            header("Location:home.php");
        }
    }

        /*
        * ユーザーの検索
        */
        function searchUser($users, $email,$password)
        {
            foreach ($users as $user)
            {
                if($user["email"] == $email && $user["password"] ==$password){
                    //email とpassword が同じなら$userを返す
                    return $user;
                }
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
        box-sizing: border-box;
        margin-top:1em;
    }
    #lblEmail
    {
        font-size: 1.5em;
    }
    #lblPassword
    {
        font-size: 1.5em;
    }
    .container
    {
        width: 80%;
        border:1px solid #B5B5B5;
        box-shadow: 3px -16px 12px 5px rgba(212,212,212,0.65);
        -webkit-box-shadow: 3px -16px 12px 5px rgba(212,212,212,0.65);
        -moz-box-shadow: 3px -16px 12px 5px rgba(212,212,212,0.65);
    }
    #buttonContainer{
        margin: 1em 0 0.5em 0;
       /* border: 1px solid red; */
    }
    .btn{
        margin-right: 0.8em;
    }
    .btn-signup
    {
        border:1px solid #B5B5B5;
    }
    .btn-signup:hover
    {
        
        background-color: #E2E2E2;
    }
    #lblLogin
    {
        margin-top:0.4em;
        margin-bottom: 1em;
    }
    .resultMessage
    {
        margin:0.5em 0px 0.5em 0;
    }
    .containerItem
    {
        margin: 0.5em 0 0.5em 0;
    }

</style>
<body>
    <div class="container">
        <h1 id="lblLogin">Login</h1>
        <form action="" method="post"> 
        <div class="containerItem">
            <h2 id="lblEmail">Email :</h2>
            <input type="text" name="email" class="form-control">
        </div>
        <div>
            <h2 id="lblPassword">Password :</h2>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="" id="buttonContainer">
            <button class="btn btn-primary">Log-In</button>
            <button class="btn btn-light btn-signup">Sign-Up</button>
        </div>
        </form>
        <!-- POSTデータがあれば処理 -->
    <?php if(isset($_POST["email"])):?>
        <?php if(isset($user["id"])):?>
            <p class="alert alert-danger resultMessage">Welcome, <?= $user["name"]?>さん</p>
        <?php else :?>
            <p class="alert alert-danger resultMessage">Emailまたはpasswordが間違っています</p>
        <?php endif ?>
    <?php endif ?>
    </div>
    
</body>
</html>