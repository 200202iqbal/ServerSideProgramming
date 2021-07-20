<?php
//ユーザ情報の初期化(initialize)

$user = [
    "name" => "",
    "email" => "",
    "password" => "",
    "birthday_at" => "",
    "gender"=> "",
];
$gender = ["male" => "男性", "female" => "女性"];
//POST データを受け取ったら$userにいれる
if (!empty($_POST)){
    $user = $_POST;
    //$strBirthday = $user["year"]."年".$user["month"]."月".$user["day"]."日";
    $year = (int) $user["year"];
    $month = (int) $user["month"];
    $day = (int) $user["day"];
    //datetime型
    $user["birthday_at"] = date("{$year}年{$month}月{$day}日");
}
//一時的に確認
//var_dump($user);
if($errors = validate($user))
{
    //リダイレクト「転送」post.php戻す
    header("Location:post.php");
    exit;
    //var_dump(validate($user));
}

//validate(データチェック)
function validate($user)
{
    //エラー
    $errors = [];
    //一つ目の方法
    // if(empty($user["name"])){
    //     $errors["name"] = true;
    // }
    // if(empty($user["email"])){
    //     $errors["email"] = true;
    // }
    // if(empty($user["password"])){
    //     $errors["password"] = true;
    // }
    // if(empty($user["gender"])){
    //     $errors["gender"] = true;
    // }
    // if(empty($user["birthday_at"])){
    //     $errors["birthday_at"] = true;
    // }

    //入力が必要なカラム
    $columns = [
        "name",
        "email",
        "password",
        "gender",
        "birthday_at"
    ];
    foreach($columns as $column){
        if(empty($user[$column])){
            $errors[$column] = true;
        }
    }
    return $errors;
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
<body>
    <h3>氏名</h3>
    <p><?= $user["name"]?></p>
    <h3>メールアドレス</h3>
    <p><?= $user["email"]?></p>
    <h3>誕生日</h3>
    <p><?= $user["birthday_at"] ?></p>
    <h3>性別</h3>
    <p><?= $gender[$user["gender"]] ?></p>

    <p><a href="post.php"><< Back</a></p>
</body>
</html>