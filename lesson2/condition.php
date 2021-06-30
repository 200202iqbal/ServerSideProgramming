<?php 
$enemy_hp = 10;
$attack = 10;
$attack = rand(1,15);
if($enemy_hp - $attack <= 0){
    $message = "敵を倒した";
    
}else {
    $enemy_hp -= $attack;
    $message = "敵はまだ生きている。残っているHPは ".$enemy_hp;
}
//移動方法
$distance = rand(0,70)/10;
$move_method = "";
if($distance < 1)
{
    $move_method = "徒歩";
}else if($distance >= 1 && $distance < 5){
    $move_method = "自動車";
}else{
    $move_method = "電車";
}
//曜日の番号 (日 : 0; 月 : 1; 火 : 2 ....)
$week_number = date('w');
$week_strings = ["日","月","火","水","木","金","土"];
$week = $week_strings[$week_number];
$garbage_day = "";
switch($week_number){
    case 1:
    case 3:
        $garbage_day = "燃えるゴミ";
        break;
    case 5:
        $garbage_day = "燃えないゴミ";
        break;
    default:
        $garbage_day = "回収なし";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            margin-left : 10px;
        }
        h2{
            background-image: linear-gradient(to left,rgba(34, 146, 173,0),rgba(34, 146, 173,1));
            padding:5px;
            color: white;
        }
        .burnable{
            background-image:linear-gradient(rgba(218, 89, 38, 1),rgba(218, 89, 38, 0.3));
            padding:5px;
            font-weight: bolder;
            
        }
    </style>
</head>
<body>
    <h2>メッセージ</h2>
    <p>敵のHP <?= $enemy_hp?></p>
    <p>ダメージ <?= $attack?></p>
    <p><?= $message?></p>

    <h2>移動方法</h2>
    <p>距離 : <?= $distance?></p>
    <p>移動 : <?= $move_method?></p>

    <h2>曜日</h2>
    <p>番号 : <span id="gomi"><?= $week_number ?></span></p>
    <p>今日は何曜日ですか ? <?= $week."曜日" ?></p>
    <p>今日のゴミは <span id="gomihi"><?= $garbage_day?></span></p>

    <script>
        var gomi = document.querySelector("#gomi").innerHTML;
        console.log(gomi);
        if( gomi == 1 || gomi ==  2 || gomi ==3){
            var gomihi = document.querySelector("#gomihi");
           gomihi.classList.add("burnable")
        }
    </script>
</body>
</html>