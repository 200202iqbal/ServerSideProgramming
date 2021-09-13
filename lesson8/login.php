<?php
//PDO接続 切断
require_once "config.php";
require_once "connect.php";

//Session Start
session_start();

//authorize(認証)
function auth($pdo,$email,$password)
{
    //emailで検査
    //$sql = "SELECT * FROM users WHERE email = '{$email}'";
    
    $sql = "SELECT * FROM users WHERE email = :email";
    //SQLを用意
    $stmt = $pdo->prepare($sql);
    //email をいれる
    $stmt->bindParam("email",$email,PDO::PARAM_STR);
    //SQLを実行
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //パスワードが一致したら
    if($user && password_verify($password,$user["password"]))
    {
        return $user;
    }

    //ユーザの1件データをとる
    //$user = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    //ユーザのデータを返す
    
}

function check($posts)
{
    foreach($posts as $column => $post)
    {
        $posts[$column] = htmlspecialchars($post,ENT_QUOTES,"UTF-8");
    }
    return $posts;
}
$error=false;
//もしポストリクエストだったら
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $posts = check($_POST);
    $user = auth($pdo, $posts["email"],$posts["password"]);
    if($user)
    {
        $_SESSION["user"] = $user;
        header("Location: my_page.php");
       //データ確認
        //var_dump($user);
    }else
    {
        $error = true;
        $errorMsg = "email / password wrong";
    }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("components/head.php")?>
<body>
    <main id="login" class="d-flex justify-content-center">
        <div class="w-50 mt-3 p-5 bg-light">
            <form action="" method="post">
                <h3 class="h3 mb-3 fw-normal">Sign In</h3>
                <div class="form-floating">
                    <input type="text" name="email" class="form-control" id="input">
                    <label for="input">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary">Sign In</button>
                <?php 
                    if($error)
                        {
                        $className="bg-danger";
                        $styleFont = "style=color:white;padding:0.5em;font-style:italic;margin-top:0.5em;";
                        $errorMsg = "<p $styleFont>$errorMsg </p>";
                        echo "<div class=$className>  $errorMsg </div>";
                        }
                ?>
                <?php if($error): ?>
                    <p style='color:black'><?= $errorMsg?></p>
                <?php endif;?>
                <!-- <p class="text-danger"><?=@$errorMsg ?></p> -->
            </form>
        </div>
    </main>
</body>
</html>