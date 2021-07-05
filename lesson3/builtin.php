<?php
$date_string = date('Y年m月d日 H時i分s秒');
$date_string2 = date('Y年m月H時');

//ランダムな数字(1-6)
$random_number = rand(1,6);

//文字の長さ
$message_1 = "Hello";
$length_1 = strlen($message_1);

//日本語文字の長さ
//mb digunakan untuk bahasa jepang
$message_2 = "こんにちは";
$length_2 = mb_strlen($message_2);

$message_3 = "hello,Tokyo";
$address = "東京都新宿区";

//文字の置き換え
$address_2 = str_replace("新宿","渋谷",$address);

//is_null()
$value = null;
//$value = 100;
$result_1 = "";
if(is_null($value)){
    $result_1 = "NULLです。";
}else{
    $result_1 = "NULLではありあせん";
}

//isset()
$value = "";
$result_2 = "";
#$drinks = ["mineral water","cola","coffe"];
if(isset($value)){
    $result_2 = "値が設定されています。";
    #echo $drinks;
}else{
    $result_2 = "値が設定されていません";
}

//empty()
$value = "";
$value = 0;
$value = true;
$value = null;
$value = [];
if(empty($value)){
    $result_3 = "空欄です";
}else
{
    $result_3 = "空欄ではありません。";
}

//データチェック
$user_name = "Tokyo Tarou";
$message_4 ="";
if(empty($user_name)){
    $message_4 = "ユーザー名を入力してください。";
}
else{
    $message_4 = $user_name;
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
    <h2>日時</h2>
    <p><?= $date_string ?></p>
    <p><?= $date_string2 ?></p>
    <h2>サイコロ</h2>
    
    <h2><?= $message_1 ?> の長さ</h2>
    <p>Length message : <?= $length_1 ?></p>
    
    <p>Random number (1-6) : <?= $random_number ?></p>

    <h2><?=$message_2 ?> の長さ </h2>
    <p>Length message 2 : <?=$length_2?> </p>
    <p><?=$message_3 ?></p>
    <p>Message 6 : <?= substr($message_3,6) ?></p>
    <p>Message 0,5 : <?= substr($message_3,0,5) ?></p>
    <p>Message -5 : <?= substr($message_3,-5) ?></p>
    <p>Message -3 : <?=substr($message_3,-3)?></p>
    <p>Message -3,2 : <?=substr($message_3,-3,2)?></p>
    <p>Message -6,1 : <?= substr($message_3,-6,1) ?></p>

    <p><?= $address?></p>
    <p><?= mb_substr($address,3)?></p>
    <p><?= mb_substr($address,0,3) ?></p>
    <p><?= mb_substr($address,-3,2) ?></p>

    
    <h2>str_replace()</h2>
    <?= $address_2 ?>

    <h2>is_null()</h2>
    <p><?= $result_1 ?></p>

    <h2>isset()</h2>
    <p><?= $result_2?></p>

    <h2>empty()</h2>
    <p><?= $result_3 ?></p>

    <h2>ユーザー名 <?= $message_4 ?></h2>
</body>
</html>