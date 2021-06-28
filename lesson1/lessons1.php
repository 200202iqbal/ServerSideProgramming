<?php
    //合計金額
    //ミネラルウォーター 88円 5個
    //コーヒー 120円　3個
    //割引 10%

    $price1 = 88;
    $amount1 = 5;
    $price2 = 120;
    $amount2 = 3;
    $discount_rate = 0.1;

    $sub_total1 = $price1 * $amount1;
    $sub_total2 = $price2 * $amount2;
    //合計金額
    $total = $sub_total1 + $sub_total2;
    //割引
    $total *= (1 - $discount_rate);

    //平均点
    $score1 = 76;
    $score2 = 83;
    $score3 = 89;
    $score4 = 91;
    $score_average = $score1 + $score2 + $score3 + $score4;
    $score_average /= 4;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson I </title>
</head>
<body>
    <!-- 合計金額 -->
    <h1 style="margin-left:10px;display: inline-block;background-color:black;color:white;padding:0.1em">合計金額</h1>
    <div style="background-color: rgba(0,0,0,0.6);padding:0.3em; width:80px;font-size:20px;color:#ffffff;margin-left:10px">
    <?php echo $total?> 円
    </div>


    <!-- 平均点 -->
    <h1 style="margin-left:10px; display: inline-block;background-color:black;color:white;padding:0.1em;">平均点</h1>
    <div style=" background-color: rgba(0,0,0,0.6);padding:0.3em;width:80px; font-size:20px;color:#ffffff;margin-left:10px"><?php echo $score_average ?>点</div>
</body>
</html>